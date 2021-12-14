@extends('layout.ceria')

@section('title', 'Buku')

@section('isikonten')

@section('judulhalaman', 'Data Buku')

    <a href="/buku/tambah" class="btn btn-primary" > + Tambah Data Buku Baru</a>
    <br/>
    <br/>

    <p>Cari Data Buku :</p>
	<form action="/buku/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Berdasarkan Merk" value="{{ old('cari') }}">
        <button type="submit"><i class="fa fa-search"></i></button>
	</form>

    <br/>

    <table class="table table-success table-striped">
        <tr>
            <th>No</th>
			<th>Merk Buku</th>
			<th>Stock Buku</th>
            <th>Opsi</th>
		</tr>
        @foreach($buku as $b)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $b->merkbuku }}</td>
            <td>{{ $b->stockbuku }}</td>
			<td>
				<a href="/buku/detail/{{ $b->kodebuku }}" class="btn btn-info">View Details</a>
                |
                <a href="/buku/edit/{{ $b->kodebuku }}" class="btn btn-warning">Edit</a>
				|
				<a href="/buku/hapus/{{ $b->kodebuku }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
    </table>

    {{ $buku->links()  }}

@endsection
