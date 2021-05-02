@extends('paradisely-layout.home')
@section('content')
    @foreach($virtual as $virtualv)
    <!--===== FITUR SECTION =====-->
    <section class="fitur my-5 py-5" data-aos="zoom-in-down">
      <div class="container">
        <div class="keberagaman__text">
          <h5 class="hero__small">VIRTUAL TOUR INDONESIA</h5>
          <h1 class="hero__big">{{$virtualv->nama}} Tour</h1>
          <p class="hero__description">
            Nikmati keindahan negara Indonesia dari layar anda dengan fitur
            Virtual Tour dari Parawisely yang membantu anda untuk menjelajahi
            Indonesia secara online.
          </p>
        </div>
      </div>
    </section>

    <!--===== REKOMENDASI SECTION =====-->
    <section class="google__street pb-5 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="zoom-in-up">
            <!-- google map -->
            <div
              class="2-depth-1-half map-container"
              id="map-container-google-1"
            >
              <iframe
                src="{{$virtualv->link_virtual}}"
                width="100%"
                height="650"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
            <!-- google map -->
          </div>
        </div>
      </div>
    </section>
    @endforeach

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')
  <script src="{{asset('paradisely/assets/js/mapbox.js')}}"></script>
@endsection