<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Clinictype extends Model
{
    protected  $fillable = ['ClinicType'];

    public function clinicdetail()
    {
    	return $this->hasMany('App\AdminModel\Clinicdetail');
    }
}
