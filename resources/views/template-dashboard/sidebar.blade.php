<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					@if(auth()->user()->role == 'Administrator') 
					<li class="nav-item">
						<a class="nav-link" href="/dashboard">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#halaman" aria-expanded="false"
							aria-controls="halaman">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Halaman</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="halaman">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/akun">Akun</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/">Homepage</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false"
							aria-controls="user">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">User</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="user">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/user">List User</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/user/create">Tambah User</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#kategori" aria-expanded="false"
							aria-controls="kategori">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Kategori</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="kategori">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/category">List Kategori</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/category/create">Tambah Kategori</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#virtual" aria-expanded="false"
							aria-controls="virtual">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Virtual</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="virtual">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/virtual">List Virtual</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/virtual/create">Tambah Virtual</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#eksplorasi" aria-expanded="false"
							aria-controls="eksplorasi">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Eksplorasi</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="eksplorasi">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/eksplorasi">List Eksplorasi</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/eksplorasi/create">Tambah Eksplorasi</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#kontak" aria-expanded="false"
							aria-controls="kontak">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Kontak</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="kontak">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/dashboard/kontak">List Kontak</a></li>
							</ul>
						</div>
					</li>
					@endif
					@if(auth()->user()->role == 'Pengunjung')
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#halaman" aria-expanded="false"
							aria-controls="halaman">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Halaman</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="halaman">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/mitra/akun">Akun</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/">Homepage</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#eksplorasi" aria-expanded="false"
							aria-controls="eksplorasi">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Eksplorasi</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="eksplorasi">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="/mitra/eksplorasi">List Eksplorasi</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="/mitra/eksplorasi/create">Tambah Eksplorasi</a></li>
							</ul>
						</div>
					</li>
					@endif
				</ul>
			</nav>