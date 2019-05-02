<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //
    protected $table = 'beritas';
    protected $primaryKey = 'berid';
    protected $fillable = ['berjud','beris','bergam','berauth'];
}
