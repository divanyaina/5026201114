@extends('layout.ceria')

@section('title', 'Mutasi Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Mutasi Pegawai')

    <a href="/mutasi/tambah" class="btn btn-primary" > + Tambah Data Pegawai Mutasi</a>

    <br/>
    <br/>

    <p>Cari Data Mutasi :</p>
	<form action="/mutasi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Berdasarkan Nama" value="{{ old('cari') }}">
        <button type="submit"><i class="fa fa-search"></i></button>
	</form>

    <br>

    <table class="table table-success table-striped">
        <tr>
            <th>No</th>
			<th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
            <th>Opsi</th>
		</tr>
        @foreach($mutasi as $m)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->pegawai_nama }}</td>
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

    {{ $mutasi->links()  }}

@endsection
