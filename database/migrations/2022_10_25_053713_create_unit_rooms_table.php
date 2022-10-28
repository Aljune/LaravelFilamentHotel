<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('unit_room_number');
            $table->string('unit_room_name');
            $table->string('slug')->unique();
            $table->string('unit_room_type');
            $table->decimal('unit_room_price', 10, 2);
            $table->text('content');
            $table->boolean('is_active')->default(false);
            $table->text('unit_room_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_rooms');
    }
};
