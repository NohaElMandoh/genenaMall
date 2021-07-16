<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ItemsService extends Model
{
    use HasFactory;
    protected $table='items_services';
    protected $appends = ['title','short_desc','long_desc','desc'];
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    public function getShortDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->short_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->short_desc_ar;
        }
    }
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->short_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->short_desc_ar;
        }
    }
    public function getLongDescAttribute($value)
    {
        if (App ::isLocale('en')) {

            return $this->long_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->long_desc_ar;
        }
    }
}
