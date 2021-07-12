<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsService extends Model
{
    use HasFactory;
    protected $table='items_services';
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
