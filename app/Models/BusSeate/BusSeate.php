<?php

namespace App\Models\BusSeate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSeate extends Model
{
    protected $table = 'bus_seates';
    protected $fillable = [
        'bus_id',
        'seat_number',
        'price',
    ];
    public function bus(){
        return $this->belongsTo('App\Models\Bus\Bus');
    }

    public function busschedulebookings(){
        return $this->belongsToMany('App\Models\BusScheduleBooking\BusScheduleBooking');
    }

}
