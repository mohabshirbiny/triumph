<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $appends = [
        "title_en" ,
        'title_ar',
    ];
    
    public function getTitleArAttribute()
    {
        return json_decode($this->title, true)['ar'];

        return unserialize($this->title)['ar'];
    }

    public function getTitleEnAttribute()
    {
        return json_decode($this->title, true)['en'];
        return unserialize($this->title)['en'];
    }
}
