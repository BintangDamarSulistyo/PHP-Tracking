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
                                <form action="/berkasmanajer/{{$tracking->no_dokumen}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                    <label for="persetujuan_man">Persetujuan</label>
                                    <select name="persetujuan_man" class="form-control" id="persetujuan_man" required>
                                    <option value="Setuju" @if($tracking->persetujuan_man == 'Setuju') selected @endif>Setuju</option>
                                    <option value="Tidak Setuju" @if($tracking->persetujuan_man == 'Tidak Setuju') selected @endif>Tidak Setuju</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="textarea" name="keterangan" class="form-control" rows="6" id="keterangan" value="{{$tracking->keterangan}}"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>

                                    </div>
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

   
            