<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Dosagegroup extends Model
{
    protected $fillable = ['DosageGroup'];
    
    public function dosetype()
    {
    	 return $this->hasMany('App\AdminModel\Dosetype');
    }
}
