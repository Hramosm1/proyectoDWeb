<!-- Idmarcas Field -->
<div class="col-sm-12">
    {!! Form::label('nommarca', 'Marca:') !!}
    <p>{{ $refrigeradoras->nommarca }}</p>
</div>

<!-- Refridesc Field -->
<div class="col-sm-12">
    {!! Form::label('refridesc', 'Descripcion:') !!}
    <p>{{ $refrigeradoras->refridesc }}</p>
</div>

<!-- Refricantidad Field -->
<div class="col-sm-12">
    {!! Form::label('refricantidad', 'Cantidad:') !!}
    <p>{{ $refrigeradoras->refricantidad }}</p>
</div>

<!-- Idubicacion Field -->
<div class="col-sm-12">
    {!! Form::label('nomubicacion', 'Ubicacion:') !!}
    <p>{{ $refrigeradoras->nomubicacion }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{{ $refrigeradoras->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha actualizacion:') !!}
    <p>{{ $refrigeradoras->updated_at }}</p>
</div>

