@extends('layout.ceria')

@section('title', 'Karyawan1')

@section('isikonten')

@section('judulhalaman', 'Detail Data Karyawan1')
    <a href="/karyawan1" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>

    @foreach($karyawan1 as $k1)
    <form action="/karyawan1/update" method="post">
        {{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="NIP" class="col-md-2 col-sm-4 control-label">NIP</label>
                <div class="col-md-3 col-sm-7" id="NIP">
                    <label> {{ $k1->NIP }}</label>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-md-3 col-sm-7" id="Nama">
                    <label> {{ $k1->Nama }}</label>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Pangkat" class="col-md-2 col-sm-4 control-label">Pangkat</label>
                <div class="col-md-3 col-sm-7" id="Pangkat">
                    <label> {{ $k1->Pangkat }}</label>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Gaji" class="col-md-2 col-sm-4 control-label">Gaji</label>
                <div class="col-md-3 col-sm-7" id="Gaji">
                    <label>{{ number_format($k1->Gaji, 0, '.', ',') }}</label>
                </div>
            </div>
            <br/>
        </div>
    @endforeach
@endsection

