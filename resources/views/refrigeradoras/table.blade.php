<div class="table-responsive">
    <table class="table" id="refrigeradoras-table">
        <thead>
            <tr>
                <th>Marca</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Ubicacion</th> 
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refrigeradoras as $refrigeradoras)
            <tr>
                <td>{{ $refrigeradoras->nommarca }}</td>
            <td>{{ $refrigeradoras->refridesc }}</td>
            <td>{{ $refrigeradoras->refricantidad }}</td>
            <td>{{ $refrigeradoras->nomubicacion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['refrigeradoras.destroy', $refrigeradoras->idrefrigeradora], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('refrigeradoras.show', [$refrigeradoras->idrefrigeradora]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('refrigeradoras.edit', [$refrigeradoras->idrefrigeradora]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
