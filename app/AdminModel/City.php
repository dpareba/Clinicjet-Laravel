<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['CityName','state_id','country_id'];

    public function state()
    {
    	return $this->belongsTo('App\AdminModel\State');
    }
    public function country()
    {
    	return $this->belongsTo('App\AdminModel\Country');
    }   
     public function clinicdetail()
    {
    	$this->hasMany('App\AdminModel\clinicdetail');
    }        
}
