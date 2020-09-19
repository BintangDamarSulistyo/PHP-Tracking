@extends('layouts.master')
@section('content')
    <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                </div>       
                                    <div class="col-md-10">
                                    <form class="form-inline right" method="GET" action="/berkaspembayaran">
                                        <input name="cari" type="search" class="form-control" placeholder="Cari Dokumen...">
                                        <button type="submit" class="btn btn-primary">Cari</button>   
                                    </form>
                                    </div>
									<br/>
                                    <br/>
                                    <br/>
									<table class="table table-bordered table-hover table-striped">
										<thead>
											<tr>
                                            <th>No. Dokumen</th>
                                            <th>Dari</th>
                                            <th>Ke</th>
                                            <th>Keterangan Biaya</th>
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                            <th>No.Surat</th>
                                            <th>Status</th>
                                            <th>Jenis Pembayaran</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_tracking as $tracking)
                                        <tr>
                                            <td>{{$tracking->no_dokumen}}</td>
                                            <td>{{$tracking->dari}}</td>
                                            <td>{{$tracking->ke}}</td>
                                            <td>{{$tracking->perihal}}</td>
                                            <td>{{$tracking->nominal}}</td>
                                            <td>{{$tracking->tanggal}}</td>
                                            <td>{{$tracking->no_surat}}</td>
                                            <td>{{$tracking->status_pembayaran}}</td>
                                            <td>{{$tracking->jenis_pembayaran}}</td>
                                            <td>{{$tracking->keterangan}}</td>
                                            <td><a href="/berkaspembayaran/{{$tracking->no_dokumen}}/editpembayaran" class="btn btn-warning">Masukan</a></td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop