@extends('layout.ceria')

@section('title', 'Pegawai')

@section('isikonten')

@section('judulhalaman', 'Detail Data Pegawai')
    <a href="/pegawai" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	@foreach($pegawai as $p)
    <div class="container mt-4">
        <div class="row mt-4">
            <label for="nama" class="col-md-2 col-sm-4 control-label">Nama</label>
            <div class="col-md-3 col-sm-7" id="nama">
                <label> {{ $p->pegawai_nama }}</label>
            </div>
        </div>
        <br/>
        <div class="row mt-4">
            <label for="jabatan" class="col-md-2 col-sm-4 control-label">Jabatan</label>
            <div class="col-md-3 col-sm-7" id="nama">
                <label> {{ $p->pegawai_jabatan }}</label>
            </div>
        </div>
        <br/>
        <div class="row mt-4">
            <label for="umur" class="col-md-2 col-sm-4 control-label">Umur</label>
            <div class="col-md-3 col-sm-7" id="nama">
                <label> {{ $p->pegawai_umur }}</label> <br/>
            </div>
        </div>
        <br/>
        <div class="row mt-4">
            <label for="alamat" class="col-md-2 col-sm-4 control-label">Alamat</label>
            <div class="col-md-3 col-sm-7" id="nama">
                <label>{{ $p->pegawai_alamat }}</label>
            </div>
        </div>
        <br/>
    </div>
	@endforeach
@endsection
