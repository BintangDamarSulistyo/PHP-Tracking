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
                                <form action="/berkasakuntansi/{{$tracking->no_dokumen}}/update" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="verifikasi">Verifikasi</label>
                                    <select name="verifikasi" class="form-control" id="verifikasi" required>
                                    <option value="Terverifikasi" @if($tracking->verifikasi == 'Terverifikasi') selected @endif>Terverifikasi</option>
                                    <option value="Tidak Terverifikasi" @if($tracking->verifikasi == 'Tidak Terverifikasi') selected @endif>Tidak Terverifikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="textarea" name="keterangan" class="form-control" rows="6" id="keterangan" value="{{$tracking->keterangan}}"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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