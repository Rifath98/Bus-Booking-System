<?php

namespace App\Http\Controllers;

use App\Models\BusRoute\BusRoute;
use Illuminate\Http\Request;

class RouteMapController extends Controller
{
    /**
     * Display all Bus Routes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BusRoute::all();
    }

    /**
     * Store a newly created resource in Bus Route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $busroute = new BusRoute($request->all());
        $busroute->save();
        return 'Added Successfully!';
    }

    /**
     * Display the specified Bus Route.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update the specified resource in Bus Route.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $busroute = BusRoute::find($id);
        $busroute->update($request->all());
        return $busroute;
    }

    /**
     * Remove the specified resource from Bus Route.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BusRoute::destroy($id);
        return 'Deleted';
    }
}
