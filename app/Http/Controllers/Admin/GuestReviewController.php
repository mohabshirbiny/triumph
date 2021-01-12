<?php

namespace App\Http\Controllers\Admin;

use App\GuestReview;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GuestReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.guest-reviews.index");
    }

    public function grid()
    {
        $query = GuestReview::query();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuestReview  $guestReview
     * @return \Illuminate\Http\Response
     */
    public function show(GuestReview $guestReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GuestReview  $guestReview
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestReview $guestReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuestReview  $guestReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestReview $guestReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuestReview  $guestReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestReview $guestReview)
    {
        //
    }
}
