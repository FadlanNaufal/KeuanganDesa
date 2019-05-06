<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = ['kk_id','nama','status','pekerjaan','alamat','nik','agama'];

    public function KK(){
    	return $this->hasOne('App\KepalaKeluarga','id','kk_id');
    }
}
