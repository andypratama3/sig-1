<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $petani->nama }}</p>
</div>

<!-- Kontak Field -->
<div class="col-sm-12">
    {!! Form::label('kontak', 'Kontak:') !!}
    <p>{{ $petani->kontak }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $petani->alamat }}</p>
</div>

