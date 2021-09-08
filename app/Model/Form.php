<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Form extends Authenticatable
{
    protected $table = 'form';
    protected $fillable = [
        'id',
        'id_user',
        'template_id',
        'nama_panggilan_p',
        'nama_panggilan_w',
        'nama_lengkap_p',
        'nama_lengkap_w',
        'tentang_p',
        'tentang_w',
        'tgl_akad',
        'tgl_res',
        'mulai_akad',
        'mulai_res',
        'selesai_akad',
        'selesai_res',
        'tempat_akad',
        'tempat_res',
        'alamat_akad',
        'alamat_res',
        'is_create',
        'is_active',
        'status_und',
        'nama_ortu_p_p',
        'nama_ortu_p_w',
        'nama_ortu_w_p',
        'nama_ortu_w_w',
        'link_loc',
    ];
//    public $timestamps = false;

    public function template(){
        return $this->belongsTo('App\Model\Undangan');
    }

    public function gallery(){
        return $this->hasMany('App\Model\Gallery');
    }
}
