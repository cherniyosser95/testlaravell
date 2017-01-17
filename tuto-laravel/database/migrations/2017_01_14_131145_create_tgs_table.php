<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('omar-tg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('omar_id')->unsigned()->index();
            $table->integer('tg_id')->unsigned()->index();
            $table->foreign('omar_id')->references('id')->on('omars')->onDelete('cascade');
            $table->foreign('tg_id')->references('id')->on('tgs')->onDelete('cascade');

        });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tgs');
    }
}
