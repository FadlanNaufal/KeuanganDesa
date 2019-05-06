<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeperluanDesa extends Model
{
    protected $fillable = ['nama','tujuan','total'];


    public function ganti(){
    	return $this->hasOne('App\Kas','id','id');
    }
    
}
