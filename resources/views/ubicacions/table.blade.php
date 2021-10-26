<div class="table-responsive">
    <table class="table" id="ubicacions-table">
        <thead>
            <tr>
                <th>Ubicacion</th>
                <th>Bodega</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ubicacions as $ubicacion)
            <tr>
                <td>{{ $ubicacion->nomubicacion }}</td>
            <td>{{ $ubicacion->nombodega }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ubicacions.destroy', $ubicacion->idubicacion], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ubicacions.show', [$ubicacion->idubicacion]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ubicacions.edit', [$ubicacion->idubicacion]) }}" class='btn btn-default btn-xs'>
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
