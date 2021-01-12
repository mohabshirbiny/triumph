<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestReview extends Model
{
    //

    protected $fillable = [
        'name',
        'review',
        'cover',
        'link',
        'hotel',
    ];

    protected $appends = [
        "name_en" ,
        'name_ar',
        "review_en" ,
        'review_ar',
        'cover_path',
    ];


    public function getNameArAttribute()
    {
        return json_decode($this->name, true)['ar'];
    }

    public function getNameEnAttribute()
    {
        return json_decode($this->name, true)['en'];
    }

    public function getReviewEnAttribute()
    {
        return json_decode($this->review, true)['en'];
    }

    public function getReviewArAttribute()
    {
        return json_decode($this->review, true)['ar'];
    }
    public function getHotelEnAttribute()
    {
        return json_decode($this->hotel, true)['en'];
    }

    public function getHotelArAttribute()
    {
        return json_decode($this->hotel, true)['ar'];
    }

   
    public function getCoverPathAttribute()
    {
        $imageUrl = url('images/guest_review_files/' . $this->cover);
        // $imageUrl = url('public/images/hotel_files/' . $this->cover);
        return $imageUrl;
    }
}
