<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('sokal1')->nullable();
            $table->boolean('dupur1')->default(0);
            $table->boolean('rattri1')->default(0);
            $table->string('sokal2')->nullable();
            $table->boolean('dupur2')->default(0);
            $table->boolean('rattri2')->default(0);
            $table->string('sokal3')->nullable();
            $table->boolean('dupur3')->default(0);
            $table->boolean('rattri3')->default(0);
            $table->string('sokal4')->nullable();
            $table->boolean('dupur4')->default(0);
            $table->boolean('rattri4')->default(0);
            $table->string('sokal5')->nullable();
            $table->boolean('dupur5')->default(0);
            $table->boolean('rattri5')->default(0);
            $table->string('sokal6')->nullable();
            $table->boolean('dupur6')->default(0);
            $table->boolean('rattri6')->default(0);
            $table->string('sokal7')->nullable();
            $table->boolean('dupur7')->default(0);
            $table->boolean('rattri7')->default(0);
            $table->string('sokal8')->nullable();
            $table->boolean('dupur8')->default(0);
            $table->boolean('rattri8')->default(0);
            $table->string('sokal9')->nullable();
            $table->boolean('dupur9')->default(0);
            $table->boolean('rattri9')->default(0);
            $table->string('sokal10')->nullable();
            $table->boolean('dupur10')->default(0);
            $table->boolean('rattri10')->default(0);
            $table->string('sokal11')->nullable();
            $table->boolean('dupur11')->default(0);
            $table->boolean('rattri11')->default(0);
            $table->string('sokal12')->nullable();
            $table->boolean('dupur12')->default(0);
            $table->boolean('rattri12')->default(0);
            $table->string('sokal13')->nullable();
            $table->boolean('dupur13')->default(0);
            $table->boolean('rattri13')->default(0);
            $table->string('sokal14')->nullable();
            $table->boolean('dupur14')->default(0);
            $table->boolean('rattri14')->default(0);
            $table->string('sokal15')->nullable();
            $table->boolean('dupur15')->default(0);
            $table->boolean('rattri15')->default(0);
            $table->string('sokal16')->nullable();
            $table->boolean('dupur16')->default(0);
            $table->boolean('rattri16')->default(0);
            $table->string('sokal17')->nullable();
            $table->boolean('dupur17')->default(0);
            $table->boolean('rattri17')->default(0);
            $table->string('sokal18')->nullable();
            $table->boolean('dupur18')->default(0);
            $table->boolean('rattri18')->default(0);
            $table->string('sokal19')->nullable();
            $table->boolean('dupur19')->default(0);
            $table->boolean('rattri19')->default(0);
            $table->string('sokal20')->nullable();
            $table->boolean('dupur20')->default(0);
            $table->boolean('rattri20')->default(0);
            $table->string('sokal21')->nullable();
            $table->boolean('dupur21')->default(0);
            $table->boolean('rattri21')->default(0);
            $table->string('sokal22')->nullable();
            $table->boolean('dupur22')->default(0);
            $table->boolean('rattri22')->default(0);
            $table->string('sokal23')->nullable();
            $table->boolean('dupur23')->default(0);
            $table->boolean('rattri23')->default(0);
            $table->string('sokal24')->nullable();
            $table->boolean('dupur24')->default(0);
            $table->boolean('rattri24')->default(0);
            $table->string('sokal25')->nullable();
            $table->boolean('dupur25')->default(0);
            $table->boolean('rattri25')->default(0);
            $table->string('sokal26')->nullable();
            $table->boolean('dupur26')->default(0);
            $table->boolean('rattri26')->default(0);
            $table->string('sokal27')->nullable();
            $table->boolean('dupur27')->default(0);
            $table->boolean('rattri27')->default(0);
            $table->string('sokal28')->nullable();
            $table->boolean('dupur28')->default(0);
            $table->boolean('rattri28')->default(0);
            $table->string('sokal29')->nullable();
            $table->boolean('dupur29')->default(0);
            $table->boolean('rattri29')->default(0);
            $table->string('sokal30')->nullable();
            $table->boolean('dupur30')->default(0);
            $table->boolean('rattri30')->default(0);
            $table->string('sokal31')->nullable();
            $table->boolean('dupur31')->default(0);
            $table->boolean('rattri31')->default(0);
            $table->string('total')->nullable();
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
        Schema::dropIfExists('miles');
    }
}
