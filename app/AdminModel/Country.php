<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['CountryName'];
    
    public function states()
    {
    	$this->hasMany('App\AdminModel\State');
    }
     public function city()
    {
    	$this->hasMany('App\AdminModel\City');
    }   
     public function clinicdetail()
    {
    	$this->hasMany('App\AdminModel\clinicdetail');
    }   

}
