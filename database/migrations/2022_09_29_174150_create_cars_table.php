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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('code')->nullable();
            $table->integer('personne')->nullable();
            $table->integer('bags')->nullable();
            $table->integer('price_min')->nullable();
            $table->integer('price_day')->nullable();
            $table->integer('price_half')->nullable();
            $table->integer('price_km')->nullable();
            $table->integer('price_airport')->nullable();
            $table->integer('hour_rate')->nullable();
            $table->integer('available')->default(0);

            $table->unsignedInteger('category_id')->default(0);
            $table->unsignedInteger('driver_id')->default(0);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
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
        Schema::dropIfExists('cars');
    }
};
