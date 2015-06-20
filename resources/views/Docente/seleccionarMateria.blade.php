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
		<div class="row">
			@foreach ($todo as $key)
				<div class="col-md-2">
					<a href="" class="btn btn-primary">{{ $key->nombre }} Grado {{ $key->grado_id }}</a> 
				</div>
			@endforeach	
		</div>
	</div>
@endsection