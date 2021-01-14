<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    use UploadFiles ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.​news​_views​.create");
    }

    public function grid()
    {
        $query = News::query();
        return DataTables::of($query)
            ->addColumn("gallery", function ($record) {
                $link = route("​news​.gallery", $record->id);
                return "<a href='$link'>Gellery</a>";
            })
            ->addColumn("actions", function($record) {
                $edit_link = route("​news​.edit", $record->id);
                $delete_link = route("​news​.destroy", $record->id);
                $actions = "
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' onClick='return ConfirmDelete();' class='badge bg-danger'>Delete</a>
                ";
                return $actions;
            })
        ->rawColumns(['actions','gallery'])->make(true);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.​news​_views​.create");
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
            "title_en" => "required",
            "title_ar" => "required",
            "image" => "required",
            "brief_en" => "required",
            "brief_ar" => "required",
            "body_en" => "required",
            "body_ar" => "required",
        ]);

        News​::create([
            "title_ar" => $request->title_ar,
            "title_en" => $request->title_en,
            "image" => $request->title_ar,
            "brief_en" => $request->brief_en,
            "brief_ar" => $request->brief_ar,
            "body_en" => $request->body_en,
            "body_ar" => $request->body_ar,
        ]);

        return redirect(route("​news​.index"))->with("success_message", "News​ has been stored successfully.");
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
    
        $​news​ = News​::find($id);
        return view("admin.​news​_views​.edit", compact('​news​'));
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
            "title_en" => "required",
            "title_ar" => "required",
            "image" => "required",
            "brief_en" => "required",
            "brief_ar" => "required",
            "body_en" => "required",
            "body_ar" => "required",
        ]);

        $​news​ = News​::find($id);

        $​news​->update([
            "title_ar" => $request->title_ar,
            "title_en" => $request->title_en,
            "image" => $request->title_ar,
            "brief_en" => $request->brief_en,
            "brief_ar" => $request->brief_ar,
            "body_en" => $request->body_en,
            "body_ar" => $request->body_ar,
        ]);

        return redirect(route("​news​.index"))->with("success_message", "News​ has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $​news​ = News​::find($id);
        $​news​->delete();

        return redirect(route("​news​.index"))->with("success_message", "News​ has been deleted successfully.");
    }

    public function gallery($news​_id)
    {
        $​news​ = News​::findOrfail($news​_id);
        $gallery = $​news​->gallery;
        $gallery_decoded = [];
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
        }
        
        return view("admin.​news​_views​.gallery.index", compact("news​_id", "gallery_decoded"));
    }

    public function createGallery($news​_id)
    {
        return view("admin.​news​_views​.gallery.create", compact("news​_id"));
    }

    public function storeGallery(Request $request, $news​_id)
    {
        $​news​ = News​::findOrfail($news​_id);

        if (in_array($request->file_type, ['image', 'video'])) {
            $uploaded_gallery = $this->uploadFile($request->gallery, 'News​', 'gallery', $request->file_type, 'news​_files');
        } else {
            $uploaded_gallery = $request->gallery;
        }

        $gallery = $​news​->gallery;
        $gallery_decoded = [];
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
            $gallery_decoded[$request->file_type][] = $uploaded_gallery;
        } else {
            $gallery_decoded[$request->file_type][] = $uploaded_gallery;
        }

        $​news​->update([
            "gallery" => json_encode($gallery_decoded),
        ]);

        return redirect(route("​news​.gallery", $​news​))->with("success_message", "​news​ gallery has been stored successfully.");
    }

    public function deleteGallery($news​_id, $file_name)
    {
        $​news​ = News​::findOrfail($news​_id);

        $gallery = $​news​->gallery;
        if ($gallery) {
            $new_gallery = [];
            $gallery_decoded = json_decode($gallery, true);
            foreach ($gallery_decoded as $type => $one_arr) {
                foreach ($one_arr as $one_value) {
                    if ($one_value != $file_name) {
                        $new_gallery[$type][] = $file_name;
                    }
                }
            }
            $​news​->update([
                "gallery" => json_encode($new_gallery),
            ]);

            return redirect(route("​news​.gallery", $​news​))->with("success_message", "​news​ gallery has been deleted successfully.");
        }
        return redirect(route("​news​.gallery", $​news​))->with("success_message", "​news​ gallery has been deleted successfully.");
    }
}
