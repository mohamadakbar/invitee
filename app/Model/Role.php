<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    protected $table = 'roles';

    public function user()
    {
        return $this->hasMany('App\Model\User');
    }
}
