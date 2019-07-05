<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin',['only' => 'index','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function tambahAdmin()
    {
        return view('tambah-admin');

    }

    public function showAdmin()
    {
        $admins = DB::table('admins')->get();
        return view('kelola-admin',compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function incomingOrder()
    {
        $orders=[];
        $id_orders = DB::table('pelacakan')->where('IDStatus','=','1')->get();
        foreach ($id_orders as $id_order) {       

            $pesanan = DB::table('pesanan')->where('IDPesanan','=',$id_order->IDPesanan)->select('IDPelanggan','NoPesanan','TotalHarga','DiterimaTgl')->get();
            $pelanggan = DB::table('pelanggan')->where('IDPelanggan','=',$pesanan[0]->IDPelanggan)->select('Nama')->get();
            $order = new \stdClass();
            $order->Nama=$pelanggan[0]->Nama;
            $order->NoPesanan=$pesanan[0]->NoPesanan;
            $order->TotalHarga=$pesanan[0]->TotalHarga;
            $order->DiterimaTgl=$pesanan[0]->DiterimaTgl;
            array_push($orders, $order);
        }
        // dd($orders);
        return view('incoming-order',compact('orders'));
    }

    public function ongoingOrder()
    {
        $orders=[];
        $id_orders = DB::table('pelacakan')->where('IDStatus','!=','1')->Where('IDStatus','!=','52')->get();
        foreach ($id_orders as $id_order) {       

            $pesanan = DB::table('pesanan')->where('IDPesanan','=',$id_order->IDPesanan)->select('IDPelanggan','NoPesanan','TotalHarga','DiterimaTgl')->get();
            $pelanggan = DB::table('pelanggan')->where('IDPelanggan','=',$pesanan[0]->IDPelanggan)->select('Nama')->get();
            $order = new \stdClass();
            $order->Nama=$pelanggan[0]->Nama;
            $order->NoPesanan=$pesanan[0]->NoPesanan;
            $order->TotalHarga=$pesanan[0]->TotalHarga;
            $order->DiterimaTgl=$pesanan[0]->DiterimaTgl;
            $order->IDStatus=$id_order->IDStatus;
            array_push($orders, $order);
        }
        // dd($order);
        return view('ongoing-order',compact('orders'));
    }

    public function completeOrder()
    {
        $orders=[];
        $id_orders = DB::table('pelacakan')->Where('IDStatus','=','52')->get();
        foreach ($id_orders as $id_order) {       

            $pesanan = DB::table('pesanan')->where('IDPesanan','=',$id_order->IDPesanan)->select('IDPelanggan','NoPesanan','TotalHarga','SelesaiTgl')->get();
            $pelanggan = DB::table('pelanggan')->where('IDPelanggan','=',$pesanan[0]->IDPelanggan)->select('Nama')->get();
            $order = new \stdClass();
            $order->Nama=$pelanggan[0]->Nama;
            $order->NoPesanan=$pesanan[0]->NoPesanan;
            $order->TotalHarga=$pesanan[0]->TotalHarga;
            $order->SelesaiTgl=$pesanan[0]->SelesaiTgl;
            array_push($orders, $order);
        }
        // dd($order);
        return view('order-complete',compact('orders'));
    }

    public function totalOrder()
    {
        $orders=[];
        $id_orders = DB::table('pelacakan')->get();
        foreach ($id_orders as $id_order) {       

            $pesanan = DB::table('pesanan')->where('IDPesanan','=',$id_order->IDPesanan)->select('IDPelanggan','NoPesanan','TotalHarga')->get();
            $pelanggan = DB::table('pelanggan')->where('IDPelanggan','=',$pesanan[0]->IDPelanggan)->select('Nama')->get();
            $order = new \stdClass();
            $order->Nama=$pelanggan[0]->Nama;
            $order->NoPesanan=$pesanan[0]->NoPesanan;
            $order->TotalHarga=$pesanan[0]->TotalHarga;
            $order->IDStatus=$id_order->IDStatus;
            array_push($orders, $order);
        }
        // dd($order);
        return view('total-order',compact('orders'));
    }

    public function detailOrder($id){
        $pesanan        = DB::table('pesanan')->where('IDPesanan','=',$id)->select('IDPelanggan','NoPesanan','TotalHarga')->get();
        $id_pelanggan   = $pesanan[0]->IDPelanggan;
        $pelanggan      = DB::table('pelanggan')->where('IDPelanggan','=',$id_pelanggan)->select('Nama','Alamat','NoHP','Email')->get();
        $sampel         = DB::table('sampel')->where('IDPesanan','=',$id)->get();        
        $pesanan        = $pesanan[0];
        $pelanggan      = $pelanggan[0];
        $tanggal        = Carbon::today()->toDateString();
        $deadline       = Carbon::tomorrow()->toDateString();
        $dokumen        = DB::table('dokumenpesanan')->where('IDPesanan','=',$id)->get();
        $dokumen        = $dokumen[0];
        error_reporting(0);
        $nomor_resi = $dokumen->BuktiPengiriman;
        $list_kurir = array("jnt", "jne", "jet", "tiki", "pos", "sicepat", "wahana", "pcp", "rpx", "sap", "dse", "first");
        $hasil = '';

        foreach($list_kurir as $kurir) {
            $req = ['id' => $nomor_resi, 'kurir' => $kurir];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api3.cekresi.co.id:443/allcnote.php');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($req));
            $output = curl_exec($ch);
            curl_close($ch);

            $hasil = (explode('<div style="margin-left:15px;margin-top:5px;"><b>Outbond</b></div>', $output))[1];
            if($hasil != '')
            {
                break;
            }
        }
        // dd($hasil);
        // dd($deadline);
        return view('details',compact('pesanan','pelanggan','sampel','tanggal','dokumen','id','hasil','deadline'));
    }
    
    public function create()
    {
        return view('admin.auth.register');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
          'name'          => 'required',
          'email'         => ['required','unique:admins'],
          'jabatan'       => 'required',
          'ttd'           => 'required',
          'password'      => 'required'
        ]);
        // store in the database
        $admins = new Admin;
        $admins->name       = $request->name;
        $admins->email      = $request->email;
        $admins->jabatan    = $request->jabatan;
        $admins->ttd        = $request->ttd;
        $admins->password   = bcrypt($request->password);
        $admins->save();
        return redirect()->route('root');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}