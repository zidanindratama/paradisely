@extends('template-dashboard.home')
@section('judul', 'Halaman Kontak')
@section('content')
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List Kontak</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($contacts as $result => $contact)
                                                <tr>
                                                    <th>{{$result + $contacts->firstitem()}}</th>
                                                    <td>{{$contact->email}}</td>
                                                    <td>{{$contact->nama}}</td>
                                                    <td>
                                                        <form action="/kontak/{{$contact->id}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="btn btn-primary btn-icon-text" href="/dashboard/kontak/{{$contact->id}}">Detail</a>
                                                            <button type="submit" class="btn btn-danger btn-icon-text">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="5">Tidak ada data</td>
                                                </tr>
                                                @endforelse
                                            </tbody>        
                                        </table>
                                        {{$contacts->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection