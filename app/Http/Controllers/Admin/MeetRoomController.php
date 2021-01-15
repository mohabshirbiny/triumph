<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use App\MeetRoom;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MeetRoomController extends Controller
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
        return view("admin.meet-rooms.index");
    }

    public function grid()
    {
        $query = MeetRoom::query();
        return DataTables::of($query)
            ->addColumn("room", function ($room) {

                return $room->title_en;
            })
            ->addColumn("hotel", function ($room) {

                $hotel = Hotel::find($room->hotel_id);
                
                return ($hotel)?$hotel->title_en: '';
            })
            ->addColumn("image", function ($room) {
                return "<img style='max-width: 100px;min-width: 100px;' src=".$room->image_path.">";
            })
            ->addColumn("actions", function ($room) {
                $edit_link = route("meet-rooms.edit", $room->id);
                $delete_link = route("meet-rooms.delete", $room->id);
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
        return view('admin.meet-rooms.create',compact('hotels','facilities'));

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
            'description' => 'required',
            'inquire_mail' => 'required',
            'about' => 'required',
            'image' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'seat_image' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
        ]);
        
        
        $image = $this->uploadFile($request->image, 'MeetRoom', 'image', 'image', 'room_files');
        sleep(1);
        $seat_image = $this->uploadFile($request->seat_image, 'MeetRoom', 'image', 'image', 'room_files');

        $MeetRoom = MeetRoom::create([
            "title"         => json_encode($request->title),
            "description"         => json_encode($request->description),
            "about"         => json_encode($request->about),
            "facilities"    => json_encode($request->facilities),
            "hotel_id"      => $request->hotel_id,
            "inquire_mail"      => $request->inquire_mail,
            "image"         => $image,
            "seat_image"         => $seat_image,
        ]);
        
        // dd('ff');
        return redirect(route("meet-rooms.index"))->with("success_message", "MeetRoom has been stored successfully.");

        
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $room = MeetRoom::findOrFail($id);
        $hotels = Hotel::all();
        $facilities = Facility::all();
        return view('admin.meet-rooms.edit',compact('room','hotels','facilities' ));

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
            'inquire_mail' => 'required',
            'about' => 'required',
            'image' => 'image|mimes:png,jpeg,png,jpg,gif|max:2048',
            'seat_image' => 'image|mimes:png,jpeg,png,jpg,gif|max:2048',
        ]);


        $MeetRoom = MeetRoom::findOrFail($id);

        $image = $MeetRoom->image;
        if ($request->has('image') && $request->image != null) {
            $image = $this->uploadFile($request->image, 'MeetRoom', 'image', 'image', 'room_files');
        }
        $seat_image = $MeetRoom->seat_image;
        if ($request->has('seat_image') && $request->seat_image != null) {
            $seat_image = $this->uploadFile($request->seat_image, 'MeetRoom', 'image', 'image', 'room_files');
        }
        $MeetRoom->update(
            [
                "title"         => json_encode($request->title),
                "description"          => json_encode($request->description),
                "about"          => json_encode($request->about),
                "facilities"    => json_encode($request->facilities),
                "hotel_id"      => $request->hotel_id,
                "inquire_mail"      => $request->inquire_mail,
                "image"         => $image,
                "seat_image"         => $seat_image,
            ]
        );

        

        
        return redirect(route("meet-rooms.index"))->with("success_message", "room has been updated successfully.");
        // dd($MeetRoom);
    }
    
    public function delete($id)
    {
        $room = MeetRoom::find($id);
        $room->delete();

        return redirect(route("meet-rooms.index"))->with("success_message", "MeetRoom has been deleted successfully.");
    }
}
