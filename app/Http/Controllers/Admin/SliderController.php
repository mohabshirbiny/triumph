<?php

namespace App\Http\Controllers\Admin;

use App\AppSetting;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Traits\UploadFiles;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
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
 
        return view("admin.sliders.index");
    }

    public function grid()
    {
        $query = Slider::query();
        return DataTables::of($query)
            ->addColumn("hotel", function ($slider) {

                $hotel = Hotel::find($slider->hotel_id);
                
                return $hotel->title_en;
            })
            ->addColumn("image", function ($slider) {
                return "<img style='max-width: 100px;min-width: 100px;' src=".$slider->image_path.">";
            })
            ->addColumn("actions", function ($slider) {
                $edit_link = route("sliders.edit", $slider->id);
                $delete_link = url("/admin/sliders/". $slider->id.'/delete');
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
        return view('admin.sliders.create',compact('hotels'));

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
            // 'description' => 'string',
            'image' => 'required|image|mimes:png,jpeg,png,jpg,gif|max:2048',
            // 'video' => 'file|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'             
            ]);
        
        // if ($request->has('video')) {
        //     $sliderVideoName = $this->uploadFile($request->video , 'slider','video','sliders');
        // }

        // dd($request->all(),$sliderVideoName,$request->video->getMimeType());
        
        $newSlider = Slider::create([
            "title1" => json_encode($request->title1),
            "title2" => json_encode($request->title2),
            "title3" => json_encode($request->title3),
            "btn_text" => json_encode($request->btn_text),
            "btn_link" => $request->btn_link,
            "order" => $request->order,
            "hotel_id" => $request->hotel_id,
        ]);
        
        if ($newSlider) {
            
            $sliderImageName = $this->uploadFile($request->image, 'Slider', 'image', 'image', 'slider_files');

            $newSlider->update(['image' =>$sliderImageName ]);

        }

        // dd('ff');
        return redirect('/admin/sliders')->with('success',"slider Created");

        
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $slider = Slider::findOrFail($id);
        $hotels = Hotel::all();
        return view('admin.sliders.edit',compact('slider','hotels' ));

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
        $rules = ['hotel_id' => 'required'];
        
        if ($request->has('image') && $request->image != null) {
            $rules['image'] = 'image|mimes:png,jpeg,png,jpg,gif|max:2048';
        }

        $this->validate($request, $rules);


        $Slider = Slider::findOrFail($id);

        $Slider->update(
            [
                "title1" => json_encode($request->title1),
                "title2" => json_encode($request->title2),
                "title3" => json_encode($request->title3),
                "btn_text" => json_encode($request->btn_text),
                "btn_link" => $request->btn_link,
                "order" => $request->order,
                "hotel_id" => $request->hotel_id,
            ]
        );

        if ($request->has('image') && $request->image != null) {
            // $sliderImageName = $this->uploadFile($request->image , 'slider','image','sliders',1920,1080);
            $sliderImageName = $this->uploadFile($request->image, 'Slider', 'image', 'image', 'slider_files');

            $Slider->update(['image' =>$sliderImageName ]);
        }

        
        return redirect(route("sliders.index"))->with("success_message", "slider has been updated successfully.");
        // dd($Slider);
    }
    
    public function destroy($id)
    {
        $slider = Slider::find($id);
        // $slider->delete();

// return redirect('/admin/sliders')->with('success',"slider deleted");
        return redirect(route("sliders.index"))->with("success_message", "Slider has been deleted successfully.");
    }
}
