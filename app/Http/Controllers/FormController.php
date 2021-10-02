<?php

namespace App\Http\Controllers;

use App\Model\Form;
use App\Model\Gallery;
use App\Model\Undangan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $form = Form::where('id_user', Auth::user()->id)->first();
        $tmp = Undangan::where('id',$form->template_id)->first();
//        dd($tmp);
        $temp = Undangan::all();
        return view('form.index', ['tmp' => $tmp, 'form' => $form, 'temp' => $temp]);
    }

    public function view_detail($id){
        $form = Form::where('id_user', $id)->first();
        $tmp = Undangan::where('id',$form->template_id)->first();
//        dd($form);
        $temp = Undangan::all();
        return view('form.index', ['tmp' => $tmp, 'form' => $form, 'temp' => $temp]);
    }

    public function create()
    {
        $tmp = Undangan::all();
        return view('form.create', ['tmp' => $tmp]);
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'nama_panggilan_p'  => 'required',
            'nama_panggilan_w'  => 'required',
            'nama_lengkap_p'    => 'required',
            'nama_lengkap_w'    => 'required',
//            'foto_pria'         => 'required',
//            'foto_wanita'       => 'required',
//            'foto_sampul'       => 'required',
            'template_id'       => 'required',
            'tentang_p'         => 'required',
            'tentang_w'         => 'required',
            'tgl_akad'          => 'required',
            'tgl_res'           => 'required',
            'mulai_akad'        => 'required',
            'mulai_res'         => 'required',
            'selesai_akad'      => 'required',
            'selesai_res'       => 'required',
            'tempat_akad'       => 'required',
            'tempat_res'        => 'required',
            'alamat_akad'       => 'required',
            'alamat_res'        => 'required',
            'nama_ortu_p_p'     => 'required',
            'nama_ortu_p_w'     => 'required',
            'nama_ortu_w_p'     => 'required',
            'nama_ortu_w_w'     => 'required',
            'link_loc'          => 'required',
            'status_und'        => 'required',
        ]);

        $foto_sampul    = $request->file('foto_sampul');
        $foto_gallery   = $request->file('foto_gallery');
        $foto_p         = $request->file('foto_p');
        $foto_w         = $request->file('foto_w');
        $explode_p      = explode(' ', $request->nama_panggilan_p);
        $explode_w      = explode(' ', $request->nama_panggilan_w);
        $slug           = $explode_p[0].'-'.$explode_w[0];
        $tujuan_upload  = 'upload_img';
        $tujuan_gallery = 'gallery_img';

        $form           = Form::where('id_user', $request->id_user)->first();

        if ( $request->hasfile('foto_sampul') ) {
            $foto_sampul->move($tujuan_upload, $foto_sampul->getClientOriginalName());
            $nama_file          = $foto_sampul->getClientOriginalName();
            $form->foto_sampul  = $nama_file;
//            unlink('upload_img/'. $form->foto_sampul);
        }

        if ( $foto_gallery ){
            $files = [];
            foreach ($request->file('foto_gallery') as $foto_gallery){
                if ($foto_gallery->isValid()){
                    $foto_gallery->move($tujuan_gallery,$foto_gallery->getClientOriginalName());
                    $nama_foto_gallery = $foto_gallery->getClientOriginalName();
                    $files[]=[
                        'form_id'   => $form->id,
                        'foto_gallery' => $nama_foto_gallery,
                    ];
                }
            }
            Gallery::insert($files);
        }

        if ( $request->hasfile('foto_p') ){
            if ($foto_p->isValid()){
                $foto_p->move($tujuan_upload,$foto_p->getClientOriginalName());
                $nama_foto_pria = $foto_p->getClientOriginalName();
                $form->foto_p   = $nama_foto_pria;
//                unlink('upload_img/'. $form->foto_p);
            }
        }

        if ( $request->hasfile('foto_w') ){
            if ($foto_w->isValid()){
                $foto_w->move($tujuan_upload,$foto_w->getClientOriginalName());
                $nama_foto_wanita   = $foto_w->getClientOriginalName();
                $form->foto_w       = $nama_foto_wanita;
//                unlink('upload_img/'. $form->foto_w);
            }
        }

        $form->id_user           = $request->id_user;
        $form->slug              = strtolower($slug);
        $form->template_id       = $request->template_id;
        $form->nama_panggilan_p  = $request->nama_panggilan_p;
        $form->nama_panggilan_w  = $request->nama_panggilan_w;
        $form->nama_lengkap_p    = $request->nama_lengkap_p;
        $form->nama_lengkap_w    = $request->nama_lengkap_w;
        $form->tentang_p         = $request->tentang_p;
        $form->tentang_w         = $request->tentang_w;
        $form->tgl_akad          = $request->tgl_akad;
        $form->tgl_res           = $request->tgl_res;
        $form->mulai_akad        = $request->mulai_akad;
        $form->mulai_res         = $request->mulai_res;
        $form->selesai_akad      = $request->selesai_akad;
        $form->selesai_res       = $request->selesai_res;
        $form->tempat_akad       = $request->tempat_akad;
        $form->tempat_res        = $request->tempat_res;
        $form->alamat_akad       = $request->alamat_akad;
        $form->alamat_res        = $request->alamat_res;
        $form->is_create         = 1;
        $form->status_und        = $request->status_und;
        $form->nama_ortu_p_p     = $request->nama_ortu_p_p;
        $form->nama_ortu_p_w     = $request->nama_ortu_p_w;
        $form->nama_ortu_w_p     = $request->nama_ortu_w_p;
        $form->nama_ortu_w_w     = $request->nama_ortu_w_w;
        $form->link_loc          = $request->link_loc;

        $user = User::where('id', $request->id_user)->first();
        $user->is_new   = 1;
        $user->save();

        $save = $form->save();
        if ($save){
            return redirect('form');
        }else{
            return redirect('das');
        }
    }

    public function show(Form $form)
    {
        //
    }

    public function edit($slug)
    {
        $form = Form::where('slug', $slug)->first();
        $temp = Undangan::all();
        if (!$form){
            return redirect('dashboard')->with(['error' => 'Not permitted']);
        }elseif($form->is_create == 0){
            return redirect('create')->with(['error' => 'Kamu belum bikin undangan, bikin dulu yok']);
        }else{
            return view('form.edit', ['tmp' => $temp, 'form' => $form]);
        }
//            return view('form.edit', ['tmp' => $temp, 'form' => $form]);

    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'nama_panggilan_p'  => 'required',
            'nama_panggilan_w'  => 'required',
            'nama_lengkap_p'    => 'required',
            'nama_lengkap_w'    => 'required',
//            'foto_pria'         => 'required',
//            'foto_wanita'       => 'required',
            'template_id'       => 'required',
//            'foto_sampul'       => 'required',
            'tentang_p'         => 'required',
            'tentang_w'         => 'required',
            'tgl_akad'          => 'required',
            'tgl_res'           => 'required',
            'mulai_akad'        => 'required',
            'mulai_res'         => 'required',
            'selesai_akad'      => 'required',
            'selesai_res'       => 'required',
            'tempat_akad'       => 'required',
            'tempat_res'        => 'required',
            'alamat_akad'       => 'required',
            'alamat_res'        => 'required',
            'nama_ortu_p_p'     => 'required',
            'nama_ortu_p_w'     => 'required',
            'nama_ortu_w_p'     => 'required',
            'nama_ortu_w_w'     => 'required',
            'link_loc'      => 'required',
            'status_und'        => 'required',
        ]);

        $foto_sampul    = $request->file('foto_sampul');
        $foto_gallery   = $request->file('foto_gallery');
        $foto_p         = $request->file('foto_p');
        $foto_w         = $request->file('foto_w');
        $tujuan_upload  = 'upload_img';
        $tujuan_gallery = 'gallery_img';

        $form           = Form::where('slug', $slug)->first();

        if ( $request->hasfile('foto_sampul') ) {
            $foto_sampul->move($tujuan_upload, $foto_sampul->getClientOriginalName());
            $nama_file          = $foto_sampul->getClientOriginalName();
            $form->foto_sampul  = $nama_file;
//            unlink('upload_img/'. $form->foto_sampul);
        }

        if ( $foto_gallery ){
            $files = [];
            foreach ($request->file('foto_gallery') as $foto_gallery){
                if ($foto_gallery->isValid()){
                    $foto_gallery->move($tujuan_gallery,$foto_gallery->getClientOriginalName());
                    $nama_foto_gallery = $foto_gallery->getClientOriginalName();
                    $files[]=[
                        'form_id'   => $form->id,
                        'foto_gallery' => $nama_foto_gallery,
                    ];
                }
            }
            Gallery::insert($files);
        }

        if ( $request->hasfile('foto_p') ){
            if ($foto_p->isValid()){
                $foto_p->move($tujuan_upload,$foto_p->getClientOriginalName());
                $nama_foto_pria = $foto_p->getClientOriginalName();
                $form->foto_p   = $nama_foto_pria;
//                unlink('upload_img/'. $form->foto_p);
            }
        }

        if ( $request->hasfile('foto_w') ){
            if ($foto_w->isValid()){
                $foto_w->move($tujuan_upload,$foto_w->getClientOriginalName());
                $nama_foto_wanita   = $foto_w->getClientOriginalName();
                $form->foto_w       = $nama_foto_wanita;
//                unlink('upload_img/'. $form->foto_w);
            }
        }

        $form->id_user           = $request->id_user;
        $form->template_id       = $request->template_id;
        $form->nama_panggilan_p  = $request->nama_panggilan_p;
        $form->nama_panggilan_w  = $request->nama_panggilan_w;
        $form->nama_lengkap_p    = $request->nama_lengkap_p;
        $form->nama_lengkap_w    = $request->nama_lengkap_w;
        $form->tentang_p         = $request->tentang_p;
        $form->tentang_w         = $request->tentang_w;
        $form->tgl_akad          = $request->tgl_akad;
        $form->tgl_res           = $request->tgl_res;
        $form->mulai_akad        = $request->mulai_akad;
        $form->mulai_res         = $request->mulai_res;
        $form->selesai_akad      = $request->selesai_akad;
        $form->selesai_res       = $request->selesai_res;
        $form->tempat_akad       = $request->tempat_akad;
        $form->tempat_res        = $request->tempat_res;
        $form->alamat_akad       = $request->alamat_akad;
        $form->alamat_res        = $request->alamat_res;
        $form->is_create         = 1;
        $form->nama_ortu_p_p     = $request->nama_ortu_p_p;
        $form->nama_ortu_p_w     = $request->nama_ortu_p_w;
        $form->nama_ortu_w_p     = $request->nama_ortu_w_p;
        $form->nama_ortu_w_w     = $request->nama_ortu_w_w;
        $form->link_loc          = $request->link_loc;
        $form->status_und        = $request->status_und;

        $user = User::where('id', $request->id_user)->first();
        $user->is_new   = 1;
        $user->save();

        $save = $form->save();
        if ($save){
            if (Auth::user()->roles != 1){
                return redirect('form')->with(['success' => 'Data kamu sudah berhasil di ubah yaa ..']);
            }else{
                return redirect('users')->with(['success' => 'Data user berhasil di ubah yaa ..']);
            }
        }else{
            return redirect('form')->with(['error' => 'ada error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    public function storeUcapan(Request $request)
    {

        return "ok";
    }
}
