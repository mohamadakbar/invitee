<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['nama_paket'];

    public function user()
    {
        return $this->hasMany('App\Model\User');
    }

    public function aksesmenu()
    {
        return $this->hasMany('App\Model\AksesMenu');
    }
}
