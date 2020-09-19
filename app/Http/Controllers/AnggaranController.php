<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->where('verifikasi', 'Terverifikasi')
            ->get();
        }else{
            $data_tracking = \App\Tracking::where('verifikasi', 'Terverifikasi')
            ->orderBy('tanggal', 'DESC')
            ->get();
        }
        return view ('berkas.anggaran', ['data_tracking'=> $data_tracking]);
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editanggaran',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkasanggaran')->with('sukses','Pengajuan berhasil diubah!');
    }
}
