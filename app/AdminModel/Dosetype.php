<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Dosetype extends Model
{
    protected $fillable = ['DoseType'];

    public function dosagegroup()
    {

    	return $this->belongsTo('App\AdminModel\Dosagegroup');
    }

    public function brandname()
    {
    	return $this->hasMany('App\AdminModel\Brandname');
    }
}
