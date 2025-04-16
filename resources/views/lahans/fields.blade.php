<!-- Desa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desa', 'Desa:') !!}
    {!! Form::text('desa', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanaman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanaman', 'Tanaman:') !!}
    {!! Form::text('tanaman', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tanggal Penanaman Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_penanaman', 'Tanggal Penanaman:') !!}
    {!! Form::text('tanggal_penanaman', null, ['class' => 'form-control','id'=>'tanggal_penanaman']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_penanaman').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Tanggal Panen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_panen', 'Tanggal Panen:') !!}
    {!! Form::text('tanggal_panen', null, ['class' => 'form-control','id'=>'tanggal_panen']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tanggal_panen').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::number('latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::number('longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Luas Lahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luas_lahan', 'Luas Lahan:') !!}
    {!! Form::number('luas_lahan', null, ['class' => 'form-control']) !!}
</div>

<!-- Petani Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('petani_id', 'Petani Id:') !!}
    {!! Form::number('petani_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Tanaman Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_tanaman_id', 'Jenis Tanaman Id:') !!}
    {!! Form::number('jenis_tanaman_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>