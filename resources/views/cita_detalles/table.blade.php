<div class="table-responsive">
    <table class="table" id="citaDetalles-table">
        <thead>
            <tr>
                <th>Idcita</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($citaDetalles as $citaDetalle)
            <tr>
                <td>{{ $citaDetalle->idcita }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['citaDetalles.destroy', $citaDetalle->idcita_detalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('citaDetalles.show', [$citaDetalle->idcita_detalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('citaDetalles.edit', [$citaDetalle->idcita_detalle]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿estás seguro de que quieres Eliminar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
