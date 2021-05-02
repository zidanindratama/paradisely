@extends('paradisely-layout.home')
@section('yahaha', '{{ csrf_token() }}')
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
              <h5 class="tempat__small">Total ({{$explorations->count()}})</h5>
              <div class="form-group has-search" data-aos="zoom-in-up">
                <span class="fa fa-search form-control-feedback"></span>
                <input
                  type="text"
                  id="inputSearch1"
                  class="form-control"
                  placeholder="Cari tempat"
                />
              </div>
              <div class="form-group">
                <h5 class="tempat__small" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cari Kategori</h5>
                <div class="collapse" id="collapseExample">
                  <p data-filter="all" class="list cari__kategori mb-2">Semua</p>
                  @foreach ($categories as $category)
                    <p data-filter="{{$category->name}}" value="{{$category->name}}" class="list cari__kategori mb-2">{{$category->name}}</p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <!-- INI BUAT DESKTOP -->
          <div class="col-3 d-none d-lg-block">
            <div class="tempat__text">
              <h5 class="tempat__small">Total ({{$explorations->count()}})</h5>
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
                <h5 class="tempat__small" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cari Kategori</h5>
                <div class="collapse" id="collapseExample">
                  <p data-filter="all" class="list cari__kategori mb-2">Semua</p>
                  @foreach ($categories as $category)
                    <p data-filter="{{$category->name}}" value="{{$category->name}}" class="list cari__kategori mb-2">{{$category->name}}</p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <!-- INI BUAT MOBILE -->
          <div class="col-12 d-lg-none">
            <div class="row tempat__wisata">
              @foreach ($explorations as $eksplorasi)   
              <div class="col mb-5 hasilPilihan {{$eksplorasi->category->name}}" data-aos="zoom-in-up" id="searchResult1">
                <div class="card-deck">
                  <div class="card eksplorasi__card shadow">
                    <a href="/eksplorasi/{{$eksplorasi->slug}}"
                      ><img
                        class="card-img-top eksplorasi__gambar"
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
                        <p class="tempat__comment d-inline">24 Ulasan</p>
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
              <?php 
              $i = 1
              ?>
              @foreach ($explorations as $eksplorasi)    
              <div class="col-sm-4 mb-5 hasilPilihan {{$eksplorasi->category->name}}" data-aos="zoom-in-up" id="searchResult" data-filter="{{$eksplorasi->category->name}}">
                <div class="card-deck">
                  <div class="card shadow">
                    <a href="/eksplorasi/{{$eksplorasi->slug}}"
                      ><img
                        class="card-img-top eksplorasi__gambar"
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
                        <p class="tempat__comment d-inline"><?= $i++ ?> Ulasan</p>
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

    <!--===== REKOMENDASI SECTION =====-->
   @include('paradisely-layout.rekomendasi')

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   {{-- <script>
      $("select.pilihan").change(function(){
        var yahaha = $(this).children("option:selected").val();
        alert("You have selected the country - " + yahaha);
    });
   </script> --}}
   <script>
     $(document).ready(function(){
       $(".list").click(function(){
        //  const value = $(this).children("option:selected").val();
         const value = $(this).attr('data-filter');
         console.log(value)
         if(value == 'all'){
           $('.hasilPilihan').show('1000')
         } else {
           $('.hasilPilihan').not('.'+value).hide('1000')
           $('.hasilPilihan').filter('.'+value).show('1000')
         }
       })
     })
   </script>
   <script>
     $(document).ready(function(){
       $(".list1").click(function(){
        //  const value = $(this).children("option:selected").val();
         const value1 = $(this).attr('data-filter');
         console.log(value1)
         if(value == 'all1'){
           $('.hasilPilihan1').show('1000')
         } else {
           $('.hasilPilihan1').not('.'+value).hide('1000')
           $('.hasilPilihan1').filter('.'+value).show('1000')
         }
       })
     })
   </script>
@endsection