@extends('layouts.page')

@section('title')
  Nuevo {{ $type }}
@endsection

@section('contenedor')
{!! Form::open(['action' => 'Admin\UsersController@store']) !!}
{!! Form::text('nombre',null, ['placeholder' => 'nombre']) !!} <br>
{!! Form::text('apellido',null, ['placeholder' => 'apellido']) !!} <br>
{!! Form::text('identificacion',null, ['placeholder' => 'identificacion']) !!} <br>
{!! Form::email('email',null, ['placeholder' => 'email']) !!} <br>
{!! Form::hidden('estado',1) !!}
{!! Form::password('password',['placeholder' => 'password']) !!} <br>
{!! Form::hidden('type',$type) !!}
{!! Form::submit('Crear') !!}
{!! Form::close() !!}
@endsection
