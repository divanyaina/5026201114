@extends('layout.ceria')

@section('title', 'Pegawai')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Pegawai')
    <a href="/pegawai" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="container mt-4">
            <div class="row mt-4">
                <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-md-3 col-sm-7" id="nama">
                    <input type="text" class="form-control" required="required" name="nama">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="jabatan" class="col-md-2 col-sm-4 control-label">Jabatan</label>
                <div class="col-md-3 col-sm-7" id="jabatan">
                    <input type="text" class="form-control" required="required" name="jabatan">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="umur" class="col-md-2 col-sm-4 control-label">Umur</label>
                <div class="col-md-3 col-sm-7" id="umur">
                    <input type="number" class="form-control" required="required" name="umur">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="alamat" class="col-md-2 col-sm-4 control-label">Alamat</label>
                <div class="col-md-3 col-sm-7" id="alamat">
                    <textarea class="form-control" required="required" name="alamat"></textarea>
                </div>
            </div>
            <br/>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
