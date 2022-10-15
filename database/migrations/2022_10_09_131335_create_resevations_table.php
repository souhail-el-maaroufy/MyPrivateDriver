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
        Schema::create('resevations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->text('adress')->nullable();
            $table->string('phone')->nullable();
            $table->text('details')->nullable();
            $table->integer('nb_place')->default(0);
            $table->unsignedInteger('reservation_d');
            $table->string('status')->nullable();

            $table->foreign('reservation_d')->on('reservation__details')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('resevations');
    }
};
