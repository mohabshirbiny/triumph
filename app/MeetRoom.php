<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetRoom extends Model
{
    protected $fillable = [
        'title',
        'about',
        'description',
        'facilities',
        'hotel_id',
        'image',
        'seat_image',
        'inquire_mail',
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
        "about_en" ,
        'about_ar',
        "description_en" ,
        'description_ar',
        'image_path',
        'seat_image_path',
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
    
    public function getAboutEnAttribute()
    {
        return json_decode($this->about, true)['en'];
    }

    public function getAboutArAttribute()
    {
        return json_decode($this->about, true)['ar'];
    }

    public function getFacilitiesAttribute($value)
    {
        if ($value != 'null') {
            return Facility::whereIn('id',json_decode($value, true))->get();
        }else{
            return [];
        }
        
    }

    public function getImagePathAttribute()
    {
        $imageUrl = url('images/room_files/' . $this->image);
        // $imageUrl = url('public/images/hotel_files/' . $this->logo);
        return $imageUrl;
    }
    public function getSeatImagePathAttribute()
    {
        $imageUrl = url('images/room_files/' . $this->seat_image);
        // $imageUrl = url('public/images/hotel_files/' . $this->logo);
        return $imageUrl;
    }
}
