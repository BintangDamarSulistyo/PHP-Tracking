<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajerController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->where('persetujuan_asman', 'Setuju')
            ->get();
        }else{
            $data_tracking = \App\Tracking::where('persetujuan_asman', 'Setuju')
            ->where('kelengkapan', 'Lengkap')
            ->where('verifikasi', 'Terverifikasi')
            ->orderBy('tanggal', 'DESC')
            ->get();
        }
        return view ('berkas.manajer', ['data_tracking'=> $data_tracking]);
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editmanajer',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkasmanajer')->with('sukses','Pengajuan berhasil diubah!');
    }
}