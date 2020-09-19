<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        $data_tracking = null;
        if($request ->has('cari')){$data_tracking = \App\Tracking::where('no_dokumen', $request->cari)
            ->get();
        }
        return view ('berkas.status', ['data_tracking'=> $data_tracking]);
    }
}
