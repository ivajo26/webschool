@extends ('base')

@section ('title')
	Info
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		@if (!$info->isEmpty())
			<table class="table table-striped table-responsive table-hover">
				<tr>
					<td>Asignatura</td>
					<td>Docente Asignado</td>
					<td>Email Docente</td>
				</tr>
				@foreach ($info as $key)
					<tr>
						<td>{{ $key->nombre_asignatura }}</td>
						<td>{{ $key->nombre." ".$key->apellido }}</td>
						<td>{{ $key->email }}</td>
					</tr>
				@endforeach
			</table>
		@else
			<center>
				<h2>Todavia no tienes asignaturas matriculadas en tu grado</h2>
			</center>
		@endif
	</div>
@endsection
