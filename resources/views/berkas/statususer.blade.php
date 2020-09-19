<DOCTYPE html>
<html>
    <head>

    <title>Pasar Jaya</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">

    <style type="text/css">
    .track {
     position: relative;
     background-color: #ddd;
     height: 7px;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     margin-bottom: 60px;
     margin-top: 50px
	}

	.track .step {
		-webkit-box-flex: 1;
		-ms-flex-positive: 1;
		flex-grow: 1;
		width: 25%;
		margin-top: -18px;
		text-align: center;
		position: relative
	}

	.track .step.active:before {
		background: #00AAFF
	}

	.track .step::before {
		height: 7px;
		position: absolute;
		content: "";
		width: 100%;
		left: 0;
		top: 18px
	}

	.track .step.active .icon {
		background: #00AAFF;
		color: #fff
	}

	.track .icon {
		display: inline-block;
		width: 40px;
		height: 40px;
		line-height: 40px;
		position: relative;
		border-radius: 100%;
		background: #ddd
	}

	.track .step.active .text {
		font-weight: 400;
		color: #000
	}

	.track .text {
		display: block;
		margin-top: 7px
	}

	.img-sm {
		width: 80px;
		height: 80px;
		padding: 7px
	}

	ul.row,
	ul.row-sm {
		list-style: none;
		padding: 0
	}

}
  </style>

        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">

        <body>

        <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	    <script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	    <script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
            
        <div class="main">
            <div class="main-content">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-12">      
                            <form class="form-inline right" method="GET" action="/statususer">
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
                                <div class="step active"> <span class="icon"> <i class=""></i> </span> <span class="text">Anggaran </span> </div>
                                @else
                                <div class="step"> <span class="icon"> </span> <span class="text">Anggaran </span> </div>
                                @endif

                                @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju'))
                                <div class="step active"> <span class="icon"> <i class=""></i> </span> <span class="text">Kas & Bank</span> </div>
                                @else
                                <div class="step"> <span class="icon"></span> <span class="text">Kas & Bank</span> </div>
                                @endif
                                
                                @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju') && ($tracking->persetujuan_man == 'Setuju'))
                                <div class="step active"> <span class="icon"> <i class=""></i> </span> <span class="text">Manajer </span> </div>
                                @else
                                <div class="step"> <span class="icon"></span> <span class="text">Manajer </span> </div>
                                @endif
                                
                                @if(($tracking->verifikasi == 'Terverifikasi') && ($tracking->kelengkapan == 'Lengkap') && ($tracking->persetujuan_asman == 'Setuju') && ($tracking->persetujuan_man == 'Setuju') && ($tracking->status_pembayaran == 'Terbayar'))
                                <div class="step active"> <span class="icon"> <i class=""></i> </span> <span class="text">Pembayaran</span> </div>
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

                <footer>
                <div class="container-fluid">
                    <p class="copyright">&copy; 2020 <a href="https://www.pasarjaya.co.id" target="_blank">pasarjaya.co.id</a>. All Rights Reserved.</p>
                </div>                  
                </footer>

        </body>
    </head>
</html>

