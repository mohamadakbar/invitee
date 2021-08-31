<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AksesMenu extends Model
{
    protected $fillable = ['paket_id', 'menu_id'];


    public function paket(){
        return $this->belongsTo('App\Model\Paket');
    }

    public function menu(){
        return $this->belongsTo('App\Model\MenuTemplate');
    }
}
