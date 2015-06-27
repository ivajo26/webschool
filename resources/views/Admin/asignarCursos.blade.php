@extends ('base')

@section ('title')
  Asignar Cursos
@endsection

@section ('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
  @include ('header')
    <div class="row form-users">
    <div class="container">
      <div class="col-md-6"><a class="btn btn-primary btn-block" href="{{ action('AdminController@newUser', 'estudiante') }}">+ Estudiante</a></div>
      {!! Form::open(['action' => 'AdminController@postAsignarEstudiante', 'method' => 'POST']) !!}
      <div class="col-md-6">{!! Form::submit('Asignar Curso',['class' => 'btn btn-default btn-block']) !!}</div>
      <div class="col-md-6">{!! Form::select('user_id',['' => '+ Estudiante'] + $estudiantes,'',['class'=>'form-control']) !!}</div>
      <div class="col-md-6">{!! Form::select('grado_id',['' => '+ Grado'] + $cursos,'',['class'=>'form-control']) !!}</div>
      {!! Form::close() !!}
    </div>
  </div> 
  @include ('errors.valuesRequire')
@endsection




