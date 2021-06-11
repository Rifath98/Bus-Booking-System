<?php

use App\Http\Controllers\BusManagementController;
use App\Http\Controllers\BusScheduleManagementController;
use App\Http\Controllers\BusSeatManagementController;
use App\Http\Controllers\RouteManagementController;
use App\Http\Controllers\RouteMapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use \App\Http\Controllers\AuthController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::resource('bus',BusManagementController::class);
Route::resource('route',RouteManagementController::class);
Route::resource('busseate',BusSeatManagementController::class);
Route::resource('busschedule',BusScheduleManagementController::class);
Route::resource('busroute',RouteMapController::class);



// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

});
