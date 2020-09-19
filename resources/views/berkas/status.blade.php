@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12">      
                    <form class="form-inline right" method="GET" action="/statusberkas">
                        <input name="cari" type="search" class="form-control" placeholder="Cari Dokumen..."> 
                        <button type="submit" class="btn btn-primary">Cari</button>  
                    </form>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    @if ($data_tracking != null)
                    @foreach($data_tracking as $tracking)
                    <table class="table">
                        <h3>Data Dokumen</h3>
                        
                        <tr>
                            <td>No. Dokumen</td>
                            <td>:  {{$tracking->no_dokumen}}</td>
                        <td>
                        <tr>
                            <td>Dari</td>
                            <td>:  {{$tracking->dari}}</td>
                        </tr>
                        <tr>
                            <td>Ke</td>
                            <td>:  {{$tracking->ke}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:  {{$tracking->tanggal}}</td>
                        </tr>
                        <tr>
                            <td>No. Surat</td>
                            <td>:  {{$tracking->no_surat}}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:  {{$tracking->keterangan}}</td>
                        </tr>
                    </table>
                    
                    <h3>Pelacakan Dokumen</h3>
                    <div class="track">

                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Registrasi</span> </div>
                        @if(($tracking->verifikasi == 'Terverifikasi'))
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Akuntansi</span></div>
                        @else
                        <div class="step"> <span class="icon"></span> <span class="text">Akuntansi</span></div>
                        @endif

                        @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap'))
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Anggaran </span> </div>
                        @else
                        <div class="step"> <span class="icon"> </span> <span class="text">Anggaran </span> </div>
                        @endif

                        @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju'))
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Kas & Bank</span> </div>
                        @else
                        <div class="step"> <span class="icon"></span> <span class="text">Kas & Bank</span> </div>
                        @endif
                        
                        @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju') && ($tracking->persetujuan_man == 'Setuju'))
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Manajer </span> </div>
                        @else
                        <div class="step"> <span class="icon"></span> <span class="text">Manajer </span> </div>
                        @endif
                        
                        @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju') && ($tracking->persetujuan_man == 'Setuju') && ($tracking->status_pembayaran == 'Terbayar'))
                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Pembayaran</span> </div>
                        @else
                        <div class="step"> <span class="icon"></span> <span class="text">Pembayaran</span> </div>
                        @endif
                    </div>
                    <br>
                    @endforeach
                    @endif         
                </div>
            </div>
        </div>
    </div>
</div>      
@stop