@extends('layouts.page')

@section('title')
  Asignar Curso
@endsection

@section('contenedor')
  <div class="row form-users">
    <div class="container">
      <div class="col-md-6">{!! link_to('admin/users/create/alumno', '+ Nuevo Alumno', ['class'=>'btn btn-primary btn-block'])!!}</div>
      {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
      <div class="col-md-6">{!! Form::submit('Asignar Curso',['class' => 'btn btn-default btn-block']) !!}</div>
      <div class="col-md-6">{!! Form::select('alumno', array('' => '+ Elige Alumno', '1' => 'Ivan Diaz'), '',array('class'=>'form-control')) !!}</div>
      <div class="col-md-6">{!! Form::select('curso', array('' => '+ Asignar Curso', '6' => 'Sexto 6°'), '',array('class'=>'form-control')) !!}</div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
