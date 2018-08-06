<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
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
            $table->longText('about')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
