<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_details', function (Blueprint $table) {
            $table->increments('id')->comment('Increments');
            $table->string('title')->comment('Tour Title');
            $table->string('image')->comment('Tour Image');
            $table->decimal('charges', 10, 2)->comment('Tour Charges');
            $table->unsignedInteger('category_id')->comment('Category ID');
            $table->foreign('category_id')->references('id')->on('tour_categories')->onDelete('cascade');
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
        Schema::dropIfExists('tour_details');
    }
}
