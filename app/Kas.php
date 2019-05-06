<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $fillable = ['total','rt_rw_id'];

    public function AsalKas(){
    	return $this->hasOne('App\RtRw','id','rt_rw_id');
    }
}
