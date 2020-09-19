<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->where('kelengkapan', 'Lengkap')
            ->get();
        }else{
            $data_tracking = \App\Tracking::where('kelengkapan', 'Lengkap')
            ->where('verifikasi', 'Terverifikasi')
            ->orderBy('tanggal', 'DESC')
            ->get();
        }
        return view ('berkas.kas', ['data_tracking'=> $data_tracking]);
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editkas',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkaskas')->with('sukses','Pengajuan berhasil diubah!');
    }
}
