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

		@if (!$estudiantes->isEmpty())
			<table class="table table-striped table-responsive table-hover">
				<tr>
					<th>Apellido</th>
					<th>Nombres</th>
					<th>Periodo</th>
					<th>Nota</th>
					<th></th>
				</tr>
				@foreach ($estudiantes as $fila)
					<tr>
						<td>{{ $fila->apellido }}</td>
						<td>{{ $fila->nombre }}</td>
						{!! Form::open(['action' => 'DocenteController@postRegistrarNotas']) !!}
						<td>
							{!! Form::select('periodo',['1' => 'Periodo 1','2' => 'Periodo 2','3' => 'Periodo 3'],'',['class' => 'form-control']) !!}
						</td>
						<td>{!! Form::text('nota',null,['required']) !!}</td>
						{!! Form::hidden('estudiante_id',$fila->user_id) !!}
						{!! Form::hidden('ada_id',$ada_id) !!}
						{!! Form::hidden('materia_grado',$materia_grado) !!}
						<td>{!! Form::submit('Ingresar Notas',['class' => 'btn btn-primary']) !!}</td>
						{!! Form::close() !!}
					</tr>
				@endforeach
			</table>
		@else
			<center>
				<h2>No hay estudiantes matriculados en esta asignatura</h2>
			</center>
		@endif

		@include ('errors.valuesRequire')
	</div>
@endsection
