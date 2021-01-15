<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("hotel_id");
            $table->text("title");
            $table->text("about");
            $table->text("description");
            $table->text("facilities");
            $table->string("inquire_mail");
            $table->string("image");
            $table->string("seat_image");
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
        Schema::dropIfExists('meet_rooms');
    }
}
