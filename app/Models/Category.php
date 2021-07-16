<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;
    protected $appends = ['name'];
    public function units()
    {
        return $this->hasMany('App\Models\UnitCategory');
    }
    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
    public function getNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->name_en;
        } else if (App::isLocale('ar')) {
            return $this->name_ar;
        }
    }
}
