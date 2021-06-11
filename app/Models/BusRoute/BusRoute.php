<?php

namespace App\Models\BusRoute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $table = 'bus_routes';
    protected $fillable = [
        'bus_id',
        'route_id',
        'status'];

    public function bus(){
        return $this->belongsTo('App\Models\Bus\Bus');
    }
    // Bus Routes has many Routes
    public function routes(){
        return $this->belongsToMany('App\Models\Route\Route');
    }

    public function busschedules(){
        return $this->hasMany('App\Models\BusSchedule\BusSchedule');
    }
}
