@extends('layout.ceria')

@section('title', 'Buku')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Buku')
    <a href="/buku" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	<form action="/buku/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="merkbuku" class="col-md-2 col-sm-4 control-label">Merk Buku</label>
                <div class="col-md-3 col-sm-7" id="merkbuku">
                    <input type="text" class="form-control" name="merkbuku" required="required">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="stockbuku" class="col-md-2 col-sm-4 control-label">Stock Buku</label>
                <div class="col-md-3 col-sm-7" id="stockbuku">
                    <input type="number" class="form-control" name="stockbuku" required="required">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="tersedia" class="col-md-2 col-sm-4 control-label">Tersedia</label>
                <div class="col-md-3 col-sm-7" id="tersedia">
                    <input type="radio" id="ada" name="tersedia" value="A">
                    <label for="ada">Ada</label><br>
                    <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                    <label for="tidak">Tidak Ada</label><br>
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection

