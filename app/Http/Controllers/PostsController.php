<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UnitType;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() 
    {
        $unitTypeRooms = UnitType::orderBy('id', 'asc')->get();
        $postsItem = Post::orderBy('id', 'desc')->get();
        return view('home', compact('postsItem', 'unitTypeRooms'));
    }

}
