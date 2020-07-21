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
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $p)
                            <tr>
                                <td>{{ $p->id_user }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
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