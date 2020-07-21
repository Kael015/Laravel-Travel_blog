<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
			'email' => 'required',
			'topic'=>'required',
    	]);
 
        artikel::create([
    		'nama' => $request->nama,
			'email' => $request->email,
			'topic' => $request->topic,
			'isi_pesan' => $request->isi_pesan
    	]);
 
    	return redirect('/');
    }
}
