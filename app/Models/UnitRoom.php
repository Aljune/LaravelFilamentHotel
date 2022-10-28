<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitRoom extends Model
{
    use HasFactory;
    protected $fillable = ['unit_room_number' , 'unit_room_name', 'slug', 'unit_room_type', 'unit_room_price', 'content', 'is_active', 'unit_room_image', 'category_unit_room_type_id'];
}
