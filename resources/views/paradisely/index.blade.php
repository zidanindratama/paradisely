@extends('paradisely-layout.home')
@section('content')
<!--===== HERO SECTION =====-->
    <section class="hero mt-5 py-5">
      <div class="container">
        <div class="row mt-5">
          <div class="col hero__text">
            <h5 class="hero__small">SELAMAT DATANG DI Paradisely</h5>
            <h1 class="hero__big">
              Temukan keindahan dan <br />
              keberagaman budaya negara <br />
              Indonesia.
            </h1>
            <p class="hero__description">
              Paradisely membantu kamu untuk memilih tempat wisata di Indonesia
              yang kaya akan budaya dan keberagaman serta petualangan yang
              menunggumu di Indonesia.
            </p>
            <div class="hero__button">
              <a href="/virtual" class="btn btn-lg btn-secondary button__hero mr-3 mb-3"
                >Mulai Sekarang</a
              >
              <a
                href="/eksplorasi"
                class="btn btn-lg btn-outline-secondary button__hero mr-3 mb-3"
                >Eksplorasi</a
              >
            </div>
          </div>
          <div class="col hero__image d-none d-lg-block">
            <img src="{{asset('paradisely/assets/img/hero-section-images.png')}}" alt="" class="" />
          </div>
        </div>
      </div>
    </section>

    <!--===== KEBERAGAMAN SECTION =====-->
    <section class="keberagaman py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="keberagaman__text">
          <h5 class="hero__small">KEINDAHAN INDONESIA</h5>
          <h1 class="hero__big">Keberagaman & Budaya Indonesia</h1>
          <p class="hero__description">
            Nikmati berbagai macam budaya, keberagaman, kuliner dan keindahan
            alam yang membuat-mu jatuh cinta dan menjadikan Indonesia sebagai
            destinasi-mu selanjutnya
          </p>
        </div>
      </div>
    </section>

    <!--===== BUDAYA SECTION =====-->
    <section class="budaya py-5" data-aos="zoom-in">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/budaya-section-images-1.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">KEBERAGAMAN INDONESIA</h5>
              <h1 class="hero__big">
                Keberagaman budaya yang bisa anda nikmati hanya di Indonesia!
              </h1>
              <p class="hero__description">
                Beragam budaya bisa kalian temukan di Indonesia. Mulai dari
                Bahasa Daerah, Tari Tradisional, Senjata Traditional, Baju
                Daerah dan Lagu Daerah yang bisa kalian nikmati di Indonesia
                yang kaya akan budaya dan keberagamanya.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== ALAM SECTION =====-->
    <section class="alam py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">KEINDAHAN INDONESIA</h5>
              <h1 class="hero__big">
                Keindahan alam yang di akui Dunia yang bisa kamu liat di Indonesia!
              </h1>
              <p class="hero__description">
               Keindahan alam yang dimiliki Indonesia membuatnya diakui dunia sebagai negara terindah di dunia. Memiliki <a href="">Pantai</a>, Gunung, Tempat Bersejarah dan Wahana Atraksi yang ada di Indonesia yang siap kalian kunjungi kapan saja.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/alam-section-images.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
        </div>
      </div>
    </section>

    <!--===== KULINER SECTION =====-->
    <section class="kuliner" data-aos="zoom-in">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/kuliner-section-images.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">KULINER INDONESIA</h5>
              <h1 class="hero__big">
                Kelezatan kuliner Indonesia yang memanjakan lidah-mu dan lezat!
              </h1>
              <p class="hero__description">
              Indonesia memiliki banyak ragam kuliner yang bisa kalian coba mulai dari minuman, makanan ataupun makanan khas tiap daerah yang siap mewarnai liburan mu di Indonesia dengan kelezatan yang nikmat hanya di Indonesia.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== KEBERAGAMAN SECTION =====-->
    <section class="keberagaman my-5 py-5" data-aos="zoom-in-down">
      <div class="container">
        <div class="keberagaman__text">
          <h5 class="hero__small">VIDEO PARIWISATA INDONESIA</h5>
          <h1 class="hero__big">Jelajahi Indonesia Lewat Video Ini</h1>
          <p class="hero__description">
          Video dibawah dibuat oleh Pesona Indonesia dalam rangka merayakan hari Pariwisata dunia menampilkan keindahan alam dan keberagaman budaya yang dimiliki Indonesia!
          </p>
          <div class="iframe__container" data-aos="zoom-in-down">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/0kEnZN_WlgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!--===== FITUR SECTION =====-->
    <section class="fitur my-5 py-5" data-aos="zoom-in-down">
      <div class="container">
        <div class="keberagaman__text">
          <h5 class="hero__small">FITUR Paradisely</h5>
          <h1 class="hero__big">Apa yang membuat Paradisely Spesial?</h1>
          <p class="hero__description">
           Paradisely membantu kamu agar mendapat pengalaman liburan di Indonesia dengan pengalaman menyenangkan dengan berbagai fitur yang kami tawarkan. Apa saja?
          </p>
        </div>
      </div>
    </section>

    <!--===== VIRTUAL SECTION =====-->
    <section class="virtual py-5" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">FITUR VIRTUAL TOUR</h5>
              <h1 class="hero__big">
                Virtual Tour yang membantu anda mengenal lebih dekat Indonesia secara online!
              </h1>
              <p class="hero__description">
               Keindahan alam yang dimiliki Indonesia membuatnya diakui dunia sebagai negara terindah di dunia. Memiliki Pantai, Gunung, Tempat Bersejarah dan Wahana Atraksi yang ada di Indonesia yang siap kalian kunjungi kapan saja.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/virtual-tour-section-images.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
        </div>
      </div>
    </section>

     <!--===== WISATA SECTION =====-->
    <section class="wisata py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/peta-wisata-section-images.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">FITUR PETA WISATA</h5>
              <h1 class="hero__big">
                Peta Wisata membantumu menemukan tempat wisata di seluruh Indonesia!
              </h1>
              <p class="hero__description">
              Peta Wisata membantu anda untuk menemukan berbagai macam tempat pariwisata di Indonesia dengan cepat dan akurat sekaligus membantu anda menemukan tempat yang cocok.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== EKSPLORASI SECTION =====-->
    <section class="virtual py-5" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="budaya__text">
              <h5 class="hero__small">FITUR EKSPLORASI</h5>
              <h1 class="hero__big">
                Eksplorasi membantumu memilih tempat wisata di Indonesia!
              </h1>
              <p class="hero__description">
               Bingung mau kemana? dan pusing memilih pilihan? Tenang, Paradisely menyediakan fitur ekplorasi untuk kamu agar dapat menemukan tempat pariwisata yang cocok denganmu.
              </p>
                <a href="/eksplorasi" class="hero__arrow"
                  >Selengkapnya <i class="fas fa-arrow-right icon__selengkapnya"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <img
              src="{{asset('paradisely/assets/img/rekomendasi-section-images.png')}}"
              alt=""
              class="img-fluid mx-auto hero__image budaya__image"
            />
          </div>
        </div>
      </div>
    </section>

    <!--===== MAPBOX SECTION =====-->
    <section class="mapbox py-5" data-aos="zoom-in-up">
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
    </section>
    <script src="{{asset('paradisely/assets/js/mapbox.js')}}"></script>
@endsection