<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->boolean('isBds')->default(false);
            $table->string('district', 100);
            $table->integer('openMeritSeats')->default(0);
            $table->integer('overSeasSeats')->default(0);
            $table->integer('disabilitySeats')->default(0);
            $table->integer('underdevelopedAreas')->default(0);
            $table->integer('cholistanSeats')->default(0);
            $table->tinyInteger('isReciprocal')->default(0);
            $table->tinyInteger('isFemale')->default(0);
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
        Schema::dropIfExists('colleges');
    }
}
