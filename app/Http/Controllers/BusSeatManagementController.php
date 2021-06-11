<?php

namespace App\Http\Controllers;

use App\Http\Resources\Bus as BusResource;
use Illuminate\Http\Request;
use App\Models\BusSeate\BusSeate;
use App\Models\Bus\Bus;
class BusSeatManagementController extends Controller
{
    // Show all Bus seat
    public function index(){
        return BusSeate::all();
    }
    /**
     *  Add new Bus Seat
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus = new Bus($request->all());
        $bus->save();
        return 'Successfully Added!';
    }

    /**
     * Display the specified Seats.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bus::find($id)->getBusSeat;
    }

    /**
     * Update the specified Seats.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $busseate = BusSeate::find($id);
        $busseate->update($request->all());
        return $busseate;
    }

    /**
     * Remove the Seats.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BusSeate::destroy($id);
        return 'Deleted';
    }


}
