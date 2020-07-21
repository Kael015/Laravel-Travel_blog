<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\artikel;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
	public function index()
    {
        $artikel = new artikel;
        // $artikel = DB::table('artikel')->get();
        $artikel = artikel::all()->sortByDesc('id_artikel');
        return view('index', ['artikel' => $artikel]);
    }

    public function show($id)
    {
        # code...
    
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$artikel = DB::table('artikel')
		->where('judul_artikel','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
 
	}
}
