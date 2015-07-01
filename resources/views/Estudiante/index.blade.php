@extends ('base')

@section ('title')
	Notas
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include('header')
	<div class="container">
		@if (isset($error))
			<center>
				<h2>No has sido matriculado en ninguna materia aún</h2>
			</center>
		@elseif (!$materias->isEmpty())
			<table class="table table-striped table-responsive table-hover">
				<tr>
					<th>Asignatura</th>
					<th>Periodo 1</th>
					<th>Periodo 2</th>
					<th>Periodo 3</th>
					<th>Definitiva</th>
				</tr>
				@foreach ($materias as $key)
					<tr>
						<td>{{ $key->nombre_asignatura }}</td>
						<td>{{ $key->periodo_1 }}</td>
						<td>{{ $key->periodo_2 }}</td>
						<td>{{ $key->periodo_3 }}</td>
						<td>{{ $key->nota_final }}</td>
					</tr>
				@endforeach
			</table>
		@else
			<center>
				<h2>No hay asignaturas matriculadas en este momento</h2>
			</center>
		@endif
	</div>
@endsection
