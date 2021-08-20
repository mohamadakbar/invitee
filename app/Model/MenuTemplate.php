<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuTemplate extends Model
{
    protected $table = "menu_template";
    protected $fillable = ["paket_id", "slug", "nama_menu", "nama_template"];

    public function paket()
    {
        return $this->belongsTo('App\User', 'paket_id');
    }
}
