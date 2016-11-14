<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandnames', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('BrandName');
            $table->integer('dosetype_id')->unsigned();
            $table->foreign('dosetype_id')->references('id')->on('dosetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandnames');
    }
}
