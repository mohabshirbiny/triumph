<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use App\Resturant;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ResturantController extends Controller
{
    use UploadFiles;

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.restaurants.index");
    }

    public function grid()
    {
        $query = Resturant::query();
        return DataTables::of($query)
            ->addColumn("restaurant", function ($resturant) {

                return $resturant->title_en;
            })
            ->addColumn("hotel", function ($resturant) {

                $hotel = Hotel::find($resturant->hotel_id);
                
                return $hotel->title_en;
            })
            ->addColumn("image", function ($resturant) {
                return "<img style='max-width: 100px;min-width: 100px;' src=".$resturant->image_path.">";
            })
            ->addColumn("actions", function ($resturant) {
                $edit_link = route("restaurants.edit", $resturant->id);
                $delete_link = route("restaurants.delete", $resturant->id);

                $actions = "
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' onClick='return ConfirmDelete();' class='badge bg-danger'>Delete</a>
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
        $facilities = Facility::all();
        return view('admin.restaurants.create',compact('hotels','facilities'));

    }
    
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $this->validate($request, [
            'hotel_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'cover' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'pdf_link' => 'required|mimes:pdf|max:2048'

        ]);
        
        
        $image = $this->uploadFile($request->image, 'Resturant', 'image', 'image', 'restaurant_files');
        sleep(1);
        $cover = $this->uploadFile($request->cover, 'Resturant', 'cover', 'image', 'restaurant_files');
        sleep(1);
        $pdf_link = $this->uploadFile($request->pdf_link, 'Resturant', 'pdf', 'file', 'restaurant_files');

        $Resturant = Resturant::create([
            "title"             => json_encode($request->title),
            "description"       => json_encode($request->description),
            "facilities"        => json_encode($request->facilities),
            "contact_details"   => json_encode($request->contact_details),
            "hotel_id"          => $request->hotel_id,
            "type"              => $request->type,
            "image"             => $image,
            "cover"             => $cover,
            "pdf_link"             => $pdf_link,
        ]);
        
        // dd('ff');
        return redirect(route("restaurants.index"))->with("success_message", "Resturant has been stored successfully.");

        
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $restaurant = Resturant::findOrFail($id);
        $hotels = Hotel::all();
        $facilities = Facility::all();
        return view('admin.restaurants.edit',compact('restaurant','hotels','facilities' ));

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
        //
        // dd($request->all());
        $this->validate($request, [
            'hotel_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'cover' => 'image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'pdf_link' => 'mimes:pdf|max:2048'

        ]);


        $Resturant = Resturant::findOrFail($id);

        $image = $Resturant->image;
        if ($request->has('image') && $request->image != null) {
            $image = $this->uploadFile($request->image, 'Resturant', 'image', 'image', 'restaurant_files');
        }
        
        $cover = $Resturant->cover;
        if ($request->has('cover') && $request->cover != null) {
            $cover = $this->uploadFile($request->cover, 'Resturant', 'cover', 'image', 'restaurant_files');
        }
        
        $pdf_link = $Resturant->pdf_link;
        if ($request->has('pdf_link') && $request->pdf_link != null) {
            $pdf_link = $this->uploadFile($request->pdf_link, 'Resturant', 'pdf', 'file', 'restaurant_files');
        }

        $Resturant->update(
            [
                "title"             => json_encode($request->title),
                "description"       => json_encode($request->description),
                "facilities"        => json_encode($request->facilities),
                "contact_details"   => json_encode($request->contact_details),
                "hotel_id"          => $request->hotel_id,
                "type"              => $request->type,
                "image"             => $image,
                "cover"             => $cover,
                "pdf_link"           => $pdf_link,
            ]
        );

        

        
        return redirect(route("restaurants.index"))->with("success_message", "resturant has been updated successfully.");
        // dd($Resturant);
    }
    
    public function delete ($id)
    {
        $resturant = Resturant::find($id);
        $resturant->delete();

        return redirect(route("restaurants.index"))->with("success_message", "Resturant has been deleted successfully.");
    }
}
