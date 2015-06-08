@extends('layouts.page')

@section('title')
  Asignar Asignaturas
@endsection

@section('contenedor')
  <div class="row form-users">
    <div class="container">
      <div class="col-md-6">{!! link_to('admin/asignatura/create', '+ Nuevo Asignatura', ['class'=>'btn btn-primary btn-block']) !!}</div>
      {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
      <div class="col-md-6">{!! Form::submit('Asignar Curso',['class' => 'btn btn-default btn-block']) !!}</div>
      <div class="col-md-12">{!! Form::select('curso', array('' => '+ Elige Curso', '6' => 'Sexto 6°'), '',array('class'=>'form-control')) !!}</div>
      <div class="col-md-6">{!! Form::select('asignatura1',array('' => '+ Asignar Asignatura', '1' => 'Matematicas', '2' => 'Sociales', '3' => 'Español', '4' => 'Naturales'), '',array('class'=>'form-control')) !!}</div>
      <div class="col-md-6">{!! Form::select('asignatura2', array('' => '+ Asignar Asignatura', '1' => 'Matematicas', '2' => 'Sociales', '3' => 'Español', '4' => 'Naturales'),'',array('class'=>'form-control')) !!}</div>
      <div class="col-md-6">{!! Form::select('asignatura3', array('' => '+ Asignar Asignatura', '1' => 'Matematicas', '2' => 'Sociales', '3' => 'Español', '4' => 'Naturales'), '',array('class'=>'form-control')) !!}</div>
      <div class="col-md-6">{!! Form::select('asignatura4', array('' => '+ Asignar Asignatura', '1' => 'Matematicas', '2' => 'Sociales', '3' => 'Español', '4' => 'Naturales'), '',array('class'=>'form-control')) !!}</div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
