<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UnitType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $unitTypeRooms = UnitType::orderBy('id', 'asc')->get();
        $postsItem = Post::orderBy('id', 'desc')->get();
        return view('home', compact('postsItem', 'unitTypeRooms'));
    }
    public function unittyperoom($slug) 
    {
        $unitTypeRooms = UnitType::orderBy('id', 'asc')->get();
        $unitTypeRoom = UnitType::where('slug', $slug)->first();
        return view('unit-type-room', compact('unitTypeRoom' , 'unitTypeRooms'));
    }
    public function searchUnitTypeRoom(Request $request) {
        $this->validate($request, [
            'date_check_in' => 'required',
            'date_check_out' => 'required',
            'num_adult' => 'required',
            'num_child'=>''
         ]);
        $unitTypeRooms = UnitType::orderBy('id', 'asc')->where('is_active', 1)->get();
        $dataSearchUnitTypeRoom = ($request->all());
        return view('list-unit-type-room', compact('unitTypeRooms' , 'dataSearchUnitTypeRoom'));

        
    }
    // public function unittyperoom(UnitType $slug)
    // {
    //     return view('unit-type-room');
    // }
}
