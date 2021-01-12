<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    protected $fillable = [
        'title',
        'description',
        'facilities',
        'contact_details',
        'hotel_id',
        'image',
        'cover',
        'pdf_link',
        'type',
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
        "description_en" ,
        'description_ar',
        'image_path',
        'cover_path',
        
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function getTitleArAttribute()
    {
        return json_decode($this->title, true)['ar'];
    }

    public function getTitleEnAttribute()
    {
        return json_decode($this->title, true)['en'];
    }

    public function getDescriptionEnAttribute()
    {
        return json_decode($this->description, true)['en'];
    }

    public function getDescriptionArAttribute()
    {
        return json_decode($this->description, true)['ar'];
    }

    public function getFacilitiesAttribute($value)
    {
        return Facility::whereIn('id',json_decode($value, true))->get();
    }

    public function getContactDetailsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getImagePathAttribute()
    {
        $imageUrl = url('images/restaurant_files/' . $this->image);
        // $imageUrl = url('public/images/restaurant_files/' . $this->image);
        return $imageUrl;
    }
    public function getCoverPathAttribute()
    {
        $imageUrl = url('images/restaurant_files/' . $this->cover);
        // $imageUrl = url('public/images/restaurant_files/' . $this->cover);
        return $imageUrl;
    }
}
