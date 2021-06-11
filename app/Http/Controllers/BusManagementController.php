<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus\Bus;

class BusManagementController extends Controller
{
    // Show all Buses
    public function index()
    {
        return Bus::all();
    }

    // Add new bus
    public function store(Request $request){
        $bus = new Bus($request->all());
        $bus->save();
        return 'Successfully Added!!';

    }

    // Update bus
    public function update(Request $request, $id)
    {
        $bus = Bus::find($id);
        $bus->update($request->all());
        return $bus;
    }

    // View specific bus list
    public function show($id)
    {
        return Bus::find($id);
    }

    // Delete bus
    public function destroy($id)
    {
        Bus::destroy($id);
        return 'Deleted';
    }
}
