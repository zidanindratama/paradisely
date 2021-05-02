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
              <div class="col mb-5" data-aos="zoom-in-up" id="searchResult1">
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
              var searchResultAjax='';
              data = JSON.parse(data);
              console.log(data);
              $('#searchResult').show('');
              for(let i=0;i<data.length;i++){
                searchResultAjax +=`<div class="card-deck">
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
                </div>`
              }
              $('#searchResult').html(searchResultAjax);

            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
          });
        }
      });
    </script>
     <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#inputSearch1').on('keyup', function(){
        $inputSearch1 = $(this).val();
        if($inputSearch1 == ''){
          $('#searchResult1').html('');
          $('#searchResult1').hide('');
        } else {
          $.ajax({
            method:"post",
            url:"eksplorasi1",
            data:JSON.stringify({
              inputSearch1:$inputSearch1
            }),
            headers:{
              'Accept':'application/json',
              'Content-Type':'application/json'
            },
            success:function(data){
              var searchResultAjax1='';
              data = JSON.parse(data);
              console.log(data);
              $('#searchResult').show('');
              for(let i=0;i<data.length;i++){
                searchResultAjax1 +=`<div class="card-deck">
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
                </div>`
              }
              $('#searchResult1').html(searchResultAjax1);

            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
          });
        }
      });
    </script>
@endsection