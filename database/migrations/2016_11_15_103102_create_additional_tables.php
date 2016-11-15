<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('desc');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('desc');
            $table->string('image');
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
        Schema::drop('sliders');
        Schema::drop('testimonials');

    }
}