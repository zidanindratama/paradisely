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
              <h1 class="hero__big explore__big">Kontak</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Kontak
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== VIRTUAL TOUR SECTION =====-->
    <section class="tempat mt-5 py-5">
      <div class="container">
        <div class="">
          <h1 class="hero__big">Hubungi Kami</h1>
          <p class="hero__description">
            Hubungi kami sekarang untuk mengenal lebih jauh Paradisely bisa
            membantu kamu dalam tempat wisata, virtual tour dan liburan di
            Indonesia.
          </p>
          <div class="row">
            <div class="col-sm-6" data-aos="zoom-in-up">
              <form action="/kontak" method="post">
                @csrf
                <div class="form-group pt-4">
                  <h5 class="kontak__label">Nama Lengkap *</h5>
                  <input
                    type="text"
                    name="nama"
                    id=""
                    class="form-control @error('nama') is-invalid @enderror" 
                    value="{{old('nama')}}"
                    placeholder="Masukkan nama"
                    aria-describedby="helpId"
                  />
                  @error('nama')
                      <span class="invalid-feedback">Masukkan data yang benar!</span>
                  @enderror
                </div>
                <div class="form-group">
                  <h5 class="kontak__label">Alamat Email *</h5>
                  <input
                    type="email"
                    name="email"
                    id=""
                    class="form-control @error('email') is-invalid @enderror" 
                    value="{{old('email')}}"
                    placeholder="Masukkan email"
                    aria-describedby="helpId"
                  />
                  @error('email')
                      <span class="invalid-feedback">Masukkan data yang benar!</span>
                  @enderror
                  <small id="helpId" class="text-muted"
                    >Kami tidak akan memberi tahu e-mail anda kepada
                    siapapun</small
                  >
                </div>
                <div class="form-group">
                  <h5 class="kontak__label">Pesan *</h5>
                  <textarea
                    class="form-control @error('pesan') is-invalid @enderror" 
                    value="{{old('pesan')}}"
                    name="pesan"
                    id=""
                    rows="3"
                    placeholder="Masukkan pesan"
                  ></textarea>
                  @error('pesan')
                      <span class="invalid-feedback">Masukkan data yang benar!</span>
                  @enderror
                </div>
                <div class="hero__button mb-5">
                  <button type="submit" class="btn btn-lg btn-secondary button__hero mr-3 mb-3">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6" data-aos="zoom-in-up">
              <h4 class="kontak__tebal">
                Tanya bagaimana cara kami membantu anda:
              </h4>
              <div class="kontak__text my-5">
                <p class="kontak__tebal">
                  Bagaimana cara memakai fitur Paradisely
                </p>
                <p class="kontak__normal">
                  Anda bisa menjelajahi fitur
                  <a href="/eksplorasi">eksplorasi</a>,
                  <a href="/wisata">wisata daerah</a>, dan
                  <a href="/virtual">fitur virtual tour</a> untuk
                  menikmati fitur Paradisely.
                </p>
              </div>
              <div class="kontak__text my-5">
                <p class="kontak__tebal">
                  Jika anda merupakan pengelola tempat pariwisata
                </p>
                <p class="kontak__normal">
                  Jika tempat anda tidak terdaftar di Database kami, anda dapat
                  memasukan nya secara manual dengan fitur mitra pariwisata.
                </p>
              </div>
              <div class="kontak__text my-5">
                <p class="kontak__tebal">Mengalami kesalahan dan bug</p>
                <p class="kontak__normal">
                  Anda dapat menghubungi kami dengan mengisi form di sebelah
                  kiri anda, lalu akan kami balas secepatnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
@endsection