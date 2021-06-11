<?php

namespace App\Models\Bus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'type',
        'vehical_number'];

    public function busseats(){
        return $this->hasMany('App\Models\BusSeate\BusSeate');
    }

    function busroute(){
        return $this->belongsToMany('App\Models\BusRoute\BusRoute');
    }
}
