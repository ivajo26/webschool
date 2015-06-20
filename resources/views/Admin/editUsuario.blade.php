@extends ('base')

@section ('title')
	Editar Usuario
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section ('content')
	@include ('header')
	{!! Form::model($usuario, ['method' => 'PATCH', 'action' => ['AdminController@updateUser', $usuario->identificacion]]) !!}
	 @include ('Admin.updateForm',['type' => $usuario->type])
	{!! Form::close() !!}
	@include ('errors.valuesRequire')
@endsection