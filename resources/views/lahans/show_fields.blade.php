<!-- Provinsi Id Field -->
<div class="col-sm-12">
    {!! Form::label('provinsi_id', 'Provinsi Id:') !!}
    <p>{{ $lahan->provinsi_id }}</p>
</div>

<!-- Kabupaten Id Field -->
<div class="col-sm-12">
    {!! Form::label('kabupaten_id', 'Kabupaten Id:') !!}
    <p>{{ $lahan->kabupaten_id }}</p>
</div>

<!-- Kecamatan Id Field -->
<div class="col-sm-12">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    <p>{{ $lahan->kecamatan_id }}</p>
</div>

<!-- Desa Id Field -->
<div class="col-sm-12">
    {!! Form::label('desa_id', 'Desa Id:') !!}
    <p>{{ $lahan->desa_id }}</p>
</div>

<!-- Tanaman Field -->
<div class="col-sm-12">
    {!! Form::label('tanaman', 'Tanaman:') !!}
    <p>{{ $lahan->tanaman }}</p>
</div>

<!-- Tanggal Penanaman Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_penanaman', 'Tanggal Penanaman:') !!}
    <p>{{ $lahan->tanggal_penanaman }}</p>
</div>

<!-- Tanggal Panen Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_panen', 'Tanggal Panen:') !!}
    <p>{{ $lahan->tanggal_panen }}</p>
</div>

<!-- Latitude Field -->
<div class="col-sm-12">
    {!! Form::label('latitude', 'Latitude:') !!}
    <p>{{ $lahan->latitude }}</p>
</div>

<!-- Longitude Field -->
<div class="col-sm-12">
    {!! Form::label('longitude', 'Longitude:') !!}
    <p>{{ $lahan->longitude }}</p>
</div>

<!-- Luas Lahan Field -->
<div class="col-sm-12">
    {!! Form::label('luas_lahan', 'Luas Lahan:') !!}
    <p>{{ $lahan->luas_lahan }}</p>
</div>

<!-- Petani Id Field -->
<div class="col-sm-12">
    {!! Form::label('petani_id', 'Petani Id:') !!}
    <p>{{ $lahan->petani_id }}</p>
</div>

<!-- Jenis Tanaman Id Field -->
<div class="col-sm-12">
    {!! Form::label('jenis_tanaman_id', 'Jenis Tanaman Id:') !!}
    <p>{{ $lahan->jenisTanaman->nama }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $lahan->status }}</p>
</div>

