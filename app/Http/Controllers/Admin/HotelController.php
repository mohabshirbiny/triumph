<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
                $edit_link = route("hotels.edit", $record->id);
                $delete_link = route("hotels.destroy", $record->id);
                $actions = "
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' class='badge bg-danger'>Delete</a>
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
            // "icon" => "required",
        ]);

        // $logo = $this->uploadFile($request->icon, 'Hotel', 'icon', 'image', 'hotel_files');

        Hotel::create([
            "title" => json_encode($request->title),
            // "icon" => $logo,
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

        $icon = $hotel->icon;
        if ($request->icon) {
            $icon = $this->uploadFile($request->icon, 'Hotel', 'icon', 'image', 'hotel_files');
        }

        $hotel->update([
            "title" => json_encode($request->title),
            "icon" => $icon,
        ]);

        return redirect(route("hotels.index"))->with("success_message", "hotel has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect(route("hotels.index"))->with("success_message", "hotel has been deleted successfully.");
    }
}
