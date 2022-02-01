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
            $table->bigincrements('id');
            $table->string('email')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone_number');
            $table->string('website');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('two_factor_reset')->nullable();
            $table->string('two_factor_recovery_codes')->nullable();
            $table->string('remember_token')->nullable();
            $table->string('current_team_id')->nullable();
            $table->string('profile_photo_path')->nullable();
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
