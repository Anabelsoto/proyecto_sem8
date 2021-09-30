@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 alert alert-info">
                    <h1>Editar Datos del Doctor</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($doctor, ['route' => ['doctors.update', $doctor->iddoctor], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('doctors.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('doctors.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
