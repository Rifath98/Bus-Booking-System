<?php

namespace App\Models\BusSchedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    /**
     * @var string
     */
    protected $table = 'bus_schedules';
    /**
     * @var string[]
     */
    protected $fillable = [
        'bus_route_id',
        'direction',
        'start_timestamp',
        'end_timestamp'
    ];

    //Foreign Key relationship with Bus Route table One to many
    public function busroute(){
        return $this->belongsTo('App\Models\BusRoute\BusRoute');
    }

    public function busschedulebookings(){
        return $this->belongsToMany('App\Models\BusScheduleBooking\BusScheduleBooking');
    }


}
