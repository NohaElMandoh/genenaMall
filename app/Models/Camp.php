<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;

    public function plans()
    {
        return $this->hasMany('App\Models\CampsPlan')->limit(2);
    }
    
}
