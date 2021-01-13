<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('logo');
            $table->string('cover');
            $table->string('slug')->unique();
            $table->text('contact_details')->nullable();
            $table->text('social_media')->nullable();
            $table->text('about')->nullable();
            $table->text('booking_url')->nullable();
            $table->integer('active')->default(0)->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
