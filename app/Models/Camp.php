<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Camp extends Model
{
    use HasFactory;
    protected $appends = ['title'];
    
    public function plans()
    {
        return $this->hasMany('App\Models\CampsPlan')->limit(2);
    }
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
}
