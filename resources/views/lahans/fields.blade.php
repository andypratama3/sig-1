<!-- Provinsi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provinsi_id', 'Provinsi :') !!}
    {!! Form::text('provinsi_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kabupaten Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kabupaten_id', 'Kabupaten :') !!}
    {!! Form::text('kabupaten_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kecamatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kecamatan_id', 'Kecamatan :') !!}
    {!! Form::text('kecamatan_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Desa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa_id', 'Desa :') !!}
    {!! Form::text('desa_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanaman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanaman', 'Tanaman :') !!}
    {!! Form::text('tanaman', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Penanaman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_penanaman', 'Tanggal Penanaman :') !!}
    {!! Form::text('tanggal_penanaman', null, ['class' => 'form-control','id'=>'tanggal_penanaman']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_penanaman').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tanggal Panen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_panen', 'Tanggal Panen :') !!}
    {!! Form::text('tanggal_panen', null, ['class' => 'form-control','id'=>'tanggal_panen']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_panen').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude :') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude :') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Luas Lahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luas_lahan', 'Luas Lahan :') !!}
    {!! Form::text('luas_lahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Petani Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petani_id', 'Petani :') !!}
    {!! Form::select('petani_id', $petanis, null, ['class' => 'form-control', 'id' => 'petani_id', 'placeholder' => 'Pilih Petani']) !!}
</div>

<!-- Jenis Tanaman Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tanaman_id', 'Jenis Tanaman :') !!}
    {!! Form::select('jenis_tanaman_id', $jenisTanaman, null, ['class' => 'form-control select2', 'id' => 'jenis_tanaman_id', 'placeholder' => 'Pilih Jenis Tanaman']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status :') !!}
    {!! Form::select('status', ['baru_penanaman' => 'Baru Penanaman', 'siap_panen' => 'Siap Panen', 'panen' => 'Panen'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Status']) !!}
</div>


