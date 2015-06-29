@extends ('base')

@section ('title')
	Nuevo {{ $type }}
@endsection

@section ('style')
	<link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	{!! Form::open(['action'=>'AdminController@postStoreUser']) !!}
		@include ('Admin.addForm')
	{!! Form::close() !!}
	@include ('errors.valuesRequire')
@endsection