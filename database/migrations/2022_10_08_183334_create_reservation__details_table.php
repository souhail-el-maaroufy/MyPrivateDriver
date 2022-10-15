<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation__details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('depart_latlng')->nullable();
            $table->string('destination_latlng')->nullable();
            $table->string('type')->nullable();
            $table->date('date_reservation')->nullable();
            $table->integer('is_airport')->default(0);
            $table->integer('hours')->default(0);
            $table->integer('minutes')->default(0);
            $table->integer('car_model')->default(0);
            $table->integer('estimated_cars')->default(0);
            $table->integer('estimated_days')->default(0);
            $table->integer('estimated_persons')->default(0);
            $table->string('depart')->nullable();
            $table->string('destination')->nullable();
            $table->string('data')->nullable();
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
        Schema::dropIfExists('reservation__details');
    }
};
