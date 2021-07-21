@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Matkul
                    <a href="{{ route('tambah.matkul') }}" class="btn btn-success btn-md fload-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    

                   <div class="table-responsive">
                       <table class="table bordered">
                           <tr>
                               <th>ID</th>
                               <th>KD MATKUL</th>
                               <th>NAMA MATKUL</th>
                               <th>SKS</th>
                               <th>AKSI</th>
                           </tr>
                           @foreach ($matkul as $m)
                           <tr>
                                <td>{{ $m->id }}</td>
                                <td><?php echo $m->kd_matkul ?></td>
                                <td><?php echo $m->nama_matkul ?></td>
                                <td><?php echo $m->sks ?></td>
                                <td>
                                    <a href="{{ route('edit.matkul', $m->id) }}" class="btn btn-xs btn-primary">EDIT</a>
                                    <a href="{{ route('hapus.matkul', $m->id) }}" class="btn btn-xs btn-primary">HAPUS</a>
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
