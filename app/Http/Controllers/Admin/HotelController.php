<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use League\CommonMark\Normalizer\SlugNormalizer;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    use UploadFiles;

    public function index()
    {
        return view("admin.hotels.index");
    }

    public function grid()
    {
        $query = Hotel::query();
        return DataTables::of($query)
            ->addColumn("title_en", function ($record) {
                $title = json_decode($record->title, true);
                return $title['en'];
            })
            ->addColumn("title_ar", function ($record) {
                $title = json_decode($record->title, true);
                return $title['ar'];
            })
            ->addColumn("actions", function ($record) {
                $actions = "";
                $edit_link = route("hotels.edit", $record->id);
                $delete_link = route("hotels.delete", $record->id);
                $change_active = route("hotels.change-active", $record->id);
                
                if (!$record->active) {
                    $actions .= "<a href='$change_active' class='badge bg-success'>Activate</a>";
                    
                }else{
                    $actions .= "<a href='$change_active' class='badge bg-secondary'>Deactivate</a>";
                }
                
                $actions .= "
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' class='badge bg-danger delete-btn'>Delete</a>
                ";
                return $actions;
            })
            ->rawColumns(['actions'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.hotels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title.en" => "required",
            "title.ar" => "required",
            "slug" => "required|unique:hotels,slug",
            "logo" => "required",
            "cover" => "required",
        ]);
        

        $logo = $this->uploadFile($request->logo, 'Hotel', 'logo', 'image', 'hotel_files');
        $cover = $this->uploadFile($request->cover, 'Hotel', 'cover', 'image', 'hotel_files');

        Hotel::create([
            "title"             => json_encode($request->title),
            "slug"              => Str::slug($request->slug),
            "about"             => json_encode($request->about),
            "location_url"      => $request->location_url,
            "booking_url"       => $request->booking_url,
            "social_media"      => json_encode($request->social_media),
            "contact_details"   => json_encode($request->contact_details),
            "logo"              => $logo,
            "cover"             => $cover,
        ]);
        
        return redirect(route("hotels.index"))->with("success_message", "hotel has been stored successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Hotel::find($id);
        $details->title = json_decode($details->title, true);
        return view("admin.hotels.edit", compact("details"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "title.en" => "required",
            "title.ar" => "required",
        ]);

        $hotel = Hotel::find($id);

        $logo = $hotel->logo;
        if ($request->logo) {
            $logo = $this->uploadFile($request->logo, 'Hotel', 'logo', 'image', 'hotel_files');
        }
        $cover = $hotel->cover;
        if ($request->cover) {
            $cover = $this->uploadFile($request->cover, 'Hotel', 'cover', 'image', 'hotel_files');
        }

        $hotel->update([
            "title" => json_encode($request->title),
            "title"             => json_encode($request->title),
            "slug"              => Str::slug($request->slug),
            "about"             => json_encode($request->about),
            "location_url"      => $request->location_url,
            "booking_url"       => $request->booking_url,
            "social_media"      => json_encode($request->social_media),
            "contact_details"   => json_encode($request->contact_details),
            "logo"              => $logo,
            "cover"             => $cover,
        ]);

        return redirect(route("hotels.index"))->with("success_message", "hotel has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $hotel = Hotel::findOrfail($id);
        // dd($hotel);
        // $hotel->delete();

        return redirect(route("hotels.index"))->with("success_message", "hotel has been deleted successfully.");
    }

    public function changeActive ($id)
    {
        $hotel = Hotel::findOrfail($id);
        
        if ($hotel->active) {
            $hotel->update(['active' => 0]);
        } else {
            $hotel->update(['active' => 1]);
        }
        
        return redirect(route("hotels.index"))->with("success_message", "hotel has been updated successfully.");
    }
}
