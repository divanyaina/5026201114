@extends('layout.ceria')

@section('title', 'Mutasi Pegawai')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Pegawai Mutasi')
    <a href="/mutasi"> Kembali</a>
	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="departemen" required="required"> <br/>
        Sub Departemen <input type="text" name="subdepartemen" required="required"> <br/>
		Mulai Bertugas <input type="date" name="mulaibertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection

