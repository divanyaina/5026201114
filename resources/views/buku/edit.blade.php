@extends('layout.ceria')

@section('title', 'Buku')

@section('isikonten')

@section('judulhalaman', 'Edit Data Buku')
    <a href="/buku" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	@foreach($buku as $b)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebuku }}">
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="merkbuku" class="col-md-2 col-sm-4 control-label">Merk Buku</label>
                <div class="col-md-3 col-sm-7" id="merkbuku">
                    <input type="text" class="form-control" name="merkbuku" required="required" value="{{ $b->merkbuku }}">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="stockbuku" class="col-md-2 col-sm-4 control-label">Stock Buku</label>
                <div class="col-md-3 col-sm-7" id="stockbuku">
                    <input type="number" class="form-control" name="stockbuku" required="required" value="{{ $b->stockbuku }}">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
                <div class="col-md-3 col-sm-7" id="tersedia">
                    <input type="radio" id="ada" name="tersedia" value="A" @if($b->tersedia === "A") checked="checked" @endif>
                    <label for="ada">Ada</label><br>
                    <input type="radio" id="tidak" name="tersedia" value="T" @if($b->tersedia === "T") checked="checked" @endif>
                    <label for="tidak">Tidak Ada</label><br>
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach
@endsection

