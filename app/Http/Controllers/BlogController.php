<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\artikel;
use App\user;

class BlogController extends Controller
{
	// public function __construct()
    // {
    //     $this->middleware('auth');
    // }
	//
	public function blog(){
		return view('blog');
	}

    public function isi($id)
    {
		// mengambil data dari table pegawai
		$artikel = DB::table('artikel')->where('judul_artikel', $id)->first();

		
		//dump($artikel);
    	// mengirim data pegawai ke view index
		return view('artikel',['artikel' => $artikel]);
 
    }

	public function store(Request $request)
    {
    	$this->validate($request,[
    		'judul_artikel' => 'required',
    		'isi_artikel' => 'required'
    	]);
 
		
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
		$tujuan_upload = '../asset/images';
		$file->move($tujuan_upload,$nama_file);
				
		artikel::create([
			'judul_artikel' => $request->judul_artikel,
			'isi_artikel' => $request->isi_artikel,
			'url'=>$file
		]);

		dump($request->judul);
		dump($request->isi_artikel);
		return redirect('/');
	}
	
}
