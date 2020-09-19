@extends('layouts.master')

@section('content')
    `<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="com-md-12">

                    <div class="panel">
								</div>
								<div class="panel-body">
                                <form action="/berkasregistrasi/{{$tracking->no_dokumen}}/update" method="POST">
                                    {{csrf_field()}}
                                    
                                <div class="form-group">
                                    <label for="dari">Dari</label>
                                    <select name ="dari" class="form-control" id="dari" required>
                                    <option value="Divisi Regional 1" @if($tracking->dari == 'Divisi Regional 1') selected @endif>Divisi Regional 1</option>
                                    <option value="Divisi Regional 2" @if($tracking->dari == 'Divisi Regional 2') selected @endif>Divisi Regional 2</option>
                                    <option value="Divisi Perkulakan, Ritel dan Distribusi" @if($tracking->dari == 'Divisi Perkulakan, Ritel dan Distribusi') selected @endif>Divisi Perkulakan, Ritel dan Distribusi</option>
                                    <option value="Divisi Komersial dan Pengembangan Usaha" @if($tracking->dari == 'Divisi Komersial dan Pengembangan Usaha') selected @endif>Divisi Komersial dan Pengembangan Usaha</option>>Divisi Komersial dan Pengembangan Usaha</option>
                                    <option value="Divisi Perencanaan" @if($tracking->dari == 'Divisi Perencanaan') selected @endif>Divisi Perencanaan</option>
                                    <option value="Divisi Pembangunan" @if($tracking->dari == 'Divisi Pembangunan') selected @endif>Divisi Pembangunan</option>
                                    <option value="Divisi Pengelolaan dan Perawatan" @if($tracking->dari == 'Divisi Pengelolaan dan Perawatan') selected @endif>Divisi Pengelolaan dan Perawatan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ke">Ke</label>
                                    <select name="ke" class="form-control" id="ke" required>
                                    <option value="Divisi Keuangan, Akuntansi dan Perpajakan" @if($tracking->ke == 'Divisi Keuangan, Akuntansi dan Perpajakan') selected @endif>Divisi Keuangan, Akuntansi dan Perpajakan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="perihal">Keterangan Biaya</label>
                                    <input type="textarea" name="perihal" class="form-control" rows="6" id="perihal" value="{{$tracking->perihal}}" required></textarea>
                                </div>

                                <div class="form-group">
                                <label for="nominal" class="form-label">Nominal</label>
                                    <input name="nominal" class="form-control" type="numeric" id="nominal" placeholder="Jumlah yang dibayarkan" value="{{$tracking->nominal}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input name="tanggal" class="form-control" type="date" id="tanggal" value="{{$tracking->tanggal}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">No.Surat</label>
                                    <input name="no_surat" type="text" class="form-control" id="dari" value="{{$tracking->no_surat}}" required>
                                </div>
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                                </form>
								</div>
							</div>

                    </div>
                </div>
            </div>
        </div>
    </div>`
@stop       