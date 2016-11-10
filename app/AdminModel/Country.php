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
    
}
