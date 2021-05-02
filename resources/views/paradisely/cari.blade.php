<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('paradisely/assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('paradisely/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('paradisely/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">

    <!-- Primary Meta TagWs -->
    <title>Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!</title>
    <meta name="title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta name="description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta property="og:description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">
    <meta property="og:image" content="{{asset('paradisely/assets/img/favicon/bali.jpg')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Paradisely | Jelajahi Indahnya Indonesia Bersama Kami!">
    <meta property="twitter:description" content="
    Paradisely membantu kamu untuk memilih tempat wisata di Indonesia yang kaya akan budaya dan keberagaman serta petualangan yang menunggumu di Indonesia.">
    <meta property="twitter:image" content="{{asset('paradisely/assets/img/favicon/bali.jpg')}}">

    <!-- =====BOX ICONS===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

     <!-- ===== FONT AWESOME ===== -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />

    <!-- ===== AOS ===== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('paradisely/assets/css/style.css')}}" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- ===== MAPBOX ===== -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css"
      rel="stylesheet"
    />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link
      rel="stylesheet"
      href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
      type="text/css"
    />
    
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <!--===== HEADER =====-->
    @include('paradisely-layout.navbar')
    
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
              <h1 class="hero__big explore__big">Ekplorasi</h1>
              <h5 class="hero__small explore__small">
                Beranda <span class="explore__arrow mx-3">→</span> Eksplorasi
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== TEMPAT EKSPLORASI SECTION =====-->
    <section class="tempat mt-5 py-5">
      <div class="container">
        <div class="row">
          <!-- INI BUAT MOBILE -->
          <div class="col-12 d-lg-none">
            <div class="tempat__text">
              <h5 class="tempat__small">Total (54)</h5>
              <div class="form-group has-search" data-aos="zoom-in-up">
                <span class="fa fa-search form-control-feedback"></span>
                <input
                  type="text"
                  id="inputSearch1"
                  class="form-control"
                  placeholder="Cari tempat"
                />
              </div>
              <div class="form-group" data-aos="zoom-in-up">
                <h5 class="tempat__small">Kategori</h5>
                <select class="form-control" name="" id="">
                  <option>Semua</option>
                  <option>Wahana Atraksi</option>
                  <option>Monumen</option>
                  <option>Pegunungan</option>
                  <option>Kuliner</option>
                  <option>Museum</option>
                  <option>Kebun Binatang</option>
                  <option>Pantai</option>
                  <option>Alam</option>
                </select>
              </div>
            </div>
          </div>

          <!-- INI BUAT DESKTOP -->
          <div class="col-3 d-none d-lg-block">
            <div class="tempat__text">
              <h5 class="tempat__small">Total (54)</h5>
              <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input
                  type="text"
                  id="inputSearch"
                  class="form-control"
                  placeholder="Cari tempat"
                />
              </div>
              <div class="form-group">
                <h5 class="tempat__small">Kategori</h5>
                <select class="form-control" name="" id="">
                  <option value="">Semua</option>
                  @foreach ($categories as $category)
                  <option>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <!-- INI BUAT MOBILE -->
          <div class="col-12 d-lg-none">
            <div class="row tempat__wisata">
              @foreach ($explorations as $eksplorasi)   
              <div class="col mb-5" data-aos="zoom-in-up">
                <div class="card-deck">
                  <div class="card shadow">
                    <a href="/eksplorasi/{{$eksplorasi->slug}}"
                      ><img
                        class="card-img-top"
                        src="{{$eksplorasi->gambar}}"
                        alt=""
                    /></a>
                    <div class="card-body rounded">
                      <h5 class="tempat__kategori">{{$eksplorasi->category->name}}</h5>
                      <a href="" class="tempat__nama">{{$eksplorasi->nama}}</a>
                      <p class="tempat__letak">
                        {{$eksplorasi->city->name}}, {{$eksplorasi->province->name}}
                      </p>
                      <div class="mt-2">
                        <i class="bx bx-comment-detail d-inline mr-2"></i>
                        <p class="tempat__comment d-inline">22 Ulasan</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

          <!-- INI BUAT DESKTOP -->
          <div class="col-9 d-none d-lg-block">
            <div class="row tempat__wisata">
              @foreach ($explorations as $eksplorasi)    
              <div class="col-sm-4 mb-5" data-aos="zoom-in-up" id="searchResult">
                <div class="card-deck">
                  <div class="card shadow">
                    <a href="/eksplorasi/{{$eksplorasi->slug}}"
                      ><img
                        class="card-img-top"
                        src="{{$eksplorasi->gambar}}"
                        alt=""
                    /></a>
                    <div class="card-body rounded">
                      <h5 class="tempat__kategori">{{$eksplorasi->category->name}}</h5>
                      <a href="" class="tempat__nama">{{$eksplorasi->nama}}</a>
                      <p class="tempat__letak">
                        {{$eksplorasi->city->name}}, {{$eksplorasi->province->name}}
                      </p>
                      <div class="mt-2">
                        <i class="bx bx-comment-detail d-inline mr-2"></i>
                        <p class="tempat__comment d-inline">22 Ulasan</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    hghg
    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#inputSearch').on('keyup', function(){
        $inputSearch = $(this).val();
        if($inputSearch == ''){
          $('#searchResult').html('');
          $('#searchResult').hide('');
        } else {
          $.ajax({
            method:"post",
            url:"eksplorasi",
            data:JSON.stringify({
              inputSearch:$inputSearch
            }),
            headers:{
              'Accept':'application/json',
              'Content-Type':'application/json'
            },
            success:function(data){
              console.log(data);
            },
            error: function (request, status, error) {
        alert(request.responseText);
    }
          });
        }
      });
    </script>

    <!--===== FOOTER SECTION =====-->
    @include('paradisely-layout.footer')

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!--===== MAIN JS =====-->
    <script src="{{asset('paradisely/assets/js/script.js')}}"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS --><script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
