<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latests', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->string('header')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->string('role')->default(0);
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
        Schema::dropIfExists('latests');
    }
}
