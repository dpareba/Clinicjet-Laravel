<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosagetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosagetypes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('DosageType');
            $table->integer('dosagegroup_id')->unsigned();
            $table->foreign('dosagegroup_id')->references('id')->on('dosagegroups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosagetypes');
    }
}
