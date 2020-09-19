<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)->get();
        }else{
            $data_tracking = \App\Tracking::orderBy('no_dokumen', 'DESC')
            ->get();
        }
        return view ('berkas.registrasi', ['data_tracking'=> $data_tracking]);
    }

    public function create(Request $request)
    {
        \App\Tracking::create($request->all());
        return redirect('berkasregistrasi')->with('sukses','Surat Pengajuan berhasil dimasukan!');
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editregistrasi',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkasregistrasi')->with('sukses','Pengajuan berhasil diubah!');
    }
}