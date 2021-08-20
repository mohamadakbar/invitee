<?php

namespace App\Http\Controllers;

use App\Model\MenuTemplate;
use Illuminate\Http\Request;

class MenuTemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu   = MenuTemplate::all();
        return view('menu.index', ['menu' => $menu]);
    }

}
