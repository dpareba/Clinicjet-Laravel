<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Clinicdetail extends Model
{
    protected $fillable = ['ClinicName','clinictype_id','country_id','state_id','city_id'];

    public function country()
    {
    	return $this->belongsTo('App\AdminModel\Country');
    }
    public function state()
    {
    	return $this->belongsTo('App\AdminModel\State');
    }
    public function city()
    {
    	return $this->belongsTo('App\AdminModel\City');
    }
    public function clinictype()
    {
    	return $this->belongsTo('App\AdminModel\Clinictype');
    }



}
