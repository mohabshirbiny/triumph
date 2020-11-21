<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title1',
        'title2',
        'title3',
        'btn_text',
        'btn_link',
        'image',
        'order',
        'hotel_id',
    ];

    protected $appends = [
        'image_path',
    ];
    
    public function getTitle1ArAttribute()
    {
        return json_decode($this->title1, true)['ar'];
    }

    public function getTitle1EnAttribute()
    {
        return json_decode($this->title1, true)['en'];
    }

    public function getTitle2ArAttribute()
    {
        return json_decode($this->title2, true)['ar'];
    }

    public function getTitle2EnAttribute()
    {
        return json_decode($this->title2, true)['en'];
    }

    public function getTitle3ArAttribute()
    {
        return json_decode($this->title3, true)['ar'];
    }

    public function getTitle3EnAttribute()
    {
        return json_decode($this->title3, true)['en'];
    }

    public function getBtnTextArAttribute()
    {
        return json_decode($this->btn_text, true)['ar'];
    }

    public function getBtnTextEnAttribute()
    {
        return json_decode($this->btn_text, true)['en'];
    }

    public function getImagePathAttribute()
    {
        $imageUrl = url('images/slider_files/' . $this->image);
        // $imageUrl = url('public/images/slider_files/' . $this->image);
        return $imageUrl;
    }
}
