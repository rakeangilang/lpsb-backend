<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katalog;
use App\Kategori;
use App\BentukSampel;
use Illuminate\Support\Facades\DB; 

class KatalogController extends Controller
{   
    public function addKategori(Request $request)
    {
        $this->validate(request(),
        [
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $kategori = new Kategori;
        $kategori->Kategori = $request->input('nama');
        $kategori->FotoKategori = time().'.'.request()->foto->getClientOriginalExtension();
        request()->foto->move(public_path('kategori'), $kategori->FotoKategori);
        $kategori->FotoKategori = url('kategori/'.time().'.'.request()->foto->getClientOriginalExtension()); 
        $kategori->save();  
        return redirect()->route('root')->with(['success'=>'Kategori berhasil ditambahkan']);
    }
    public function addKatalog(Request $request)
    {   
        $this->validate(request(),
        [
            'kategori' => 'required',
            'jenis_analisis' => 'required',
            'harga_ipb' => 'required',
            'harga_nonipb' => 'required',
            'metode' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // dd($request->input('kategori'));
        $katalog = new Katalog;
        $katalog->IDKategori = $request->input('kategori');
        $katalog->JenisAnalisis = $request->input( 'jenis_analisis');
        $katalog->HargaIPB = $request->input('harga_ipb');
        $katalog->HargaNONIPB = $request->input('harga_nonipb');
        $katalog->Metode = $request->input('metode');
        $katalog->Keterangan = $request->input('keterangan');
        $katalog->StatusAktif = $request->input('status');
        $katalog->FotoKatalog = time().'.'.request()->foto->getClientOriginalExtension();
        request()->foto->move(public_path('katalog'), $katalog->FotoKatalog); 
        // dd($katalog);
        $katalog->FotoKatalog = url('katalog/'.time().'.'.request()->foto->getClientOriginalExtension());
        $katalog->save();
        return redirect()->route('root')->with(['success' => 'Post berhasil ditambahkan!']);
    }

    public function tambahKatalog()
    {
        $kats = DB::table('kategori')->select('Kategori')->get();
        return view('tambah-katalog',compact('kats'));
    }
    
    public function kelolaKatalog()
    {
        $katalog = DB::table('katalog')->get();
        return view('kelola-katalog',compact('katalog'));
    }

    public function tambahKategori()
    {
        return view('tambah-kategori');
    }

    // ambil daftar katalog
    public function getAllKatalog()
    {
        try{
            $katalogs = Katalog::all();

        return response()->json([
            'success'=>true,
            'message'=>'Semua kategori berhasil diambil',
            'katalogs'=>$katalogs,
            'Status' => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }
    }

    public function getAllKatalogUmum()
    {
        try{
            $katalogs = Katalog::select('IDKatalog', 'JenisAnalisis', 'FotoKatalog', 'HargaIPB', 'HargaNONIPB', 'IDKategori')
                        ->where('StatusAktif', 1)->get();

            foreach ($katalogs as $katalog) {
                $nama_kategori = Kategori::select('Kategori')->where('IDKategori', $katalog->IDKategori)->first()->Kategori;
                $katalog->setAttribute('Kategori', $nama_kategori);
            }

        return response()->json([
            'success'=>true,
            'message'=>'Semua kategori berhasil diambil',
            'katalogs'=>$katalogs,
            'Status' => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }
    }

    public function getKatalogByID($id_katalog)
    {
        try{
        $katalog = Katalog::find($id_katalog);
        $id_katalog = $katalog->IDKatalog;
        $id_kategori = $katalog->IDKategori;
        $jenis_analisis = $katalog->JenisAnalisis;
        $harga_ipb = $katalog->HargaIPB;
        $harga_nonipb = $katalog->HargaNONIPB;
        $metode = $katalog->Metode;
        $keterangan = $katalog->Keterangan;
        $status_aktif = $katalog->StatusAktif;
        $foto_katalog = $katalog->FotoKatalog;

        $kategori = Kategori::where('IDKategori', $id_kategori)->first();
        $kategori = $kategori->Kategori;
        $bentuk = BentukSampel::where('IDKatalog', $id_katalog)->first();
        $ekstrak = $bentuk->Ekstrak;
        $simplisia = $bentuk->Simplisia;
        $cairan = $bentuk->Cairan;
        $serbuk = $bentuk->Serbuk;

        return response()->json([
            'success'=>true,
            'message'=>'Semua kategori berhasil diambil',
            'IDKatalog'=>$id_katalog,
            'IDKategori'=>$id_kategori,
            'Kategori'=>$kategori,
            'JenisAnalisis'=>$jenis_analisis,
            'HargaIPB'=>$harga_ipb,
            'HargaNONIPB'=>$harga_nonipb,
            'Metode'=>$metode,
            'Keterangan'=>$keterangan,
            'StatusAktif'=>$status_aktif,
            'FotoKatalog'=>$foto_katalog,
            'Ekstrak'=>$ekstrak,
            'Simplisia'=>$simplisia,
            'Cairan'=>$cairan,
            'Serbuk'=>$serbuk,
            'Status' => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }        
    }

    public function getAllKategori()
    {
        try{
            $kategoris = Kategori::all();

        return response()->json([
            'success'=>true,
            'message'=>'Semua kategori berhasil diambil',
            'kategoris'=>$kategoris,
            "Status" => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }
        
    }

    public function getKatalogByKategori($id_kategori)
    {
        try{
            $katalogs = Katalog::where('IDKategori', $id_kategori)->get();

        foreach($katalogs as $katalog){
            $BentukSampel = $katalog->BentukSampel;
            $NamaKategori = Kategori::select('Kategori')->where('IDKategori', $katalog->IDKategori)->first();
            //$NamaKategori = $katalog->setAttribute('NamaKategori', $NamaKategori->Kategori);
        }
        
        return response()->json([
            'success'=>true,
            'message'=>'Katalog sesuai kategori berhasil diambil',
            'katalogs'=>$katalogs,
            'NamaKategori' => $NamaKategori->Kategori,
            'Status' => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }
        
    }

    public function getBentukHargaByKatalog($id_katalog)
    {
        try{
            $bentuk = BentukSampel::where('IDKatalog', $id_katalog)->first();
        $harga = Katalog::where('IDKatalog', $id_katalog)->first();
        $harga_ipb = $harga->HargaIPB;
        $harga_nonipb = $harga->HargaNONIPB;
        $id_katalog = $bentuk->IDKatalog;
        $ekstrak = $bentuk->Ekstrak;
        $simplisia = $bentuk->Simplisia;
        $cairan = $bentuk->Cairan;
        $serbuk = $bentuk->Serbuk;

        return response()->json([
            'success'=>true,
            'message'=>'Bentuk Sampel berdasarkan katalog berhasil diambil',
            'id_katalog'=>$id_katalog,
            'Ekstrak'=>$ekstrak,
            'Simplisia'=>$simplisia,
            'Cairan'=>$cairan,
            'Serbuk'=>$serbuk,
            'HargaIPB'=>$harga_ipb,
            'HargaNONIPB'=>$harga_nonipb,
            'Status' => 200
            ], 200);
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }
    }    
}

        try{
            
        }
        catch(\Exception $e){
            return response()->json(['success'=>false, 'message'=>$e->getMessage(),'Status'=>500], 200);
        }