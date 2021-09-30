@extends('layouts.app')
@section('content' )
    <section class="content-header " style="background:#D6DBDF">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 alert alert-info">
                    <h1>Cita Detalles</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('citaDetalles.create') }}">
                        Agregar Nuevo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3" >

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card" >
            <div class="card-body p-0">
                @include('cita_detalles.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

