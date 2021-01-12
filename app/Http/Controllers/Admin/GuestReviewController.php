<?php

namespace App\Http\Controllers\Admin;

use App\GuestReview;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GuestReviewController extends Controller
{
    use UploadFiles;

    public function index()
    {
        return view("admin.guest-reviews.index");
    }

    public function grid()
    {
        $query = GuestReview::query();
        return DataTables::of($query)
            ->addColumn("title_en", function ($record) {
                $name = json_decode($record->name, true);
                return $name['en'];
            })
            ->addColumn("title_ar", function ($record) {
                $name = json_decode($record->name, true);
                return $name['ar'];
            })
            ->addColumn("actions", function ($record) {
                $actions = "";
                $edit_link = route("guest-reviews.edit", $record->id);
                $delete_link = route("guest-reviews.delete", $record->id);
                
                $actions = "
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
        return view("admin.guest-reviews.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "name.en" => "required",
            "name.ar" => "required",
            "review.en" => "required",
            "review.ar" => "required",
            "hotel.en" => "required",
            "hotel.ar" => "required",
            "cover" => "required",
        ]);
        

        $cover = $this->uploadFile($request->cover, 'GuestReview', 'cover', 'image', 'guest_review_files');

        GuestReview::create([
            "name"             => json_encode($request->name),
            "review"             => json_encode($request->review),
            "link"      => $request->link,
            "hotel"      => json_encode($request->hotel),
            "cover"             => $cover,
        ]);
        
        return redirect(route("guest-reviews.index"))->with("success_message", "guest reviews has been stored successfully.");
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
        $details = GuestReview::find($id);
        $details->name = json_decode($details->name, true);
        return view("admin.guest-reviews.edit", compact("details"));
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
            "name.en" => "required",
            "name.ar" => "required",
        ]);

        $hotel = GuestReview::find($id);

        $logo = $hotel->logo;
        if ($request->logo) {
            $logo = $this->uploadFile($request->logo, 'GuestReview', 'logo', 'image', 'guest_review_files');
        }
        $cover = $hotel->cover;
        if ($request->cover) {
            $cover = $this->uploadFile($request->cover, 'GuestReview', 'cover', 'image', 'guest_review_files');
        }

        $hotel->update([
            "name" => json_encode($request->name),
            "name"             => json_encode($request->name),
            "slug"              => Str::slug($request->slug),
            "review"             => json_encode($request->review),
            "location_url"      => $request->location_url,
            "booking_url"       => $request->booking_url,
            "social_media"      => json_encode($request->social_media),
            "contact_details"   => json_encode($request->contact_details),
            "logo"              => $logo,
            "cover"             => $cover,
        ]);

        return redirect(route("guest-reviews.index"))->with("success_message", "hotel has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $hotel = GuestReview::findOrfail($id);
        // dd($hotel);
        // $hotel->delete();

        return redirect(route("guest-reviews.index"))->with("success_message", "hotel has been deleted successfully.");
    }
}
