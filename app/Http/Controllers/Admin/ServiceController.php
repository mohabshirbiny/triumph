<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceCategory;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    use UploadFiles;

    public function index()
    {
        return view("admin.services.index");
    }

    public function grid()
    {
        $query = Service::query();
        return DataTables::of($query)
            ->addColumn("name_en", function ($record) {
                return $record->title_en;
            })
            ->addColumn("name_ar", function ($record) {
                return $record->title_ar;
            })
            ->addColumn("image", function ($record) {
                return "<img style='max-width: 100px;min-width: 100px;' src=".$record->image_path.">";
            })
            ->addColumn("actions", function ($record) {
                $edit_link = route("services.edit", $record->id);
                $delete_link = route("services.destroy", $record->id);
                $actions = "
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' class='badge bg-danger'>Delete</a>
                ";
                return $actions;
            })
            ->rawColumns(['actions', "image"])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();
        return view("admin.services.create", compact("hotels"));
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
            "hotel_id" => "required",
            "title.en" => "required",
            "title.ar" => "required",
            "image" => "required",
            "text.en" => "required",
            "text.ar" => "required",
        ]);

        $image = $this->uploadFile($request->image, 'Service', 'logo', 'image', 'service_files');

        Service::create([
            "hotel_id" => $request->hotel_id,
            "title" => json_encode($request->title),
            "text" => json_encode($request->text),
            "image" => $image,
        ]);

        return redirect(route("services.index"))->with("success_message", "Service has been stored successfully.");
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
        $service = Service::find($id);
        $hotels = Hotel::all();

        return view("admin.services.edit", compact("service", "hotels"));
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
            "hotel_id" => "required",
            "title.en" => "required",
            "title.ar" => "required",
            "text.en" => "required",
            "text.ar" => "required",
        ]);

        $service = Service::find($id);

        $image = $service->image;
        if ($request->image) {
            $image = $this->uploadFile($request->image, 'Service', 'image', 'image', 'service_files');
        }

        

        $service->update([
            "hotel_id" => $request->hotel_id,
            "title" => json_encode($request->title),
            "text" => json_encode($request->text),
            "image" => $image,
        ]);

        return redirect(route("services.index"))->with("success_message", "service has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect(route("services.index"))->with("success_message", "Service has been deleted successfully.");
    }

    public function gallery($service_id)
    {
        $service = Service::find($service_id);
        $gallery = $service->gallery;
        $gallery_decoded = [];
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
        }

        return view("admin.services.gallery.index", compact("service_id", "gallery_decoded"));
    }

    public function createGallery($service_id)
    {
        return view("admin.services.gallery.create", compact("service_id"));
    }

    public function storeGallery(Request $request, $service_id)
    {
        $service = Service::find($service_id);

        if (in_array($request->file_type, ['image', 'video'])) {
            $uploaded_gallery = $this->uploadFile($request->gallery, 'Service', 'gallery', $request->file_type, 'service_files');
        } else {
            $uploaded_gallery = $request->gallery;
        }

        $gallery = $service->gallery;
        $gallery_decoded = [];
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
            $gallery_decoded[$request->file_type][] = $uploaded_gallery;
        } else {
            $gallery_decoded[$request->file_type][] = $uploaded_gallery;
        }

        $service->update([
            "gallery" => json_encode($gallery_decoded),
        ]);

        return redirect(route("services.gallery", $service))->with("success_message", "Service gallery has been stored successfully.");
    }

    public function deleteGallery($service_id, $file_name)
    {
        $service = Service::find($service_id);

        $gallery = $service->gallery;
        if ($gallery) {
            $new_gallery = [];
            $gallery_decoded = json_decode($gallery, true);
            foreach ($gallery_decoded as $type => $one_arr) {
                foreach ($one_arr as $one_value) {
                    if ($one_value != $file_name) {
                        $new_gallery[$type][] = $one_value;
                    }
                }
            }
            $service->update([
                "gallery" => json_encode($new_gallery),
            ]);

            return redirect(route("services.gallery", $service))->with("success_message", "Service gallery has been deleted successfully.");
        }
        return redirect(route("services.gallery", $service))->with("success_message", "Service gallery has been deleted successfully.");
    }
}
