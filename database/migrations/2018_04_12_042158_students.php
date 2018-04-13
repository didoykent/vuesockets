<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function(Blueprint $table){


          $table->increments('id');
          $table->string('en_name')->nullable();
          $table->string('kr_name')->nullable();
          $table->string('email')->unique()->nullable();
          $table->string('password');
          $table->rememberToken();
          $table->timestamps();

          $table->integer('tutor_id')->unsigned();
          $table->foreign('tutor_id')->references('id')->on('tutors')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::dropIfExists('students');

    }
}
