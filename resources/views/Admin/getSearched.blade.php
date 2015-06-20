@extends ('base')

@section ('title')
	Resultados
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		<table class="table table-striped table-responsive table-hover">
			<tr>
				<td>Identificacion</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Carga</td>
				<td>Estado</td>
				<td></td>
			</tr>
			@foreach ($search as $key)
				<tr>
					<td>{{ $key->identificacion }}</td>
					<td>{{ $key->nombre }}</td>
					<td>{{ $key->apellido }}</td>
					<td>{{ $key->type }}</td>
					<td>@if ($key->estado) Activo @else Inactivo @endif</td>
					<td>
						<a href="{{ action('AdminController@editUser', $key->identificacion) }}" class ="fa fa-edit fa-2x"></a>
						@if ($key->estado)
							<a href="{{ action('AdminController@activateUser', $key->identificacion) }}" class="fa fa-close fa-2x"></a>
						@else
							<a href="{{ action('AdminController@activateUser', $key->identificacion) }}" class="fa fa-check fa-2x"></a>
						@endif
					</td>
				</tr>
			@endforeach
			</table>
	</div>
@endsection