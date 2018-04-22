<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    public $table='picture';
    public $primaryKey='id_pic';
    public $timestamps = false;
}
