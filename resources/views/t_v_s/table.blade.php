<div class="table-responsive">
    <table class="table" id="tVS-table">
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
        @foreach($tVS as $tV)
            <tr>
            <td>{{ $tV->nommarca }}</td>
            <td>{{ $tV->tvdescripcion }}</td>
            <td>{{ $tV->tvcantidad }}</td>
            <td>{{ $tV->nomubicacion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tVS.destroy', $tV->idtv], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tVS.show', [$tV->idtv]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tVS.edit', [$tV->idtv]) }}" class='btn btn-default btn-xs'>
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
