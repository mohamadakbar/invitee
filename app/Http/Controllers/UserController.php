<?php

namespace App\Http\Controllers;

use App\Model\Form;
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
        $users  = User::with(['paket', 'role', 'template'])->get();
//        dd($users);
        $form   = Form::all();
        return view('user.index', ['users' => $users, 'form' => $form]);
    }

    public function edit($slug)
    {
        $user   = User::with('paket', 'role')->where('slug', $slug)->first();
        $form   = Form::where('id_user', $user->id)->first();
//        dd($form->is_active);
        return view('user.edit', ['user' => $user, 'form' => $form->is_active]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|email|unique:users,slug,email',
            'paket'     => 'required',
            'status'    => 'required',
            'template_id' => 'required',
        ]);

        // update user table
        $user = User::where('slug', $slug)->first();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->id_paket = $request->paket;
        $user->is_new   = $request->status;
        $user->template_id = $request->template_id;

        // update form table
        $form = Form::where('id_user', $user->id)->first();
        $form->template_id = $request->template_id;
        $form->is_active = $request->expired;

        $form->save();
        $save = $user->save();

        if ($save){
            return redirect('users')->with('success', 'Datanya berhasil di ubah ya ..');
        }else{
            return Redirect::back()->with('error', 'Datanya gagal di ubah nih ..');
        }
    }

    public function destroy($email)
    {
        $user   = User::where('email', $email)->firstOrFail();
//        dd($user->id);
        $form   = Form::where('id_user', $user->id)->firstOrFail();
        $user->delete();
        $form->delete();
        return redirect('users')->with('success', 'Datanya berhasil di ubah ya ..');
    }
}
