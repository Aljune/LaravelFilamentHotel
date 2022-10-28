<?php

namespace App\Http\Controllers;

use App\Models\UnitType;

class PagesController extends Controller
{
    public function index() 
    {
        $unitTypeRooms = UnitType::orderBy('id', 'asc')->get();
        return view('home', compact('unitTypeRooms'));
    }

    // public function about() 
    // {
    //     return view('about');
    // }
}
