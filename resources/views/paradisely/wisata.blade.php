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
              <h1 class="hero__big explore__big">Wisata Daerah</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Wisata Daerah
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== WISATA DAERAH SECTION =====-->
    <section class="tempat mt-5 py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/island.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Pulau Kalimantan</h4>
                      <p class="card-text mt-1 mb-2">
                        Merupakan daerah ibu kota masa depan Indonesia yang
                        menjanjikan karena keindahan alamnya yang indah dan
                        menawan
                      </p>
                      <a href="/wisata" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/bali-2.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Bali & Nusa Tenggara</h4>
                      <p class="card-text mt-1 mb-2">
                        Salah satu daerah paling populer di Indonesia yang tidak
                        diragukan lagi keindahan alam dan keberagaman budaya nya
                        yang wajib kalian kunjungi!
                      </p>
                      <a href="" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/raja-ampat.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Maluku & Papua</h4>
                      <p class="card-text mt-1 mb-2">
                        Meskipun kerap dipandang sebelah mata, maluku & papua
                        memiliki keindahan alam yang indah dan tidak ada duanya
                        di Indonesia.
                      </p>
                      <a href="" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/sulawesi.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Pulau Sulawesi</h4>
                      <p class="card-text mt-1 mb-2">
                        Salah satu pulau yang mempunyai kekayaan budaya terbesar
                        di Indonesia. Kalian akan menemukan berbagai macam
                        bahasa, kuliner dan budaya hidup unik disini.
                      </p>
                      <a href="" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/sumatra.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Sumatra</h4>
                      <p class="card-text mt-1 mb-2">
                        Merupakan pulau terbesar ke 2 di indonesia yang memiliki
                        banyak potensi dari keindahan alam dan keberagaman
                        budanya.
                      </p>
                      <a href="" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-4" data-aos="zoom-in-up">
            <div class="card-deck">
              <div class="card shadow">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="image__wisata">
                      <img
                        class="card-img-top img-fluid rounded"
                        src="{{asset('paradisely/assets/img/jawa.jpg')}}"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-sm-10 my-auto">
                    <div class="card-body">
                      <h4 class="card-title">Pulau Jawa</h4>
                      <p class="card-text mt-1 mb-2">
                        Pulau jawa dikenal dengan keindahan dan keberagaman
                        budayanya yang membuatnya ramai dikunjungi turis dari
                        berbagai negara.
                      </p>
                      <a href="" class="hero__arrow wisata__next"
                        >Selengkapnya</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
@endsection