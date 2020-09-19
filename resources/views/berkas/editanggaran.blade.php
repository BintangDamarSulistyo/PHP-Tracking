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
                                <form action="/berkasanggaran/{{$tracking->no_dokumen}}/update" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="kelengkapan">Berkas</label>
                                    <select name="kelengkapan" class="form-control" id="kelengkapan" required>
                                    <option value="Lengkap" @if($tracking->kelengkapan == 'Lengkap') selected @endif>Lengkap</option>
                                    <option value="Tidak Lengkap" @if($tracking->kelengkapan == 'Tidak Lengkap') selected @endif>Tidak Lengkap</option>
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