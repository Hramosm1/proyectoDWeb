<!-- Nombodega Field -->
<div class="col-sm-12">
    {!! Form::label('nombodega', 'Nombre:') !!}
    <p>{{ $bodegas->nombodega }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $bodegas->direccion }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Fecha creacion:') !!}
    <p>{{ $bodegas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Fecha Actualizacion:') !!}
    <p>{{ $bodegas->updated_at }}</p>
</div>

