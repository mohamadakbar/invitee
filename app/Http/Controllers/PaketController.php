<?php

namespace App\Http\Controllers;

use App\Model\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $paket = Paket::all();
        return view('paket.index', ['paket' => $paket]);
    }
}
