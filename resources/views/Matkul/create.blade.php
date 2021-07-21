@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Matkul</div>

                <div class="card-body">
                    <form action="{{ route('simpan.matkul') }}" method="POST">
                        @csrf
                            
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">ID</label>
                                    <input type="text" name="id" class="form-controll" placeholder="Tambahkan Id ">
                                </div>
                                <div class="col">
                                    <label for="">Kode Matkul</label>
                                    <input type="text" name="kd_matkul" class="form-controll" placeholder="Tambahkan Kode Matkul ">
                                </div>
                                <div class="col">
                                    <label for="">Nama Matkul</label>
                                    <input type="text" name="nama_matkul" class="form-controll" placeholder="Tambahkan Nama Matkul ">
                                </div>
                                <div class="col">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-controll" placeholder="Tambahkan SKS ">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row fload-right">
                                <div class="col">
                                   <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                   <a href="{{ route('matkul') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                                    
                                
                                   </div>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
