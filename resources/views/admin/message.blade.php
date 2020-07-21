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
                                <th>Topic</th>
                                <th>Isi</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($message as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->topic }}</td>
                                <td>{{ $p->isi_pesan }}</td>
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