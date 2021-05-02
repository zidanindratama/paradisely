@extends('template-dashboard.home')
@section('judul', 'Halaman Eksplorasi')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Eksplorasi</h4>
                                    <a href="/mitra/eksplorasi/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah Eksplorasi
                                    </a>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Dibuat Oleh</th>
                                                    <th>Nama</th>
                                                    <th>Slug</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($explorations as $result => $eksplorasi)
                                                <tr>
                                                    <th>{{$result + $explorations->firstitem()}}</th>
                                                    <td>{{$eksplorasi->user->name}}</td>
                                                    <td>{{$eksplorasi->nama}}</td>
                                                    <td>{{$eksplorasi->slug}}</td>
                                                    <td><img src="{{ asset( $eksplorasi->gambar ) }}" alt="" style="width: 100px !important;"></td>
                                                    <td>
                                                        <form action="/mitra/eksplorasi/{{$eksplorasi->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="/eksplorasi">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/mitra/eksplorasi/{{$eksplorasi->id}}/edit">Ubah</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$explorations->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection