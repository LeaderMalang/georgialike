<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HotalCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotal_category', function (Blueprint $table) {
            $table->increments('id')->comment('Increments');
            $table->string('name')->nullable()->comment('name');
            $table->longText('description')->nullable()->comment('Day Descp');
            $table->string('image')->comment('Day Image');
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
        Schema::dropIfExists('hotal_category');
    }
}
