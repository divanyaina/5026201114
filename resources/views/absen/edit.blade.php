@extends('layout.ceria')

@section('title', 'Absen Pegawai')

@section('isikonten')

@section('judulhalaman', 'Edit Absen Pegawai')
    <a href="/absen" class="btn btn-primary"> Kembali</a>
    <br/>
    <br/>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        <div class="container mt-4">
            <div class="row mt-4">
                <label for="pegawai" class="col-md-2 col-sm-4 control-label">Pegawai</label>
                <div class="col-md-3 col-sm-7" id="pegawai">
                    <select id="IDPegawai" class="form-control" name="IDPegawai" required="required">
                    @foreach($pegawai as $peg)
                        <option value="{{ $peg->pegawai_id }}" @if($peg->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <br/>
            <div class="row mt-4">
                <label for="dtpickerdemo" class="col-md-2 col-sm-4 control-label">Tanggal</label>
                <div class="col-md-3 col-sm-7 input-group date" id="dtpickerdemo">
                    <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}"/>
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
                    <input type="radio" id="hadir" name="status" value="H" @if($a->Status === "H") checked="checked" @endif>
                    <label for="ada">Hadir</label><br>
                    <input type="radio" id="tidak" name="status" value="T" @if($a->Status === "T") checked="checked" @endif>
                    <label for="tidak">Tidak Hadir</label><br>
                </div>
            </div>
            <br/>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach

@endsection
