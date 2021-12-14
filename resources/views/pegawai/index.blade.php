@extends('layout.ceria')

@section('title', 'Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

    <a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>
    <br/>
    <br/>

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Berdasarkan Nama" value="{{ old('cari') }}">
        <button type="submit"><i class="fa fa-search"></i></button>
	</form>

    <br/>

    <table class="table table-success table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Opsi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-info btn-sm">View Details</a>
                |
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $pegawai->links()  }}

@endsection
