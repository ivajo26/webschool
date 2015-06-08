@extends('base')

@section('title')
	Login
@endsection

@section('style')
	<link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
	<div class="row">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Se han presentado problema con tus datos:<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
	<div class="row">
		<div class="col-md-5 logo">
			<img src="{{ asset('img/logo.png') }}" alt="">
		</div>
		<div class="col-md-7">
			{!! Form::open(array('url' => 'auth/login', 'method' => 'POST', 'class'=>'form-signin')) !!}
				{!! Form::token() !!}
				{!! Form::email('email',old('email'), array('placeholder'=>'Email', 'class'=>'form-control', 'autofocus')) !!}
				{!! Form::password('password', array('placeholder'=>'Contraseña','class'=>'form-control')) !!}
				{!! Form::submit('Ingresar', array('class'=>'btn btn-lg btn-primary btn-block')) !!}
				<div class="checkbox">
					<label>{!! Form::checkbox('remember','remember') !!} Remember	</label>
					<label>{!! link_to('password/email', '¿Olvidastes tus datos?' )!!}</label>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
