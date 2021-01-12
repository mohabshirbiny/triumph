<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'facilities',
        'hotel_id',
        'image',
        'book_url',
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
        "about_en" ,
        'about_ar',
        'image_path',
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

    public function getAboutEnAttribute()
    {
        return json_decode($this->desc, true)['en'];
    }

    public function getAboutArAttribute()
    {
        return json_decode($this->desc, true)['ar'];
    }

    public function getFacilitiesAttribute($value)
    {
        return Facility::whereIn('id',json_decode($value, true))->get();
    }

    public function getImagePathAttribute()
    {
        $imageUrl = url('images/room_files/' . $this->image);
        // $imageUrl = url('public/images/hotel_files/' . $this->logo);
        return $imageUrl;
    }
}
