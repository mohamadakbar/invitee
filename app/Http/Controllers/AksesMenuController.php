<?php

namespace App\Http\Controllers;

use App\Model\AksesMenu;
use Illuminate\Http\Request;

class AksesMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Model\AksesMenu  $aksesMenu
     * @return \Illuminate\Http\Response
     */
    public function show(AksesMenu $aksesMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\AksesMenu  $aksesMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(AksesMenu $aksesMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\AksesMenu  $aksesMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AksesMenu $aksesMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\AksesMenu  $aksesMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(AksesMenu $aksesMenu)
    {
        //
    }
}
