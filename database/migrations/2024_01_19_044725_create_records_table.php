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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50);
            $table->integer('year');
            $table->integer('month');
            $table->integer('date');
            $table->integer('food_count');
            $table->string('food_name',50);
            $table->string('food_id',50);
            $table->integer('food_weight');
            $table->integer('default_food_weight');
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
        Schema::dropIfExists('records');
    }
};
