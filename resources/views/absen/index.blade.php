@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'Data Absen Pegawai')

    <a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

    <br/>
    <br/>

    <p>Cari Data Absen :</p>
	<form action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Berdasarkan Nama" value="{{ old('cari') }}">
        <button type="submit"><i class="fa fa-search"></i></button>
	</form>

    <br/>

    <table class="table table-success table-striped">
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($absen as $a)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $a->pegawai_nama }}</td>
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->Status }}</td>
            <td>
                <a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" >Edit</a>
                |
                <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" >Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>

    {{ $absen->links() }}

@endsection
