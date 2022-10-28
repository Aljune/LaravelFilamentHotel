<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::group(['namespace' => 'App\Http\Controllers'], function()
{  
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/search-unit-room-type', 'HomeController@searchUnitTypeRoom')->name('search-unit-room-type');
    Route::get('/unit-type-rooms/{slug}', 'HomeController@unittyperoom')->name('unit-type-room');
    
    
});