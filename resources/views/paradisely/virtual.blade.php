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
              <h1 class="hero__big explore__big">Virtual Tour</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Virtual Tour
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
          <h5 class="hero__small">VIRTUAL TOUR INDONESIA</h5>
          <h1 class="hero__big">Jelajahi Indonesia Dengan Virtual Tour</h1>
          <p class="hero__description">
            Nikmati keindahan negara Indonesia dari layar anda dengan fitur Virtual Tour dari Paradisely yang membantu anda untuk menjelajahi Indonesia secara online
          </p>
        </div>
      </div>
      </div>
    </section>

    <!--===== VIRTUAL TOUR SECTION =====-->
    <section class="virtual-tour pb-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach ($virtuals as $virtual)      
                <div class="col-sm-4 mb-5" data-aos="zoom-in-up">
                    <div class="card-deck">
                        <div class="card virtual__card shadow-lg">
                            <a href="/virtual/{{$virtual->slug}}"><img class="card-img-top virtual__image" src="{{$virtual->gambar}}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title text-center virtual__text my-auto">{{$virtual->nama}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
@endsection