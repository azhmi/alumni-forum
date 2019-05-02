<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    //
    protected $table = 'forums';
    protected $primaryKey = 'forid';
    protected $fillable = ['forjud','foris','forgam','forauth'];
}
