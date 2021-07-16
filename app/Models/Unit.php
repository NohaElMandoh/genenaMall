<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Unit extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'unit_categories','unit_id','category_id');
    }
    protected $appends = ['title'];
    
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
}
