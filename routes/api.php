<?php

use App\Http\Resources\UnitRoomResource;
use App\Models\UnitRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/unit-rooms', function() {
    $unitRooms = UnitRoom::orderBy('unit_room_number')->get();
    return UnitRoomResource::collection($unitRooms);
});