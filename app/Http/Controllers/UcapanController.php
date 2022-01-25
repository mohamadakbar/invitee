<?php

namespace App\Http\Controllers;

use App\Model\Ucapan;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Validator;
use Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
class UcapanController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if(request()->ajax())
//        {
//            return datatables()->of(Ucapan::latest()->get())
//                ->make(true);
//        }
//        return view('undangan.satu');

//        $ucapan = Ucapan::all();
////        dd($ucapan);
//        return View('undangan.satu', ['ucapan' => $ucapan]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
//        $token  = $_POST['g-recaptcha-response']; // pake post php
        $nama   = $request->nama;
        $ucapan = $request->ucapan;
        $token  = $request->token; // pake post js
        $slug   = $request->slug;

        if ($token || $nama || $ucapan || $slug){
            $client     = new Client();
            $response   = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('NOCAPTCHA_SECRET'),
                    'response' => $token
                ]
            ]);

            $result = json_decode($response->getBody()->getContents());
            if ($result->success == true){
                Ucapan::create([
                    'slug'      => $slug,
                    'nama'      => $nama,
                    'ucapan'    => $ucapan,
                ]);

                return response()->json(
                    [
                        'success' => true,
                        'message' => 'Ucapan kamu sudah berhasil disimpan, terima kasih yaa ..'
                    ]
                );
            }else{
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'Mohon isi Captcha nya yaa ..'
                    ]
                );
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function show(Ucapan $ucapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucapan $ucapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ucapan $ucapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ucapan  $ucapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ucapan $ucapan)
    {
        //
    }
}
