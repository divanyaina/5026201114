@extends('layout.ceria')

@section('title', 'Mutasi Pegawai')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Pegawai Mutasi')
    <a href="/mutasi" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="pegawai" class="col-md-2 col-sm-4 control-label">Pegawai</label>
                <div class="col-md-3 col-sm-7" id="pegawai">
                    <select id="idpegawai" class="form-control" name="idpegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="departemen" class="col-md-2 col-sm-4 control-label">Departemen</label>
                <div class="col-md-3 col-sm-7" id="departemen">
                    <input type="text" class="form-control" name="departemen" required="required">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="subdepartemen" class="col-md-2 col-sm-4 control-label">Sub Departemen</label>
                <div class="col-md-3 col-sm-7" id="subdepartemen">
                    <input type="text" class="form-control" name="subdepartemen" required="required">
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="mulaibertugas" class="col-md-2 col-sm-4 control-label">Mulai Bertugas</label>
                <div class="col-md-3 col-sm-7" id="mulaibertugas">
                    <input type="date" class="form-control" name="mulaibertugas" required="required">
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection

