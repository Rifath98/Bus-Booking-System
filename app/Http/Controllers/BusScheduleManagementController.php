<?php

namespace App\Http\Controllers;
use App\Models\BusSchedule\BusSchedule;
use Illuminate\Http\Request;

class BusScheduleManagementController extends Controller
{
    // Show all Bus Schedule
    public function scheduleview()
    {
       return BusSchedule::all();
    }

    // Store a newly created Bus Schedule
    public function scheduleadd(Request $request)
    {
        $busschedule = new BusSchedule($request->all());
        $busschedule->save();
        return 'Successfully Added! ';
    }

     // Display the specified Bus Schedule.
    public function scheduleshow($id)
    {
        //
    }

     // Update the specified resource in Bus Schedule.
    public function scheduleupdate(Request $request, $id)
    {
        $busschedule = BusSchedule::find($id);
        $busschedule->update($request->all());
        return $busschedule;
    }

    // Remove the specified resource from Bus Schedule.
    public function scheduledelete($id)
    {
        BusSchedule::destroy($id);
        return 'Deleted';
    }
}
