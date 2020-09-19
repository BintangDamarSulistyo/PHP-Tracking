<!doctype html>
<html lang="en">

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
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2020 <a href="https://www.pasarjaya.co.id" target="_blank">pasarjaya.co.id</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>
$(document).ready(function() {
   var year = (new Date).getFullYear();
   $('.tanggal').tanggal({
     format: "dd-mm-yyyy",
     autoclose:true,
     minDate: new Date(year, 0, 1),
     maxDate:new Date(year, 11, 31)

   });
 });
	</script>
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>
