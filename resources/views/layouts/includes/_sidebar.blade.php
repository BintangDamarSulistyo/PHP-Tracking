<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
				@if(auth()->user()->name == 'Registrasi')
				<li><a href="/berkasregistrasi" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Registrasi</span></a></li>
				@endif
				@if(auth()->user()->name == 'Akuntansi')
				<li><a href="/berkasakuntansi" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Akuntansi</span></a></li>
				@endif
				@if(auth()->user()->name == 'Anggaran')
				<li><a href="/berkasanggaran" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Anggaran</span></a></li>
				@endif
				@if(auth()->user()->name == 'Kas dan Bank')
				<li><a href="/berkaskas" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Kas</span></a></li>
				@endif
				@if(auth()->user()->name == 'Manajer')
				<li><a href="/berkasmanajer" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Manajer</span></a></li>
				@endif
				@if(auth()->user()->name == 'Pembayaran')
				<li><a href="/berkaspembayaran" class=""><i class="lnr lnr-file-add"></i> <span>Berkas Pembayaran</span></a></li>
				@endif
				<li><a href="/statusberkas" class=""><i class="lnr lnr-rocket"></i> <span>Lacak Dokumen</span></a></li>
				<li><a href="/logout" class=""><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
			</ul>
		</nav>
	</div>
</div>