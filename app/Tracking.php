<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $primaryKey = 'no_dokumen';
    protected $table = 'tracking' ;
    protected $fillable = [
        'no_dokumen','dari','ke','perihal','nominal','tanggal','no_surat',
    'verifikasi','keterangan','kelengkapan','persetujuan_asman','persetujuan_man'
    ,'status_pembayaran','jenis_pembayaran'
];
}
