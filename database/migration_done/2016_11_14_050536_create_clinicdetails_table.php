<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ClinicName');
            $table->string('ClinicAdd1');
            $table->string('ClinicAdd2');
            $table->string('ClinicAdd3');
            $table->string('Pincode');
            $table->string('ClinicMobile');
            $table->string('ClinicLandline1');
            $table->string('ClinicLandline2');
            $table->string('ClinicLandline3');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('clinictype_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('clinictype_id')->references('id')->on('clinictypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinicdetails');
    }
}
