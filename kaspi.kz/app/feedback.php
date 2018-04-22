<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $table = 'feedback';
    public $primaryKey='id_feed';
    public $timestamp=false;
       public function feedback(){
    	return $this->belongsTo('App\feedback','id_prod');
    }
     public function products(){
    	return $this->hasMany('App\feedback','id_feed');
    }

}
