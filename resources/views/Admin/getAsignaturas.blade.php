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
		<table class="table table-striped table-responsive table-hover">
			<tr>
				<td>Nombre</td>
				<td>Estado</td>
				<td></td>
			</tr>
			<tbbody>
				@foreach ($asignaturas as $key)
					<tr>
						<td>{{ $key->nombre }}</td>
						<td>{{ $key->estado }}</td>
						@if ($key->estado == true)
							<td> <a href="{{ action('AdminController@editAsignatura',$key->id) }}" class = "fa fa-edit fa-2x"></a>   <a href="{{ action('AdminController@activateAsignatura',$key->id) }}" class = "fa  fa-close fa-2x"></a> </td>
						@else
							<td> <a href="{{ action('AdminController@editAsignatura',$key->id) }}" class = "fa fa-edit fa-2x"></a>   <a href="{{ action('AdminController@activateAsignatura',$key->id) }}" class = "fa  fa-check fa-2x"></a> </td>
						@endif
					</tr>
				@endforeach
			</tbbody>
		</table>
	</div>
@endsection