<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['id','form_id','foto_gallery'];

    public function form(){
        return $this->belongsTo('App\Model\Form');
    }
}
