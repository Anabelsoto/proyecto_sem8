<!-- Ape Nom Field -->
<div class="form-group col-sm-5">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-3">
    {!! Form::label('DNI', 'Dni:') !!}
    {!! Form::text('DNI', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-4">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 145,'maxlength' => 145]) !!}
</div>