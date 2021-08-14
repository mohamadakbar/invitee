<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use App\Model\Template;
use App\Model\Form;
use App\Model\Ucapan;
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
//        dd($form->id);
        $ucapan = Ucapan::all();
        $gallery = Gallery::where('form_id', $form->id)->get();
        if ($form->is_create == 0 ){
            return redirect('form')->with(['error' => 'Kamu belum buat undangan, buat dulu yuk ..']);
        }else{

        }
        $temp = Template::find($form->template_id);
        return view($temp->slug, ['form' => $form, 'temp' => $temp, 'ucapan' => $ucapan, 'gallery' => $gallery]);
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
