<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai Mutasi</title>
</head>
<body>

	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $m->Departemen }}"> <br/>
        Sub Departemen <input type="text" required="required" name="subdepartemen" value="{{ $m->SubDepartemen }}"> <br/>
        Mulai Bertugas <input type="date" required="required" name="mulaibertugas" value="{{ $m->MulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
