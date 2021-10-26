<div class="table-responsive">
    <table class="table" id="bodegas-table">
        <thead>
            <tr>
                <th>Bodega</th>
                <th>Direccion</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bodegas as $bodegas)
            <tr>
                <td>{{ $bodegas->nombodega }}</td>
            <td>{{ $bodegas->direccion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bodegas.destroy', $bodegas->idbodega], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bodegas.show', [$bodegas->idbodega]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bodegas.edit', [$bodegas->idbodega]) }}" class='btn btn-default btn-xs'>
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
