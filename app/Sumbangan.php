<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumbangan extends Model
{
    protected $fillable = ['nama_donatur','tujuan','total'];
}
