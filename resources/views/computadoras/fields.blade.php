<!-- Idmarca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmarcas', 'Marca:') !!}
    {!! Form::select('idmarcas', $tbmarcaItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compdescripcion', 'Descripcion:') !!}
    {!! Form::text('compdescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compcantidad', 'Cantidad:') !!}
    {!! Form::text('compcantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Idubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idubicacion', 'Ubicacion:') !!}
    {!! Form::select('idubicacion', $tbubicacionItems, null, ['class' => 'form-control custom-select']) !!}
</div>
