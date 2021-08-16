<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with(['paket', 'role'])->get();
//        dd($users);
        return view('user.index', ['users' => $users]);
    }

    public function edit($slug)
    {
        $user   = User::with('paket', 'role')->where('slug', $slug)->first();
//        dd($user);
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|email|unique:users,slug,email',
            'paket'     => 'required',
            'status'    => 'required',
        ]);
//        dd($request->all());
//
        $user = User::where('slug', $slug)->first();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->id_paket = $request->paket;
        $user->is_new   = $request->status;
        $save = $user->save();

        if ($save){
//            dd('here');
            return redirect('users')->with('success', 'Datanya berhasil di ubah ya ..');
        }else{
            return Redirect::back()->with('error', 'Datanya gagal di ubah nih ..');
        }
    }
}
