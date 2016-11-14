<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

	protected $fillable = ['StateName','country_id'];
    public function country()
    {
    	return $this->belongsTo('App\AdminModel\Country');
    }
    public function city()
    {
    	return $this->hasMany('App\AdminModel\City');
    }
      public function clinicdetail()
    {
    	$this->hasMany('App\AdminModel\clinicdetail');
    }      

}
