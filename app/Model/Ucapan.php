<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    protected $table = 'ucapan';
    protected $fillable = ['id', 'nama', 'ucapan'];
//    public $timestamps = false;
}
