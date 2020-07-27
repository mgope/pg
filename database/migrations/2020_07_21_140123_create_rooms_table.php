<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('food')->nullable(); 
            $table->string('water')->nullable();
            $table->string('wifi')->nullable();
            $table->string('electricity')->nullable();
            $table->string('room_rent')->nullable();
            $table->string('distance')->nullable();
            $table->string('total_capacity')->nullable();
            $table->string('room_capacity')->nullable();
            $table->string('total_vacancy')->nullable();
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
