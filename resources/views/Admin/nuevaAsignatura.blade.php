@extends ('base')

@section ('title')
	Nueva Asignatura
@endsection 

@section ('style')
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="row form-users">
    <div class="container">
      {!! Form::open(['action' => 'AdminController@postNewAsignatura', 'method' => 'POST']) !!}
        {!! Form::token() !!}
        <div class="col-md-6">{!! Form::text('nombre_asignatura',null, ['placeholder' => 'Nombre de Asignatura', 'class' => 'form-control']) !!}</div>
        <div class="col-md-6">{!! Form::submit('Nueva Asignatura' ,['class' => 'btn btn-default btn-block']) !!}</div>
      {!! Form::close() !!}
    </div>
  </div>
  @include ('errors.valuesRequire')
@endsection 
