@extends('layout.ceria')

@section('title', 'Karyawan1')

@section('isikonten')

@section('judulhalaman', 'Data Karyawan1')

    <br/>

    <table class="table table-success table-striped">
        <tr>
            <th>No</th>
			<th>NIP</th>
			<th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
		</tr>
        @foreach($karyawan1 as $k1)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $k1->NIP }}</td>
            <td>{{ $k1->Nama }}</td>
            <td>{{ $k1->Pangkat }}</td>
            <td>
                {{ number_format($k1->Gaji, 0, '.', ',') }}
            </td>
			<td>
				<a href="/karyawan1/detail/{{ $k1->NIP }}" class="btn btn-info">View Details</a>
                |
                <a href="/karyawan1/edit/{{ $k1->NIP }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
    </table>

@endsection
