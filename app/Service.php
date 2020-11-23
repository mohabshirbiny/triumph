<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ["hotel_id", "title", "text", "image"];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    protected $appends = [
        "title_en",
        'title_ar',
        "text_en",
        'text_ar',
        'image_path',
    ];

    public function getTitleEnAttribute()
    {
        return json_decode($this->title, true)['en'];
    }

    public function getTitleArAttribute()
    {
        return json_decode($this->title, true)['ar'];
    }

    public function getTextEnAttribute()
    {
        return json_decode($this->text, true)['en'];
    }

    public function getTextArAttribute()
    {
        return json_decode($this->text, true)['ar'];
    }

   

    public function getImagePathAttribute()
    {
        $imageUrl = url('images/service_files/' . $this->image);
        // $imageUrl = url('public/images/service_files/' . $this->cover);
        return $imageUrl;
    }

    

}
