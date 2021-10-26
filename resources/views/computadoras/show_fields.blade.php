<!-- Idmarca Field -->
<div class="col-sm-12">
    {!! Form::label('nommarca', 'Marca:') !!}
    <p>{{ $computadoras->nommarca }}</p>
</div>

<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('compdescripcion', 'Descripcion:') !!}
    <p>{{ $computadoras->compdescripcion }}</p>
</div>

<!-- Cantidad Field -->
<div class="col-sm-12">
    {!! Form::label('compcantidad', 'Cantidad:') !!}
    <p>{{ $computadoras->compcantidad }}</p>
</div>

<!-- Idubicacion Field -->
<div class="col-sm-12">
    {!! Form::label('nomubicacion', 'Ubicacion:') !!}
    <p>{{ $computadoras->nomubicacion }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{{ $computadoras->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha Actualizacion:') !!}
    <p>{{ $computadoras->updated_at }}</p>
</div>

