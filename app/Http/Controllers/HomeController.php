<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Resturant;
use App\Room;
use App\Service;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd(request()->all());
        $sliders = Slider::All();
        $services = Service::All();
        return view('front.index',compact('sliders','services'));
    }

    public function landingPage()
    {
        if (request()->has('hotel')) {
           
            $hotel = request()->hotel;
            return redirect()->route('index',[$hotel]);
        }
        
        $hotels = Hotel::Where('active' ,1)->get();

        return view('front.landing',compact('hotels','services'));
    }

    public function getHotelData($hotel_slug)
    {
         
        $services = Service::All();
        $hotel = Hotel::Where('active' ,1)->where('slug',$hotel_slug)->first();
        if ($hotel) {
            $sliders  = $hotel->sliders();
            return view('front.index',compact('hotel','services','sliders'));
        }

        return redirect()->route('landing');
        // 
        
    }

    public function getRoomData($id)
    {
        $room = Room::findorfail($id);
        $hotel = $room->hotel;
        // dd($hotel);
        return view('front.room_data',compact('room','hotel'));
        
    }

    public function getAllRestaurants($hotel_slug)
    {
        $hotel = Hotel::Where('active' ,1)->where('slug',$hotel_slug)->first();
        if ($hotel) {
            return view('front.all-restaurants',compact('hotel'));

        }

        return redirect()->route('landing');
                
    }

    public function getRestaurantData($hotel_slug,$id)
    {
        
        $hotel = $restaurant->hotel;
        // dd($id,$hotel_slug);
        return view('front.restaurant-details',compact('restaurant','hotel'));
        
    }

    public function downloadRestaurantFile($hotel_slug,$id)
    {
        $restaurant = Resturant::findorfail($id);
        // get file name from route
        $fileName = $request->segments()[2];
        
        $pathToFile = Storage::path('initiatives_files/'. $fileName);
        
        if($fileName != null && Storage::exists('initiatives_files/' .$fileName) ) {
            return response()->download($pathToFile);

        } else {
            abort('404');
        }
    }
}
