<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\Page;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use League\CommonMark\Normalizer\SlugNormalizer;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

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
                $actions = "";
                $edit_link = route("hotels.edit", $record->id);
                $delete_link = route("hotels.delete", $record->id);
                $change_active = route("hotels.change-active", $record->id);
                $gallery = route("hotels.gallery", $record->id);
                $pages = route("hotels.pages", $record->id);
                
                if (!$record->active) {
                    $actions .= "<a href='$change_active' class='badge bg-success'>Activate</a>";
                    
                }else{
                    $actions .= "<a href='$change_active' class='badge bg-secondary'>Deactivate</a>";
                }
                
                $actions .= "
                    <a href='$pages' class='badge bg-primary'>Pages</a>
                    <a href='$gallery' class='badge bg-primary'>Gallery</a>
                    <a href='$edit_link' class='badge bg-warning'>Edit</a>
                    <a href='$delete_link' onClick='return ConfirmDelete();' class='badge bg-danger delete-btn'>Delete</a>
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
            "slug" => "required|unique:hotels,slug",
            "logo" => "required",
            "cover" => "required",
            "restaurant_image" => "required",
            "meet_image" => "required",
            "rate_image" => "required",
            "index_background_image" => "required",
            "youtube_background_image" => "required",
        ]);
        

        $logo = $this->uploadFile($request->logo, 'Hotel', 'logo', 'image', 'hotel_files');
        $cover = $this->uploadFile($request->cover, 'Hotel', 'cover', 'image', 'hotel_files');
        $restaurant_image = $this->uploadFile($request->restaurant_image, 'Hotel', 'restaurant_image', 'image', 'hotel_files');
        $meet_image = $this->uploadFile($request->meet_image, 'Hotel', 'meet_image', 'image', 'hotel_files');
        $rate_image = $this->uploadFile($request->rate_image, 'Hotel', 'rate_image', 'image', 'hotel_files');
        $index_background_image = $this->uploadFile($request->index_background_image, 'Hotel', 'index_background_image', 'image', 'hotel_files');
        $youtube_background_image = $this->uploadFile($request->youtube_background_image, 'Hotel', 'youtube_background_image', 'image', 'hotel_files');

        Hotel::create([
            "title"             => json_encode($request->title),
            "slug"              => Str::slug($request->slug),
            "about"             => json_encode($request->about),
            "location_url"      => $request->location_url,
            "booking_url"       => $request->booking_url,
            "social_media"      => json_encode($request->social_media),
            "contact_details"   => json_encode($request->contact_details),
            "index_page_data"   => json_encode($request->index_page_data),
            "logo"              => $logo,
            "cover"             => $cover,
            "restaurant_image"             => $restaurant_image,
            "meet_image"             => $meet_image,
            "rate_image"             => $rate_image,
            "index_background_image"             => $index_background_image,
            "youtube_background_image"             => $youtube_background_image,
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

        $logo = $hotel->logo;
        if ($request->logo) {
            $logo = $this->uploadFile($request->logo, 'Hotel', 'logo', 'image', 'hotel_files');
        }

        $cover = $hotel->cover;
        if ($request->cover) {
            $cover = $this->uploadFile($request->cover, 'Hotel', 'cover', 'image', 'hotel_files');
        }

        $restaurant_image = $hotel->restaurant_image;
        if ($request->restaurant_image) {
            $restaurant_image = $this->uploadFile($request->restaurant_image, 'Hotel', 'restaurant_image', 'image', 'hotel_files');
        }

        $rate_image = $hotel->rate_image;
        if ($request->rate_image) {
            $rate_image = $this->uploadFile($request->rate_image, 'Hotel', 'rate_image', 'image', 'hotel_files');
        }

        $meet_image = $hotel->meet_image;
        if ($request->meet_image) {
            $meet_image = $this->uploadFile($request->meet_image, 'Hotel', 'meet_image', 'image', 'hotel_files');
        }

        $index_background_image = $hotel->index_background_image;
        if ($request->index_background_image) {
            $index_background_image = $this->uploadFile($request->index_background_image, 'Hotel', 'index_background_image', 'image', 'hotel_files');
        }
        
        $youtube_background_image = $hotel->youtube_background_image;
        if ($request->youtube_background_image) {
            $youtube_background_image = $this->uploadFile($request->youtube_background_image, 'Hotel', 'youtube_background_image', 'image', 'hotel_files');
        }

        $hotel->update([
            "title" => json_encode($request->title),
            "title"             => json_encode($request->title),
            "slug"              => Str::slug($request->slug),
            "about"             => json_encode($request->about),
            "location_url"      => $request->location_url,
            "booking_url"       => $request->booking_url,
            "social_media"      => json_encode($request->social_media),
            "contact_details"   => json_encode($request->contact_details),
            "index_page_data"   => json_encode($request->index_page_data),
            "logo"              => $logo,
            "cover"             => $cover,
            "restaurant_image"             => $restaurant_image,
            "meet_image"             => $meet_image,
            "rate_image"             => $rate_image,
            "index_background_image"             => $index_background_image,
            "youtube_background_image"             => $youtube_background_image,
        ]);

        return redirect(route("hotels.index"))->with("success_message", "hotel has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $hotel = Hotel::findOrfail($id);
        // dd($hotel);
        $hotel->delete();

        return redirect(route("hotels.index"))->with("success_message", "hotel has been deleted successfully.");
    }

    public function changeActive ($id)
    {
        $hotel = Hotel::findOrfail($id);
        
        if ($hotel->active) {
            $hotel->update(['active' => 0]);
        } else {
            $hotel->update(['active' => 1]);
        }
        
        return redirect(route("hotels.index"))->with("success_message", "hotel has been updated successfully.");
    }

    public function gallery($hotel_id)
    {
        $hotel = Hotel::findOrfail($hotel_id);
        $gallery = $hotel->gallery;
        $gallery_decoded = [];
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
        }
        
        
        return view("admin.hotels.gallery.index", compact("hotel_id", "gallery_decoded"));
    }

    public function createGallery($hotel_id)
    {
        $hotel = Hotel::findOrfail($hotel_id);
        return view("admin.hotels.gallery.create", compact("hotel"));
    }

    public function storeGallery(Request $request, $hotel_id)
    {
        $hotel = Hotel::findOrfail($hotel_id);
        
        if (in_array($request->appearance_place, ['index_page', 'gallery_page','gym_page'])) {
            $uploaded_gallery = $this->uploadFile($request->gallery, 'Hotel', 'gallery', 'image', 'hotel_files');
        }

        $gallery = $hotel->gallery;
        $gallery_decoded = [];
        
        if ($gallery) {
            $gallery_decoded = json_decode($gallery, true);
            $gallery_decoded[$request->appearance_place][] = $uploaded_gallery;
        } else {
            $gallery_decoded[$request->appearance_place][] = $uploaded_gallery;
        }
        
        $hotel->update([
            "gallery" => json_encode($gallery_decoded),
        ]);

        return redirect(route("hotels.gallery", $hotel))->with("success_message", "hotels gallery has been stored successfully.");
    }

    public function deleteGallery($hotel_id, $file_name)
    {
        $hotels = Hotel::findOrfail($hotel_id);

        $gallery = $hotels->gallery;
        if ($gallery) {
            $new_gallery = [];
            $gallery_decoded = json_decode($gallery, true);
            foreach ($gallery_decoded as $type => $one_arr) {
                // dd($type,$one_arr);
                foreach ($one_arr as $one_value) {
                     
                    $key = array_search($file_name, $one_arr);
                    if ($key !== false) {
                        unset($one_arr[$key]);
                    }
                }
                $new_gallery[$type]=$one_arr;
            }
            // dd($new_gallery);
            $hotels->update([
                "gallery" => json_encode($new_gallery),
            ]);

            return redirect(route("hotels.gallery", $hotels))->with("success_message", "hotels gallery has been deleted successfully.");
        }
        return redirect(route("hotels.gallery", $hotels))->with("success_message", "hotels gallery has been deleted successfully.");
    }

    public function pages($hotel_id)
    {
        $hotel = Hotel::findOrfail($hotel_id);

        $pagesArray = [
            'spa',
            'celebrate',
            'careers',
            'gym',
            'contact',
            'about',
            'gallery',
            'meet-rooms'
        ];

        foreach ($pagesArray as $page) {

            if(!$hotel->pages()->contains('key', $page)) {
                $pageq = Page::create(['hotel_id'=>$hotel->id, 'key'=>$page]);
            }
        }

        return view("admin.hotels.pages.index", compact("hotel"));
    }

    public function showPage($hotel_id,$page)
    {
        $hotel = Hotel::findOrfail($hotel_id);
        
        $page = Page::findOrfail($page);

        return view("admin.hotels.pages.update", compact("hotel",'page'));
    }

    public function updatePage(Request $request,$id)
    {
        $hotel = Hotel::findOrfail($id);
       
 
        $page = Page::findOrfail($request->page);

        $cover = $page->cover;
        if ($request->cover) {
            $cover = $this->uploadFile($request->cover, 'Hotel', 'cover', 'image', 'hotel_files');
        }

        $page->update([
            "title"   => json_encode($request->title),
            "content"   => json_encode($request->content),
            "cover"              => $cover,
        ]);

        return view("admin.hotels.pages.index", compact("hotel"));
    }
}
