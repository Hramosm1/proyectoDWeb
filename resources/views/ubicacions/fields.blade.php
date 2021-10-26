<!-- Nomubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomubicacion', 'Nombre:') !!}
    {!! Form::text('nomubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Idbodega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idbodega', 'Bodega:') !!}
    {!! Form::select('idbodega', $tbbodegaItems, null, ['class' => 'form-control custom-select']) !!}
</div>
