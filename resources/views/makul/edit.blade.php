@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                <div class="card-body">
                
                    <form action="{{ route('update.makul', $makul->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>KD Makul</label>
                            <input type="text" name="kd_makul" class="form-control col-md-9" placeholder="Masukkan KD Makul" value="{{ is_null
                            ($makul) ? '' : $makul->kd_makul }}">
                        </div>

                        <div class="form-group">
                            <label>Nama Makul</label>
                            <input type="text" name="nama_makul" class="form-control col-md-9" placeholder="Masukkan Nama Makul" value="{{ is_null
                            ($makul) ? '' : $makul->nama_makul }}">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input type="text" name="sks" class="form-control col-md-9" placeholder="Masukkan SKS" value="{{ is_null
                            ($makul) ? '' : $makul->sks }}">
                        </div>


                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection