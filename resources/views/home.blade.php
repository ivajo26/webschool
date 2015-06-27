@extends ('base')

@section ('title')
	{{ Auth::user()->type }}	
@endsection

@section ('content')
	@if (Auth::user()->type == "admin")
		@include ('Admin.index')
	@elseif (Auth::user()->type == "docente")
		@include ('Docente.index')
	@elseif (Auth::user()->type == "estudiante")
		{{header('location:/notas')}}
	@endif
@endsection
