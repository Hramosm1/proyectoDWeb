<!-- Idmarcas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmarcas', 'Marca:') !!}
    {!! Form::select('idmarcas', $tbmarcaItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Tvdescripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tvdescripcion', 'Descripcion:') !!}
    {!! Form::text('tvdescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tvcantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tvcantidad', 'Cantidad:') !!}
    {!! Form::text('tvcantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Idubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idubicacion', 'Ubicacion:') !!}
    {!! Form::select('idubicacion', $tbubicacionItems, null, ['class' => 'form-control custom-select']) !!}
</div>
