@extends('layout.ceria')

@section('title', 'Mutasi Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai Mutasi')

    <a href="/mutasi/tambah" class="btn btn-primary" > + Tambah Data Pegawai Mutasi Baru</a>

    <br/>
    <br/>

    <table class="table table-success table-striped">
        <tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
            <th>Opsi</th>
		</tr>
        @foreach($mutasi as $m)
		<tr>
			<td>{{ $m->IDPegawai }}</td>
            <td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
    </table>

@endsection
