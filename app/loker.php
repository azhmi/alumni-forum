<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    //
    protected $table = 'lokers';
    protected $primaryKey = 'lokid';
    protected $fillable = ['lokjud','lokis','lokgam','lokauth'];
}
