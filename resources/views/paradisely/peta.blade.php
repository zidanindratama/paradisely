@extends('paradisely-layout.home')
@section('content')
<!--===== HERO SECTION =====-->
    <section class="hero eksplore">
      <div class="">
        <div class="row">
          <div class="col-12">
            <img
              src="{{asset('paradisely/assets/img/danau-toba.jpeg')}}"
              alt=""
              class="img-fluid eksplorasi__hero"
            />
            <div class="ekplore__center">
              <h1 class="hero__big explore__big">Peta Wisata</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Peta Wisata
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== WISATA DAERAH SECTION =====-->
    <section class="tempat mt-5 py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="keberagaman__text">
          <h5 class="hero__small">PETA PARIWISATA INDONESIA</h5>
          <h1 class="hero__big">Peta Pariwisata Indonesia</h1>
          <p class="hero__description">
            Berikut dibawah ini merupakan peta pariwisata Indonesia yang bisa anda jelajahi dan anda gunakan untuk menemukan tempat selanjutnya yang akan anda kunjungi.
          </p>
          <div id='map'></div>
        </div>
      </div>
      </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
  <script src="{{asset('paradisely/assets/js/mapbox.js')}}"></script>
@endsection