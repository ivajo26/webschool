@extends('base')

@section('title')
  @yield('title')
@endsection

@section('style')
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
@endsection

@section('content')
  @include('header')
  @yield('contenedor')
  @include('footer')
@endsection
