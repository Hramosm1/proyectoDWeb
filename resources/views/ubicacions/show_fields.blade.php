<!-- Nomubicacion Field -->
<div class="col-sm-12">
    {!! Form::label('nomubicacion', 'Ubicacion:') !!}
    <p>{{ $ubicacion->nomubicacion }}</p>
</div>

<!-- Idbodega Field -->
<div class="col-sm-12">
    {!! Form::label('nombodega', 'Bodega:') !!}
    <p>{{ $ubicacion->nombodega }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha de creacion:') !!}
    <p>{{ $ubicacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha de Actualizacion:') !!}
    <p>{{ $ubicacion->updated_at }}</p>
</div>

