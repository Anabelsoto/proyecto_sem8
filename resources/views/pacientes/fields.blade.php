<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Ape Nom:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-3">
    {!! Form::label('DNI', 'DNI:') !!}
    {!! Form::text('DNI', null, ['class' => 'form-control','maxlength' => 8,'maxlength' => 8]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-3">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control','maxlength' => 9,'maxlength' => 9]) !!}
</div>