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
              <h1 class="hero__big explore__big">Tentang</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Tentang
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== VIRTUAL TOUR SECTION =====-->
    <section class="tentang mt-5 py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 py-5" data-aos="zoom-in-up">
            <!-- google map -->
            <div
              class="2-depth-1-half map-container"
              id="map-container-google-1"
            >
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2652294321324!2d106.95465191431028!3d-6.228721362733253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMK%20NEGERI%201%20BEKASI!5e0!3m2!1sid!2sid!4v1579321834442!5m2!1sid!2sid"
                width="100%"
                height="450"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
              ></iframe>
            </div>
            <!-- google map -->
          </div>
          <div class="col-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bx-home-alt d-inline mr-3 tentang__icon"></i>
            <p class="tentang__tebal d-inline">
              Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar.,
              Kota Bks, Jawa Barat 17134
            </p>
            <p class="tentang__penjelasan">
              Diatas merupakan alamat kami, jika anda mempunyai kepentingan anda
              dapat menuju alamat tersebut.
            </p>
          </div>
          <div class="col-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bxl-facebook d-inline tentang__icon mr-3"></i>
            <p class="tentang__tebal d-inline">zidan indratama</p>
            <p class="tentang__penjelasan">
              Anda dapat mengikuti kami di platform facebook agar anda tidak
              kehilangan informasi terbaru tentang Paradisely.
            </p>
          </div>
          <div class="col-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bxs-phone d-inline tentang__icon mr-3"></i>
            <p class="tentang__tebal d-inline">+62 811 - 1000 - 372</p>
            <p class="tentang__penjelasan">
              Anda dapat menghubungi kami lewat telepon jika kami tidak merespon
              pesan anda lewat fitur kontak di website ini.
            </p>
          </div>
          <div class="col-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bxl-instagram d-inline tentang__icon mr-3"></i>
            <p class="tentang__tebal d-inline">@zidanindratama</p>
            <p class="tentang__penjelasan">
              Anda dapat mengikuti kami di platform instagram agar anda tidak
              kehilangan informasi terbaru tentang Paradisely.
            </p>
          </div>
          <div class="col-sm-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bx-mail-send d-inline tentang__icon mr-3"></i>
            <p class="tentang__tebal d-inline">zidanindratama03@gmail.com</p>
            <p class="tentang__penjelasan">
              Anda dapat menghubungi kami lewat email jika anda butuh informasi
              tentang website kami.
            </p>
          </div>
          <div class="col-sm-6 mt-5" data-aos="zoom-in-up">
            <i class="bx bxl-twitter d-inline tentang__icon mr-3"></i>
            <p class="tentang__tebal d-inline">zidanindratama</p>
            <p class="tentang__penjelasan">
              Anda dapat mengikuti kami di platform twitter agar anda tidak
              kehilangan informasi terbaru tentang Paradisely.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
@endsection