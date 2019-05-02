<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komen extends Model
{
    //
    protected $table = 'komens';
    protected $primaryKey = 'komid';
    protected $fillable = ['komis','komauth'];
}
