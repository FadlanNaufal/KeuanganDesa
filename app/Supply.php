<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $fillable = ['rt_id','total'];

    public function Supply(){
    	return $this->hasOne('App\RtRw','id','rt_id');
    }
}
