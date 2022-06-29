<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('User ID');
            $table->string('name')->comment('User Name');
            $table->string('email')->unique()->comment('User Email');
            $table->bigInteger('phone')->nullable()->comment('User Phone');
            $table->timestamp('email_verified_at')->nullable()->comment('Email Verification');
            $table->string('password')->comment('User Password');
            $table->rememberToken()->comment('Remember Token');
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
        Schema::dropIfExists('users');
    }
}
