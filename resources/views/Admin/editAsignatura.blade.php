@extends ('base')

@section ('title')
	Editar Asignatura
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		<div class="container">
			{!! Form::model($asignaturas,['method' => 'PATCH', 'action' => ['AdminController@postUpdateAsignatura', $asignaturas->id]]) !!}
			<div class="col-md-6">
				{!! Form::text('nombre_asignatura',null,['class' => 'form-control']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary btn-block']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
	<br><br>
	@include ('errors.valuesRequire')
@endsection