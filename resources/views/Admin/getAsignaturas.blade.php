@extends ('base')

@section ('title')
	Asignaturas
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	<div class="container">
		@if (!$asignaturas->isEmpty())
			<table class="table table-striped table-responsive table-hover">
				<tr>
					<th>Nombre</th>
					<th>Estado</th>
					<th></th>
				</tr>
				<tbbody>
					@foreach ($asignaturas as $key)
						<tr>
							<td>{{ $key->nombre_asignatura }}</td>
							@if ($key->estado)
								<td>Activo</td>
							@else
								<td>Inactivo</td>
							@endif
							@if ($key->estado == true)
								<td> <a href="{{ action('AdminController@editAsignatura',$key->id) }}" class = "fa fa-edit fa-2x"></a>   <a href="{{ action('AdminController@activateAsignatura',$key->id) }}" class = "fa  fa-close fa-2x"></a> </td>
							@else
								<td> <a href="{{ action('AdminController@editAsignatura',$key->id) }}" class = "fa fa-edit fa-2x"></a>   <a href="{{ action('AdminController@activateAsignatura',$key->id) }}" class = "fa  fa-check fa-2x"></a> </td>
							@endif
						</tr>
					@endforeach
				</tbbody>
			</table>
		@else
			<center>
				<h2>No hay asignaturas</h2>
			</center>
		@endif
	</div>
@endsection
