<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Website extends Model
{
    use HasFactory;
    protected $appends = ['media_desc'];
    
    public function getMediaDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->media_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->media_desc_ar;
        }
    }
}
