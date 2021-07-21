@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>
                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" class="form-control col-md-9" placeholder="Masukkan Nama Mahasiswa" value="{{ is_null
                            ($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa }}">
                        </div>

                        <div class="form-group">
                            <label>NPM</label>
                            <input type="number" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM" maxlength="8" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->npm }}">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Tempat Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Tanggal Lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                           <select name="gender" id="gender" class="form-control col-md-9" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->gender }}">
                                <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                <option value="L" {{ $mahasiswa->gender == 'L' ? 'selected' : '' }} >Laki-Laki</option>
                                <option value="P" {{ $mahasiswa->gender == 'P' ? 'selected' : '' }} >Perempuan</option>
                           </select>
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" name="telepon" class="form-control col-md-9" placeholder="Tambahkan No Telepon" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}">
                        </div>

                        <div class="form-group">
                           <label>Alamat</label>
                           <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control col-md-9" style="resize: none;">{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}</textarea>
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