<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Brandname extends Model
{
   protected $fillable = ['BrandName','dosetype_id'];

   public function dosetype()
   {
   		return $this->belongsTo('App\AdminModel\Dosetype');
   }
}
