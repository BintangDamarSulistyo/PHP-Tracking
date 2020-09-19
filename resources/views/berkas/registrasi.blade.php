@extends('layouts.master')
@section('content')
    <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                </div>
                                    <div class="col-md-10">
                                    <form class="form-inline right" method="GET" action="/berkasregistrasi">
                                        <input name="cari" type="search" class="form-control" placeholder="Cari Dokumen...">
                                        <button type="submit" class="btn btn-primary">Cari</button>   
                                    </form>
                                    </div>
                                     <div class="col-md-2">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Buat Berkas</button>
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
                                            <td><a href="/berkasregistrasi/{{$tracking->no_dokumen}}/editregistrasi" class="btn btn-warning btn-sm">Ubah</a></td>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/berkasregistrasi/create" method="POST">
                    {{csrf_field()}}
                <div class="form-group">
                    <label for="dari">Dari</label>
                    <select name ="dari" class="form-control" id="dari" required>
                    <option>Divisi Regional 1</option>
                    <option>Divisi Regional 2</option>
                    <option>Divisi Perkulakan, Ritel dan Distribusi</option>
                    <option>Divisi Komersial dan Pengembangan Usaha</option>
                    <option>Divisi Perencanaan</option>
                    <option>Divisi Pembangunan</option>
                    <option>Divisi Pengelolaan dan Perawatan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ke">Ke</label>
                    <select name="ke" class="form-control" id="ke" required>
                    <option>Divisi Keuangan, Akuntansi dan Perpajakan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="perihal">Perihal Biaya</label>
                    <textarea name="perihal" class="form-control" rows="6" id="perihal" required></textarea>
                </div>

                <div class="form-group">
                <label for="nominal" class="form-label">Nominal</label>
                    <input name="nominal" class="form-control" type="numeric" id="nominal" placeholder="Jumlah yang dibayarkan" required>
                </div>

                <div class="form-group">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input name="tanggal" class="form-control tanggal" type="date" data-date-format="dd/mm/yyyy" value="dd-mm-yyyy" id="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="no_surat">No.Surat</label>
                    <input name="no_surat" type="text" class="form-control" id="no_surat" required>
                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" required>Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
                </div>
            </div>
@stop