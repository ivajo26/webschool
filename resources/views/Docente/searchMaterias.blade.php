@extends ('base')

@section ('title')
	Materias 
@endsection

@section ('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		@if (!$materias->isEmpty())
			<table class="table table-striped table-responsive table-hover">
				<tr>
					<td>Nombre</td>
					<td>Grado</td>
					<td></td>
				</tr>
				@foreach ($materias as $key)
					<tr>
						<td>{{ $key->nombre_asignatura }}</td>
						<td>{{ $key->grado_id }}</td>
						{!! Form::open(['action' => 'DocenteController@postCursos']) !!}
						{!! Form::hidden('materia_grado',$key->grado_id) !!}
						{!! Form::hidden('ada_id',$key->id) !!}
						<td>{!! Form::submit('Ingresar Notas',['class' => 'btn btn-primary']) !!}</td>
						{!! Form::close() !!}
					</tr>
				@endforeach
			</table>
		@else
			<center>
				<h2>Usted no tiene esta materia asignada</h2>
			</center>
		@endif
	</div>
@endsection
