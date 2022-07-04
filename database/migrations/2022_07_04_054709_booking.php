<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id')->comment('Increments');
            $table->unsignedInteger('user_id')->nullable()->comment('unsignedInteger.');
            $table->boolean('is_paid')->nullable()->comment('is_paid');

            $table->unsignedInteger('tour_id')->comment('tour_id');
            $table->unsignedInteger('hotel_category_id')->comment('hotel_category_id');

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
        Schema::dropIfExists('booking');
    }
}
