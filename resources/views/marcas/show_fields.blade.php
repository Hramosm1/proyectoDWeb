<!-- Nommarca Field -->
<div class="col-sm-12">
    {!! Form::label('nommarca', 'Nombre:') !!}
    <p>{{ $marcas->nommarca }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{{ $marcas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha Actualizacion:') !!}
    <p>{{ $marcas->updated_at }}</p>
</div>

