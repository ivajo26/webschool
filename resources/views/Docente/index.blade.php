@extends ('base')

@section ('title')
  {{ Auth::user()->type }}
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include('header')
	<div class="row form-users">
  		<div class="container">
  			{!! Form::open(['action' => 'SearchController@postMateriaSearch']) !!}
  			<div class="col-md-6">
  				{!! Form::text('nombre_materia',null,['placeholder' => 'Nombre de la materia','class' => 'form-control']) !!}
  			</div>
  			<div class="col-md-6">
  				{!! Form::submit('Buscar',['class' => 'btn btn-default btn-block']) !!}
  			</div>
      </div>
  </div>
  @include ('errors.valuesRequire')
@endsection
