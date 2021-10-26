<div class="table-responsive">
    <table class="table" id="computadoras-table">
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
        @foreach($computadoras as $computadoras)
            <tr>
                <td>{{ $computadoras->nommarca }}</td>
                <td>{{ $computadoras->compdescripcion }}</td>
                <td>{{ $computadoras->compcantidad }}</td>
                <td>{{ $computadoras->nomubicacion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['computadoras.destroy', $computadoras->idcomputadoras], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('computadoras.show', [$computadoras->idcomputadoras]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('computadoras.edit', [$computadoras->idcomputadoras]) }}" class='btn btn-default btn-xs'>
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
