<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{


    public function country()
    {

    	return $this->belongsTo('App\AdminModel\Country');
    }
}
