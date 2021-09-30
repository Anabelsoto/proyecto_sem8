@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 alert alert-info">
                    <h1>Detalles de la Cita </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-secondary float-right"
                       href="{{ route('citas.index') }}">
                        Atrás
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('citas.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
