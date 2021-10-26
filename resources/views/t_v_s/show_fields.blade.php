<!-- Idmarcas Field -->
<div class="col-sm-12">
    {!! Form::label('nommarca', 'Marca:') !!}
    <p>{{ $tV->nommarca }}</p>
</div>

<!-- Tvdescripcion Field -->
<div class="col-sm-12">
    {!! Form::label('tvdescripcion', 'Descripcion:') !!}
    <p>{{ $tV->tvdescripcion }}</p>
</div>

<!-- Tvcantidad Field -->
<div class="col-sm-12">
    {!! Form::label('tvcantidad', 'Cantida:') !!}
    <p>{{ $tV->tvcantidad }}</p>
</div>

<!-- Idubicacion Field -->
<div class="col-sm-12">
    {!! Form::label('nomubicacion', 'Ubicacion:') !!}
    <p>{{ $tV->nomubicacion }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha Creacion:') !!}
    <p>{{ $tV->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha Actualizacion:') !!}
    <p>{{ $tV->updated_at }}</p>
</div>

