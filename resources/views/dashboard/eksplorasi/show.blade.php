@extends('paradisely-layout.home')
@section('content')
@foreach($exploration as $eksplorasi)
    <!--===== HERO SECTION =====-->
    <section class="hero eksplore">
      <div class="">
        <div class="row">
          <div class="col-12">
            <img
               src="{{asset($eksplorasi->gambar)}}"
              alt=""
              class="img-fluid eksplorasi__hero detail"
            />
            <div class="ekplore__center">
              <h1 class="hero__big explore__big">{{$eksplorasi->nama}}</h1>
              <h5 class="hero__small explore__small">
                {{$eksplorasi->category->name}} <span class="explore__arrow mx-3">→</span> {{$eksplorasi->nama}}
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    
        <input type="hidden" name="" id="eksplorasi_lati" value="{{$eksplorasi->latitude}}">
        <input type="hidden" name="" id="eksplorasi_long" value="{{$eksplorasi->longitude}}">

    <!--===== MAPBOX SECTION =====-->
    <section class="mapbox py-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="keberagaman__text">
          <div id='map'></div>
        </div>
      </div>
    </section>
    <script src="{{asset('paradisely/assets/js/mapbox-2.js')}}"></script>

    <!--===== KOMENTAR SECTION =====-->
    <section class="tempat mt-5" data-aos="zoom-in-up">
      <div class="container">
        <div class="">
          <h1 class="hero__big">{{$eksplorasi->nama}}</h1>
          <p class="kontak__tebal alamat">{{$eksplorasi->city->name}}, {{$eksplorasi->province->name}}</p>
          <p class="hero__description">
            {!!$eksplorasi->deskripsi!!} 
          </p>
          <div class="row">
            <div class="col-sm-6 mb-5 py-5" data-aos="zoom-in-up">
              <form action="/komentar/{{$eksplorasi->id}}" method="post">
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
                  <h5 class="kontak__label">Komentar *</h5>
                  <textarea
                    class="form-control @error('komentar') is-invalid @enderror" 
                    value="{{old('komentar')}}"
                    name="komentar"
                    id=""
                    rows="3"
                    placeholder="Masukkan komentar"
                  ></textarea>
                  @error('komentar')
                      <span class="invalid-feedback">Masukkan data yang benar!</span>
                  @enderror
                </div>
                <div class="hero__button mb-5">
                  <button type="submit" class="btn btn-lg btn-secondary button__hero mr-3 mb-3">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6" data-aos="zoom-in-up">
              <h4 class="kontak__tebal">Komentar ({{$comments->count()}})</h4>
              <?php
              function random_color_part() {
                return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
              }

              function random_color() {
                return random_color_part() . random_color_part() . random_color_part();
              }
              ?>
              @foreach ($comments as $comment)
                <div class="kontak__text my-5">
                  <div class="">
                    <span class="komentar__gambar d-inline mr-3" style="background-color: #<?= random_color(); ?>">{{substr($comment->nama, 0, 1)}}</span>
                    <p class="kontak__normal komentar__nama d-inline">
                      {{$comment->nama}}
                    </p>
                    <p class="komentar__isi mb-3 mt-4">{{$comment->komentar}}</p>
                    <p class="komentar__tanggal">{{$comment->created_at->format('M-d-Y')}}</p>
                    <hr class="style1" />
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
@endforeach

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
@endsection