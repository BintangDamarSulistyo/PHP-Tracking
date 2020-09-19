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
                                <form action="/berkaspembayaran/{{$tracking->no_dokumen}}/update" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="status_pembayaran">Status</label>
                                    <select name="status_pembayaran" class="form-control" id="status_pembayaran" required>
                                    <option value="Terbayar" @if($tracking->status_pembayaran == 'Terbayar') selected @endif>Terbayar</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                    <select name="jenis_pembayaran" class="form-control" id="jenis_pembayaran" required>
                                    <option value="Transfer" @if($tracking->jenis_pembayaran == 'Transfer') selected @endif>Transfer</option>
                                    <option value="Cek" @if($tracking->jenis_pembayaran == 'Cek') selected @endif>Cek</option>
                                    <option value="Tunai" @if($tracking->jenis_pembayaran == 'Tunai') selected @endif>Tunai</option>
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

   
            