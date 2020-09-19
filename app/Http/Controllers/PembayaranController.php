<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->where('persetujuan_man', 'Setuju')
            ->get();
        }else{
            $data_tracking = \App\Tracking::where('persetujuan_man', 'Setuju')
            ->where('persetujuan_asman', 'Setuju')
            ->where('kelengkapan', 'Lengkap')
            ->where('verifikasi', 'Terverifikasi')
            ->orderBy('tanggal', 'DESC')
            ->get();
        }
        return view ('berkas.pembayaran', ['data_tracking'=> $data_tracking]);
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editpembayaran',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkaspembayaran')->with('sukses','Pengajuan berhasil diubah!');
    }
}