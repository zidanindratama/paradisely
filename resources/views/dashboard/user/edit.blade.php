@extends('template-dashboard.home')
@section('judul', 'Edit User')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit User</h4>
                                    <div class="py-5 d-flex justify-content-center">
                                        @if($user->gambar == null) 
                                            <img src="{{asset('skydash/images/faces/default.jpg')}}" alt="" class="img-fluid rounded" style="width: 500px !important;">
                                        @else
                                            <img src="/{{$user->gambar}}" alt="" class="img-fluid" class="img-fluid rounded" style="width: 500px !important;">
                                        @endif
                                    </div>
                                    <form class="forms-sample" action="/dashboard/user/{{$user->id}}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama User</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" id="name" placeholder="Nama user">
                                                @error('name')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3 col-form-label">Email User</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" id="email" placeholder="Email user" readonly>
                                                @error('email')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input type="hidden" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->password}}" id="email" placeholder="Email user" readonly>
                                                @error('email')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-sm-3 col-form-label">Role User</label>
                                            <div class="col-sm-9">
                                                <select name="role" class="js-example-basic-single w-100 @error('role') is-invalid @enderror">
                                                    <option value="Administrator" {{ $user->role == 'Administrator' ? 'selected' : '' }}>Administrator</option>
                                                    <option value="Pengunjung" {{ $user->role == 'Pengunjung' ? 'selected' : '' }}>Pengunjung</option>
                                                </select>
                                                @error('role')
                                                    <span class="invalid-feedback">Masukkan data yang benar!</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <a href="/dashboard/user" class="btn btn-light">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection