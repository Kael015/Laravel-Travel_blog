@extends('admin/dashboard')

@section('header')
Index   
@endsection

@section('content')
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>gambar</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artikel as $p)
                            <tr>
                                <td>{{ $p->judul_artikel }}</td>
                                <td>{{ $p->url }}</td>
                                <td>
                                    <a href="/blog/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection