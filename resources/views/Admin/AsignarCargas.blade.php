@extends ('base')

@section ('title')
  Asignar Cargas
@endsection

@section ('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	 <div class="row form-users">
    <div class="container">
      <div class="col-md-6"><a class="btn btn-primary btn-block" href="{{ action('AdminController@newUser', 'docente') }}">+ Docente</a></div>
      {!! Form::open(['action' => 'AdminController@postAsignarCargas', 'method' => 'POST']) !!}
        <div class="col-md-6">{!! Form::submit('Asignar Curso',['class' => 'btn btn-default btn-block']) !!}</div>
        <div class="col-md-4">{!! Form::select('docente_id',['' => '+ Docente'] + $docentes, '',array('class'=>'form-control')) !!}</div>
        <div class="col-md-4">{!! Form::select('asignatura_id',['' => '+ Asignatura'] + $asignaturas, '',array('class'=>'form-control')) !!}</div>
        <div class="col-md-4">{!! Form::select('grado_id',['' => '+ Grado'] + $grados, '',array('class'=>'form-control')) !!}</div>
      {!! Form::close() !!}
    </div>
  </div>

	@include ('errors.valuesRequire')
@endsection