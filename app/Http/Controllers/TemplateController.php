<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Paket;
use App\Model\Template;
use App\Model\Form;
use App\Model\Ucapan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
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

        $form = Form::select('*')
                ->where('nama_panggilan_p', $pria)
                ->where('nama_panggilan_w', $wanita)
                ->first();
        $user = User::where('id', $form->id_user)->get();
        foreach ($user as $us){
            $menu = Paket::select("*")->with('menu')->where('id', $us->id_paket)->first();
        }

        $menu_temp = array();
        foreach ($menu->menu as $menus){
//            print_r();
            $menu_temp[] = $menus;
        }
//        print_r($menu_temp);
//        dd("op");
//        $expld_menu = explode(';', $menus->nama_menu);
        $ucapan = Ucapan::all();

        $gallery = Gallery::where('form_id', $form->id)->get();
        if ($form->is_create == 0 ){
            return redirect('form')->with(['error' => 'Kamu belum buat undangan, buat dulu yuk ..']);
        }
        $temp = Template::find($form->template_id);
        return view($temp->slug, ['form' => $form, 'temp' => $temp, 'ucapan' => $ucapan, 'gallery' => $gallery, 'menu' => $menu_temp]);
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
     * @param  \App\Model\Template  $undangan
     * @return \Illuminate\Http\Response
     */
    public function show(Template $undangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Template  $undangan
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
     * @param  \App\Model\Template  $undangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $undangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Template  $undangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $undangan)
    {
        //
    }
}
