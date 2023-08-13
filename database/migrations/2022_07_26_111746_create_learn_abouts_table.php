<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learn_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('title');
            $table->text('content');
            $table->string('quality1')->nullable();
            $table->string('quality2')->nullable();
            $table->string('quality3')->nullable();
            $table->string('quality4')->nullable();
            $table->string('quality5')->nullable();
            $table->string('quality6')->nullable();
            $table->string('quality7')->nullable();
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
        Schema::dropIfExists('learn_abouts');
    }
}
