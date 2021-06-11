<?php

namespace App\Models\Route;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    protected $fillable = [
        'node_one',
        'node_two',
        'route_number',
        'distance',
        'time'
    ];

    function busroute(){
        return $this->belongsToMany('App\Models\BusRoute\BusRoute');
    }
}
