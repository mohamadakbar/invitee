<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'template';
    protected $fillable = ['nama_template', 'slug'];

    public function user()
    {
        return $this->hasMany('App\Model\Template', 'template_id');
    }
}
