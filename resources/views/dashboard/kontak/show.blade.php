@extends('template-dashboard.home')
@section('judul', 'Detail Kontak')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Kontak</h4>
                                    <form class="forms-sample" action="" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama User</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$contact->nama}}" id="name" placeholder="Nama user" readonly>
                                                @error('name')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Email User</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$contact->email}}" id="email" placeholder="Email user" readonly>
                                                @error('email')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Pesan</label>
                                            <div class="col-sm-9">
                                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="" cols="30" rows="10" placeholder="masukkan pesan anda di sini!" readonly>{{$contact->pesan}}</textarea>
                                                {{-- @include('ckeditor') --}}
                                                @error('alamat')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <a href="/dashboard/kontak" class="btn btn-primary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection