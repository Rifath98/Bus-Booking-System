<?php

namespace App\Models\BusScheduleBooking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusScheduleBooking extends Model
{
    protected $table = 'bus_schedule_bookings';
    protected $fillable = [
        'bus_seate_id',
        'user_id',
        'bus_schedule_id',
        'seat_number',
        'price',
        'status'
    ];

    public function busschedules(){
        return $this->belongsToMany('App\Models\BusSchedule\BusSchedule');
    }

    public function busseats(){
        return $this->belongsToMany('App\Models\BusSeate\BusSeate');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User\User');
    }

}
