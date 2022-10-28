<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    use HasFactory;
    protected $fillable = ['unit_room_type' , 'unit_room_type_price', 'slug' , 'unit_room_type_content', 'is_active', 'unit_room_type_image'];
    
    
}
