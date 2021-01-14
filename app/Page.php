<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'content',
        'hotel_id',
        'cover',
        'key',
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
        "content_en" ,
        'content_ar',
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

    public function getContentEnAttribute()
    {
        return json_decode($this->content, true)['en'];
    }

    public function getContentArAttribute()
    {
        return json_decode($this->content, true)['ar'];
    }

    public function getCoverPathAttribute()
    {
        $imageUrl = url('images/hotel_files/' . $this->cover);
        // $imageUrl = url('public/images/hotel_files/' . $this->logo);
        return $imageUrl;
    }
}
