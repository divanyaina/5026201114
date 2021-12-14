@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'Tambah Absen Pegawai')
    <a href="/absen" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="pegawai" class="col-md-2 col-sm-4 control-label">Pegawai</label>
                <div class="col-md-3 col-sm-7" id="pegawai">
                    <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="dtpickerdemo" class="col-md-2 col-sm-4 control-label">Tanggal</label>
                <div class="col-md-3 col-sm-7 input-group date" id="dtpickerdemo">
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br/>
            <div class="row mt-4">
                <label for="status" class="col-md-2 col-sm-4 control-label">Status</label>
                <div class="col-md-3 col-sm-7" id="status">
                    <input type="radio" id="hadir" name="status" value="H">
                    <label for="ada">Hadir</label><br>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                    <label for="tidak">Tidak Hadir</label><br>
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
