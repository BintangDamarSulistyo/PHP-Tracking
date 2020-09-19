<nav class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-brand">
		<a href="index.html"><img src="{{asset('admin/logo-login.png')}}" width="85" alt="Klorofil Logo" class="img-responsive logo"></a>
	</div>
	<div class="container-fluid">
		<form class="navbar-form navbar-left"></form>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a><span>{{auth()->user()->name}}</span></a>	
				</li>
			</ul>
		</div>
	</div>
</nav>