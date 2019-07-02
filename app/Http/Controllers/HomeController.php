<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_order    = DB::table('pelacakan')->get();
        $incoming_order = DB::table('pelacakan')->where('IDStatus','=','1')->get();
        $complete_order = DB::table('pelacakan')->where('IDStatus','=','52')->get();
        $total_order    = count($total_order);
        $incoming_order = count($incoming_order);
        $complete_order = count($complete_order);
        $ongoing_order  = $total_order-($incoming_order+$complete_order);

        return view('index',compact('incoming_order','ongoing_order','complete_order','total_order'));
    }

    public function tambahKatalog() 
    {
        return view('katalog-tambah');
    }

    public function listPesanan(){
        return view('pesanan');
    }
    public function incoming()
    {
        return view('incoming-order');
    }
}
