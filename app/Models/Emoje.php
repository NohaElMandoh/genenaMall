<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Emoje extends Model
{
    use HasFactory;
    protected $appends = ['title','desc','sub_title','why_desc','what_desc'];
    
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }

    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }
    public function getSubTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->sub_title_en;
        } else if (App::isLocale('ar')) {
            return $this->sub_title_ar;
        }
    }
    public function getWhyDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->why_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->why_desc_ar;
        }
    }
    public function getWhatDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->what_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->what_desc_ar;
        }
    }
    
}
