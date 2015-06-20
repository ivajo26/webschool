@extends ('base')

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include('header')
	<div class="row form-users">
  		<div class="container">
  			{!! Form::open() !!}
  			<div class="col-md-6">
  				{!! Form::text('search',null,['placeholder' => 'busqueda','class' => 'form-control']) !!}
  			</div>
  			<div class="col-md-6">
  				{!! Form::submit('Buscar',['class' => 'btn btn-default btn-block']) !!}
  			</div>
      </div>
  </div>
@endsection
