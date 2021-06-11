<?php

namespace App\Http\Controllers;
use App\Models\BusRoute\BusRoute;
use App\Models\Route\Route;
use Illuminate\Http\Request;

class RouteManagementController extends Controller
{
    // Show all routes
    public function index()
    {
        return Route::all();
    }

    // Add new route
    public function store(Request $request){
        $route = new Route ($request->all());
        $route->save();
        return 'Successfully Added!';

    }

    // Update route
    public function update(Request $request, $id)
    {
        $route = Route::find($id);
        $route->update($request->all());
        return $route;
    }

    // View route specific list
    public function show($id)
    {
        return Route::find($id);
    }

    // Delete route
    public function destroy($id)
    {
        Route::destroy($id);
        return 'Deleted';
    }

}
