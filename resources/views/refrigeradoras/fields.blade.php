<!-- Idmarcas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idmarcas', 'Marca:') !!}
    {!! Form::select('idmarcas', $tbmarcaItems, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Refridesc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refridesc', 'Descripcion:') !!}
    {!! Form::text('refridesc', null, ['class' => 'form-control']) !!}
</div>

<!-- Refricantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('refricantidad', 'Cantidad:') !!}
    {!! Form::text('refricantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Idubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idubicacion', 'Ubicacion:') !!}
    {!! Form::select('idubicacion', $tbubicacionItems, null, ['class' => 'form-control custom-select']) !!}
</div>
