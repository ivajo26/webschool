@extends ('base')

@section ('title')
	{{ Auth::user()->type }}
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		<table class="table table-striped table-responsive table-hover ">
			<tr>
				<td>Grado</td>
				<td>Asignatura</td>
				<td></td>
			</tr>
			@foreach ($datos as $fila)
				<tr>
					<td>{{ $fila->grado_id }}</td>
					<td>{{ $fila->nombre_asignatura }}</td>
					{!! Form::open(['action' => 'DocenteController@postCursos']) !!}
					{!! Form::hidden('materia_grado',$fila->grado_id) !!}
					{!! Form::hidden('ada_id',$fila->id) !!}
					<td>{!! Form::submit('Ingresar Notas',['class' => 'btn btn-primary']) !!}</td>
					{!! Form::close() !!}
				</tr>
			@endforeach
		</table>
	</div>
	@include ('errors.valuesRequire')
@endsection