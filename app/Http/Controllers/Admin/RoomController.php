<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use App\Room;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoomController extends Controller
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
        return view("admin.rooms.index");
    }

    public function grid()
    {
        $query = Room::query();
        return DataTables::of($query)
            ->addColumn("room", function ($room) {

                return $room->title_en;
            })
            ->addColumn("hotel", function ($room) {

                $hotel = Hotel::find($room->hotel_id);
                
                return $hotel->title_en;
            })
            ->addColumn("image", function ($room) {
                return "<img style='max-width: 100px;min-width: 100px;' src=".$room->image_path.">";
            })
            ->addColumn("actions", function ($room) {
                $edit_link = route("rooms.edit", $room->id);
                $delete_link = url("/admin/rooms/". $room->id.'/delete');
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
        return view('admin.rooms.create',compact('hotels','facilities'));

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
        // dd($request->all());
        $this->validate($request, [
            'hotel_id' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
        ]);
        
        
        $image = $this->uploadFile($request->image, 'Room', 'image', 'image', 'room_files');

        $Room = Room::create([
            "title"         => json_encode($request->title),
            "desc"         => json_encode($request->desc),
            "facilities"    => json_encode($request->facilities),
            "hotel_id"      => $request->hotel_id,
            "image"         => $image,
        ]);
        
        // dd('ff');
        return redirect(route("rooms.index"))->with("success_message", "Room has been stored successfully.");

        
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $room = Room::findOrFail($id);
        $hotels = Hotel::all();
        $facilities = Facility::all();
        return view('admin.rooms.edit',compact('room','hotels','facilities' ));

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
            'desc' => 'required',
            'image' => 'image|mimes:png,jpeg,png,jpg,gif|max:2048',
        ]);


        $Room = Room::findOrFail($id);

        $image = $Room->image;


        if ($request->has('image') && $request->image != null) {
            $image = $this->uploadFile($request->image, 'Room', 'image', 'image', 'room_files');
        }
        $Room->update(
            [
                "title"         => json_encode($request->title),
                "desc"          => json_encode($request->desc),
                "facilities"    => json_encode($request->facilities),
                "hotel_id"      => $request->hotel_id,
                "image"         => $image,
            ]
        );

        

        
        return redirect(route("rooms.index"))->with("success_message", "room has been updated successfully.");
        // dd($Room);
    }
    
    public function destroy($id)
    {
        $room = Room::find($id);
        // $room->delete();

        return redirect(route("rooms.index"))->with("success_message", "Room has been deleted successfully.");
    }
}
