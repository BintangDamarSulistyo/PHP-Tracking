<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkuntansiController extends Controller
{
    public function index(Request $request)
    {
        if($request ->has('cari')){
            $data_tracking = \App\Tracking::where('no_dokumen', $request->cari)->get();
        }else{
            $data_tracking = \App\Tracking::orderBy('verifikasi', 'ASC')
            ->orderBy('tanggal', 'DESC')
            ->get();
        }
        return view ('berkas.akuntansi', ['data_tracking'=> $data_tracking]);
    }

    public function create(Request $request)
    {
        \App\Tracking::create($request->all());
        return redirect('berkasakuntansi')->with('sukses','Surat Pengajuan berhasil diinput!');
    }

    public function edit($no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        return view('berkas/editakuntansi',['tracking'=> $tracking]);
    }

    public function update(Request $request,$no_dokumen)
    {
        $tracking = \App\Tracking::find($no_dokumen);
        $tracking->update($request->all());
        return redirect('/berkasakuntansi')->with('sukses','Pengajuan berhasil diubah!');
    }
}