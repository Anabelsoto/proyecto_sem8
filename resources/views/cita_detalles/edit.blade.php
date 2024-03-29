@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 alert alert-info">
                    <h1>Editar Cita Detalle</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($citaDetalle, ['route' => ['citaDetalles.update', $citaDetalle->idcita_detalle], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('cita_detalles.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('citaDetalles.index') }}" class="btn btn-danger">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
