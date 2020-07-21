<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\artikel;
use App\user;
use App\contact;


class adminController extends Controller
{
    //
    public function index(){

        $artikel = artikel::all();

		
		//dump($artikel);
    	// mengirim data pegawai ke view index
		return view('admin.index',['artikel' => $artikel]);
    }

    public function user(){

        $user = user::all();

		
		//dump($artikel);
    	// mengirim data pegawai ke view index
		return view('admin.user',['user' => $user]);
    }

    public function message(){

        $message = contact::all();

		
		//dump($artikel);
    	// mengirim data pegawai ke view index
		return view('admin.message',['message' => $message]);
    }
}
