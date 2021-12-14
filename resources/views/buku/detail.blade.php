@extends('layout.ceria')

@section('title', 'Buku')

@section('isikonten')

@section('judulhalaman', 'Detail Data Buku')
    <a href="/buku" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	@foreach($buku as $b)
    <div class="container mt-4">
        <div class="row mt-4">
            <label for="merkbuku" class="col-md-2 col-sm-4 control-label">Merk Buku</label>
            <div class="col-md-3 col-sm-7" id="merkbuku">
               <label>{{ $b->merkbuku }}</label>
            </div>
        </div>
        <br/>
        <div class="row mt-4">
            <label for="stockbuku" class="col-md-2 col-sm-4 control-label">Stock Buku</label>
            <div class="col-md-3 col-sm-7" id="stockbuku">
                <label>{{ $b->stockbuku }}</label>
            </div>
        </div>
        <br/>
        <div class="row mt-4">
            <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
            <div class="col-md-3 col-sm-7" id="tersedia">
                <label>{{$b->tersedia}}</label>
            </div>
        </div>
        <br/>
    </div>
	@endforeach
@endsection

