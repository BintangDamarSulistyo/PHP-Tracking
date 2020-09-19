<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusUserController extends Controller
{
    public function index(Request $request)
    {
        $data_tracking = null;
        if($request ->has('cari')){$data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->get();
        }
        return view ('berkas.statususer', ['data_tracking'=> $data_tracking]);
    }
}
