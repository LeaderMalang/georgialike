<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->increments('id')->comment('Increments');
            $table->string('name')->nullable()->comment('name.');
            $table->longText('description')->nullable()->comment('Dy Descp');
            $table->string('images')->comment('Day Image');
            $table->unsignedInteger('hotal_category_id')->comment('hotal_category_id');
          
            $table->timestamps();
            // $table->foreign('hotal_category_id')->references('id')->on('hotal_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel');
    }
}
