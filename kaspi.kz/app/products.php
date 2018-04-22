<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $table='product';
    public $primaryKey='id_prod';
    public $timestamps = false;
    public function picture(){
    	return $this->hasOne('App\picture','id_prod');
    }
     public function products(){
    	return $this->belongsTo('App\products','id_prod');
    }
      public function feedbacks(){
    	return $this->hasMany('App\feedback','id_prod');
    }
}
