@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Makul
                <a href="{{ route('tambah.makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>

                <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                            <th>No.</th>
                            <th>KD MAKUL</th>
                            <th>Nama Makul</th>
                            <th>SKS</th>
                            <th>AKSI</th>

                        </tr>

                        @foreach ($makul as $mkl)
                        <tr>
                            <td>{{ $mkl->id }}</td>
                            <td>{{ $mkl->kd_makul }}</td>
                            <td>{{ $mkl->nama_makul }}</td>
                            <td>{{ $mkl->sks }}</td>
                            <td>
                            <a href="{{ route('makul.edit', $mkl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('hapus.makul', $mkl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

