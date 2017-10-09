<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name',255);
            $table->text('description');
            $table->integer('creater_id')->unsigned()->nullable();
            $table->foreign('creater_id')->references('id')->on('guidemembers');
            $table->string('location');
            $table->integer('catagories_id');
            $table->decimal('price',5,2);
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
        Schema::dropIfExists('trips');
    }
}