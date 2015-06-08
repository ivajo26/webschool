@extends('layouts.page')

@section('title')
  Nueva Asignatura
@endsection

@section('contenedor')
<div class="row form-users">
  <div class="container">
    {!! Form::open(['route' => 'admin.asignatura.store', 'method' => 'POST']) !!}
      {!! Form::token() !!}
      <div class="col-md-6">{!! Form::text('nombre',null, ['placeholder' => 'Nombre de Asignatura', 'class' => 'form-control']) !!}</div>
      <div class="col-md-6">{!! Form::submit('Nueva Asignatura' ,['class' => 'btn btn-default btn-block']) !!}</div>
      {!! Form::hidden('estado',1) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection
