<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('approved')->default('0');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('region');
            $table->string('diaspora')->nullable();
            $table->string('address');
            $table->string('avatar')->default('default.jpg');
            $table->string('phone')->unique();
            $table->string('employerName');
            $table->string('designation');
            $table->string('yearOfCompletion');
            $table->string('payment')->default('0');
            $table->string('mStatus');
            $table->longText('about');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->rememberToken();
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
