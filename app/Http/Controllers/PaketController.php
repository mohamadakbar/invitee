<?php

namespace App\Http\Controllers;

use App\Model\AksesMenu;
use App\Model\MenuTemplate;
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

    public function edit($id){
        $menus = MenuTemplate::groupBy('nama_menu')->get();
        $menu = Paket::with('aksesmenu')->where('slug', $id)->orderBy('id', 'asc')->firstOrFail();

//        $menu_arr = [];
//        foreach ($menu->aksesmenu as $mnu){
////            print_r($mnu->menu_id);
//            $menu_arr[] = $mnu;
////            array_push($menu_arr, $mnu);
//        }
//        dd($menu_arr[0]);
//        $menu_get = [];
//        foreach ($menu_arr as $menu1){
//            $menu_get[] = $menu1;
//        }
//        dd("op");
//        $imp = implode($menu_arr);
//        dd($menu->aksesmenu);

//        $paket_arr = array();
//        $menu = array();
////        $get_menu = array();
//        foreach ($paket as $pakets){
//            $paket_arr[] = $pakets;
//            foreach ($paket_arr as $get_paket){
//                $menu[] = $get_paket->menu;
//                foreach ($menu as $menus){
//                    $menu = $menus;
//                }
//            }
//        }
//
//        $get_menus = [];
//        foreach ($menu as $get_menu){
//            $get_menus[] = $get_menu->nama_menu;
//        }

        return view('paket.edit', ['menu' => $menu, 'menus' => $menus]);
    }

    public function update(Request $req)
    {
        $akses = AksesMenu::where('paket_id', $req->paket_id);
        $akses->delete();

        foreach ($req->menu_id as $data) {
            AksesMenu::create(
                ['paket_id' => $req->paket_id, 'menu_id' => $data]
            );
        }
        return redirect('paket')->with('message', 'Data berhasil di ubah');
//        return redirect('dashboard')->with(['error' => 'Not permitted']);
    }

}
