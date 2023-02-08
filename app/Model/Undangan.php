<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $table = 'undangan';
    protected $fillable = ['id', 'name_template', 'slug'];
    public $timestamps = false;

    public function form(){
        return $this->hasMany('App\Model\Form');
    }

    public function user()
    {
        return $this->hasMany('App\Model\User');
    }
}
