<header class="satu-header">
      <nav class="nav bd-grid">
        <div>
          <a href="/" class="nav__logo"
            ><img src="{{asset('paradisely/assets/img/logo.png')}}" alt=""
          /></a>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>

        <div class="nav__menu" id="nav-menu">
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="/" class="nav__link {{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
            </li>
            <li class="nav__item">
              <a href="/eksplorasi" class="nav__link {{ (request()->is('eksplorasi')) ? 'active' : '' }}">Eksplorasi</a>
            </li>
            <li class="nav__item">
              <a href="/wisata" class="nav__link {{ (request()->is('wisata')) ? 'active' : '' }}">Wisata Daerah</a>
            </li>
            <li class="nav__item">
              <a href="/peta" class="nav__link {{ (request()->is('peta')) ? 'active' : '' }}">Peta Wisata</a>
            </li>
            <li class="nav__item">
              <a href="/virtual" class="nav__link {{ (request()->is('virtual*')) ? 'active' : '' }}">Virtual Tour</a>
            </li>
            <li class="nav__item">
              <a href="/tentang" class="nav__link {{ (request()->is('tentang')) ? 'active' : '' }}">Tentang</a>
            </li>
            <li class="nav__item">
              <a href="/kontak" class="nav__link {{ (request()->is('kontak')) ? 'active' : '' }}">Kontak</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>