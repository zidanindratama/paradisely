@extends('template-dashboard.home')
@section('judul', 'Halaman Virtual')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Virtual</h4>
                                    <a href="/dashboard/virtual/create" class="btn btn-info btn-icon-text mb-4">
                                        <i class="ti-write btn-icon-prepend"></i>
                                        Tambah Virtual
                                    </a>
                                    <div class="table-responsive" style="">
                                        <table class="table" style="">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Virtual</th>
                                                    <th>Slug</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($virtuals as $result => $virtual)
                                                <tr>
                                                    <th>{{$result + $virtuals->firstitem()}}</th>
                                                    <td>{{$virtual->nama}}</td>
                                                    <td>{{$virtual->slug}}</td>
                                                    <td><img src="{{ asset( $virtual->gambar ) }}" alt="" style="width: 100px !important;"></td>
                                                    <td>
                                                        <form action="/dashboard/virtual/{{$virtual->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="/virtual/{{$virtual->slug}}">Detail</a>
                                                            <a class="btn btn-warning btn-icon-text" href="/dashboard/virtual/{{$virtual->id}}/edit">Ubah</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$virtuals->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection