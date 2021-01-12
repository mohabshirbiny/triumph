<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->date("date_from");
            $table->date("date_to");
            $table->time("time_from");
            $table->time("time_to");
            $table->text("contact_details")->nullable();
            $table->text("social_links")->nullable();
            $table->text("location_url");            
            $table->string("cover");
            $table->text("gallery")->nullable();
            $table->text("about");
            $table->unsignedBigInteger("hotel_id");
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
        Schema::dropIfExists('events');
    }
}
