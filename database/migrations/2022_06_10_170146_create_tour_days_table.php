<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_days', function (Blueprint $table) {
            $table->increments('id')->comment('Increments');
            $table->integer('day_no')->nullable()->comment('Day No.');
            $table->longText('description')->nullable()->comment('Day Descp');
            $table->string('image')->comment('Day Image');
            $table->unsignedInteger('tour_id')->comment('Tour ID');
            $table->foreign('tour_id')->references('id')->on('tour_details')->onDelete('cascade');
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
        Schema::dropIfExists('tour_days');
    }
}
