<div class="table-responsive">
    <table class="table" id="pacientes-table">
        <thead>
            <tr>
                <th>Ape Nom</th>
        <th>DNI</th>
        <th>Celular</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->ape_nom }}</td>
            <td>{{ $paciente->DNI }}</td>
            <td>{{ $paciente->celular }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pacientes.destroy', $paciente->idpaciente], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pacientes.show', [$paciente->idpaciente]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pacientes.edit', [$paciente->idpaciente]) }}" class='btn btn-default btn-xs'>
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
