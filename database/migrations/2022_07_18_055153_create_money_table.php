<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->string('money')->nullable();
            $table->string('money1')->nullable();
            $table->date('date1')->nullable();
            $table->string('money2')->nullable();
            $table->date('date2')->nullable();
            $table->string('money3')->nullable();
            $table->date('date3')->nullable();
            $table->string('money4')->nullable();
            $table->date('date4')->nullable();
            $table->string('money5')->nullable();
            $table->date('date5')->nullable();
            $table->string('money6')->nullable();
            $table->date('date6')->nullable();
            $table->string('money7')->nullable();
            $table->date('date7')->nullable();
            $table->string('money8')->nullable();
            $table->date('date8')->nullable();
            $table->string('money9')->nullable();
            $table->date('date9')->nullable();
            $table->string('money10')->nullable();
            $table->date('date10')->nullable();
            $table->string('money11')->nullable();
            $table->date('date11')->nullable();
            $table->string('money12')->nullable();
            $table->date('date12')->nullable();
            $table->string('money13')->nullable();
            $table->date('date13')->nullable();
            $table->string('money14')->nullable();
            $table->date('date14')->nullable();
            $table->string('total_money')->nullable();
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
        Schema::dropIfExists('money');
    }
}
