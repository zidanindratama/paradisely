@extends('template-dashboard.home')
@section('judul', 'Tambah Eksplporasi')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Eksplporasi</h4>
                                    <form class="forms-sample" action="/dashboard/eksplorasi" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Nama Tempat</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}" id="nama" placeholder="Nama tempat">
                                                @error('nama')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Tipe Tempat</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                  <select class="js-example-basic-single w-100" name="category_id" id="">
                                                      @foreach ($categories as $category)
                                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                                      @endforeach
                                                  </select>
                                                </div>
                                                @error('category_id')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Pulau</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                  <select class="form-control" name="pulau" id="">
                                                      <option value="Pulau Kalimantan">Pulau Kalimantan</option>
                                                      <option value="Pulau Maluku dan Papua">Pulau Maluku dan Papua</option>
                                                      <option value="Pulau Bali dan Nusa Tenggara">Pulau Bali dan Nusa Tenggara</option>
                                                      <option value="Pulau Sumatra">Pulau Sumatra</option>
                                                      <option value="Pulau Sulawesi">Pulau Sulawesi</option>
                                                      <option value="Pulau Jawa">Pulau Jawa</option>
                                                  </select>
                                                </div>
                                                @error('pulau')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        @include('template-dashboard.depen')
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!"></textarea>
                                                {{-- @include('ckeditor') --}}
                                                @error('deskripsi')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="gambar" class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                                </div>
                                                @error('gambar')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!"></textarea>
                                                {{-- @include('ckeditor') --}}
                                                @error('alamat')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-3 col-form-label">Latitude  : </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control latitude" name="latitude" id="lati" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lati" class="col-sm-3 col-form-label">Longitude  : </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control longitude" name="longitude" id="long" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <div id="map" style="width: `100%; height: 400px;"></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <a href="/dashboard/eksplorasi" class="btn btn-light">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection