<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trip_places', function (Blueprint $table) {
            //
            $table->integer('trips_id')->unsigned();
             $table->foreign('trips_id')->references('id')->on('trips');
             $table->integer('places_id')->unsigned();
             $table->foreign('places_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trip_places', function (Blueprint $table) {
            //
        });
    }
}
