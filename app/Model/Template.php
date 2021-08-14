<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'template';
    protected $fillable = ['id', 'name_template', 'slug'];
    public $timestamps = false;

    public function form(){
        return $this->hasMany('App\Model\Form');
    }
}
