<?php

namespace App\Http\Controllers;

use App\Model\AksesMenu;
use App\Model\Gallery;
use App\Model\MenuTemplate;
use App\Model\Paket;
use App\Model\Undangan;
use App\Model\Form;
use App\Model\Ucapan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data)
    {
        $expl = explode('&', $data);
        $pria = $expl[0];
        $wanita = $expl[1];

        $form   = Form::select('*')
                ->where('nama_panggilan_p', $pria)
                ->where('nama_panggilan_w', $wanita)
                ->first();

        $temp   = Undangan::find($form->template_id);
        $gallery= Gallery::where('form_id', $form->id)->get();
        $ucapan = Ucapan::all();
        $menu   = DB::table('users')->select('users.name', 'p.nama_paket', 'm.nama_menu', 'm.slug', 'm.icon')
                    ->join('paket as p', 'users.id_paket', '=', 'p.id')
                    ->join('akses_menus as a', 'a.paket_id', '=', 'p.id')
                    ->join('menu_template as m', 'm.id', '=', 'a.menu_id')
                    ->where('users.id', '=' , $form->id_user)->orderBy('m.id')->get();

//        dd($menu);
        if ($form->is_create == 0 ){
            return redirect('form')->with(['error' => 'Kamu belum buat undangan, buat dulu yuk ..']);
        }else{
            return view($temp->slug, ['form' => $form, 'temp' => $temp, 'ucapan' => $ucapan, 'gallery' => $gallery, 'menu' => $menu]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function show(Template $undangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $undangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $undangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $undangan)
    {
        //
    }
}
