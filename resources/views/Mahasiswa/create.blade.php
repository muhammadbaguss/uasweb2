@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                <div class="card-body">
                
                    <form action="{{route('simpan.mahasiswa')}}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" class="form-control col-md-9" placeholder="Masukkan Nama Mahasiswa">
                        </div>
                        
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="number" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM" maxlength="8">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Tempat Lahir">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Tanggal Lahir">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                           <select name="gender" id="gender" class="form-control col-md-9">
                                <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                           </select>
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" name="telepon" class="form-control col-md-9" placeholder="Tambahkan No Telepon">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                           <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control col-md-9" style="resize: none;"></textarea>
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