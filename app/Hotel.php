<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'title',
        'contact_details',
        'social_media',
        'index_page_data',
        'about',
        'slug',
        'booking_url',
        'active',
        'cover',
        'logo',
        'rate_image',
        'meet_image',
        'restaurant_image',
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
        "about_en" ,
        'about_ar',
        'logo_path',
        'cover_path',
        'meet_image_path',
        'rate_image_path',
        'restaurant_image_path',
    ];
    
    
    public function sliders()
    {
        return $this->hasMany(Slider::class)->get();
    }

    public function rooms()
    {
        return $this->hasMany(Room::class)->get();
    }
    
    public function restaurants()
    {
        return $this->hasMany(Resturant::class)->get();
    }
    
    public function getTitleArAttribute()
    {
        return json_decode($this->title, true)['ar'];
    }

    public function getTitleEnAttribute()
    {
        return json_decode($this->title, true)['en'];
    }

    public function getAboutEnAttribute()
    {
        return json_decode($this->about, true)['en'];
    }

    public function getAboutArAttribute()
    {
        return json_decode($this->about, true)['ar'];
    }

    public function getSocialMediaAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getContactDetailsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getIndexPageDataAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getLogoPathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->logo);
        // $imageUrl = url('public/images/hotel_files/' . $this->logo);
        return $imageUrl;
    }
    public function getCoverPathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->cover);
        // $imageUrl = url('public/images/hotel_files/' . $this->cover);
        return $imageUrl;
    }
    public function getRateImagePathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->rate_image);
        // $imageUrl = url('public/images/hotel_files/' . $this->cover);
        return $imageUrl;
    }
    public function getMeetImagePathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->meet_image);
        // $imageUrl = url('public/images/hotel_files/' . $this->cover);
        return $imageUrl;
    }
    public function getRestaurantImagePathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->restaurant_image);
        // $imageUrl = url('public/images/hotel_files/' . $this->cover);
        return $imageUrl;
    }
    

}
