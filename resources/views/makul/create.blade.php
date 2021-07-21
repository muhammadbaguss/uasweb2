@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mata Kuliah</div>
                <div class="card-body">
                
                    <form action="{{ route('simpan.makul') }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>KD Makul</label>
                            <input type="text" name="kd_makul" class="form-control col-md-9" placeholder="Masukkan Kd Makul">
                        </div>

                        <div class="form-group">
                            <label>Nama Makul</label>
                            <input type="text" name="nama_makul" class="form-control col-md-9" placeholder="Masukkan Nama Makul">
                        </div>

                        <div class="form-group">
                            <label>SKS</label>
                            <input type="text" name="sks" class="form-control col-md-9" placeholder="Masukkan SKS">
                        </div>

                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('makul') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection