@extends('template-dashboard.home')
@section('judul', 'Ubah Eksplporasi')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ubah Eksplporasi</h4>
                                    <form class="forms-sample" action="/dashboard/eksplorasi/{{$eksplorasi->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Nama Tempat</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$eksplorasi->nama}}" id="nama" placeholder="Nama tempat">
                                                @error('nama')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="category_id" class="col-sm-3 col-form-label">Tipe Tempat</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                  <select class="js-example-basic-single w-100 @error('category_id') is-invalid @enderror" name="category_id">
                                                    @foreach($categories as $result)
                                                    <option value="{{ $result->id }}"
                                                    @if($result->id == $eksplorasi->category_id)
                                                        selected
                                                    @endif
                                                        >{{  $result->name }}</option>
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
                                                  <select class="js-example-basic-single w-100 @error('role') is-invalid @enderror" name="pulau" id="">
                                                      <option value="Pulau Kalimantan" {{ $eksplorasi->pulau == 'Pulau Kalimantan' ? 'selected' : '' }}>Pulau Kalimantan</option>
                                                      <option value="Pulau Maluku dan Papua" {{ $eksplorasi->pulau == 'Pulau Maluku dan Papua' ? 'selected' : '' }}>Pulau Maluku dan Papua</option>
                                                      <option value="Pulau Bali dan Nusa Tenggara" {{ $eksplorasi->pulau == 'Pulau Bali dan Nusa Tenggara' ? 'selected' : '' }}>Pulau Bali dan Nusa Tenggara</option>
                                                      <option value="Pulau Sumatra" {{ $eksplorasi->pulau == 'Pulau Sumatra' ? 'selected' : '' }}>Pulau Sumatra</option>
                                                      <option value="Pulau Sulawesi" {{ $eksplorasi->pulau == 'Pulau Sulawesi' ? 'selected' : '' }}>Pulau Sulawesi</option>
                                                      <option value="Pulau Jawa" {{ $eksplorasi->pulau == 'Pulau Jawa' ? 'selected' : '' }}>Pulau Jawa</option>
                                                  </select>
                                                </div>
                                                @error('pulau')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        @include('template-dashboard.depen-edit')
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!">{{$eksplorasi->deskripsi}}</textarea>
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
                                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!">{{$eksplorasi->alamat}}</textarea>
                                                {{-- @include('ckeditor') --}}
                                                @error('alamat')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-3 col-form-label">Latitude  : </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control latitude" name="latitude" id="lati" value="{{$eksplorasi->latitude}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lati" class="col-sm-3 col-form-label">Longitude  : </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control longitude" name="longitude" id="long" value="{{$eksplorasi->longitude}}">
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