@extends('layout.ceria')

@section('title', 'Karyawan1')

@section('isikonten')

@section('judulhalaman', 'Edit Data Karyawan1')

    <a href="/karyawan1" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>

	@foreach($karyawan1 as $k1)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="id" class="col-md-2 col-sm-4 control-label">NIP</label>
                <div class="col-md-3 col-sm-7" id="NIP">
                    <input type="text" class="form-control" name="id" required="required" value="{{ $k1->NIP }}">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Nama" class="col-md-2 col-sm-4 control-label">Nama</label>
                <div class="col-md-3 col-sm-7" id="Nama">
                    <input type="text" class="form-control" name="Nama" required="required" value="{{ $k1->Nama }}">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Pangkat" class="col-md-2 col-sm-4 control-label">Pangkat</label>
                <div class="col-md-3 col-sm-7" id="Pangkat">
                    <input type="text" class="form-control" name="Pangkat" required="required" value="{{ $k1->Pangkat }}">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="Gaji" class="col-md-2 col-sm-4 control-label">Gaji</label>
                <div class="col-md-3 col-sm-7" id="Gaji">
                    <input type="number" class="form-control" name="Gaji" required="required" value="{{ $k1->Gaji }}">
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach
@endsection

