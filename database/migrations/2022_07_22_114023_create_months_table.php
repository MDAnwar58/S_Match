<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('mile')->nullable();
            $table->string('milecherge')->nullable();
            $table->string('milekhoroce')->nullable();
            $table->string('bibidhkhroce')->nullable();
            $table->string('mot')->nullable();
            $table->string('joma')->nullable();
            $table->string('messdaba')->nullable();
            $table->string('messpaba')->nullable();
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
        Schema::dropIfExists('months');
    }
}
