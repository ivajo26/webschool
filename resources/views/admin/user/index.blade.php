@extends('layouts.page')

@section('title')
  Index
@endsection

@section('contenedor')
<div class="row admin-menu">
   <div class="container">
     <div class="col-md-4 col-xs-12"><a href="#" class="btn btn-default btn-block activo">Consultas por alumnos</a></div>
     <div class="col-md-4 col-xs-12"><a href="#" class="btn btn-default btn-block">Consultas por salon</a></div>
     <div class="col-md-4 col-xs-12"><a href="#" class="btn btn-default btn-block">Consultas por materia</a></div>
   </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-2"><img src="https://secure.gravatar.com/avatar/74c39ff8d9efc36fc6adcc4b3d66424d.jpg?s=60&r=g&d=mm" alt="Brand"></div>
    <div class="col-md-4"><h2>Ivan Diaz</h2></div>
    <div class="col-md-2"><h3>Sexto 6°</h3></div>
    <div class="col-md-4 form-users">{!! Form::submit('Informacion del Alumno' ,['class' => 'btn btn-default btn-block']) !!}</div>
  </div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row panel-heading">
      <div class="col-md-6"><h3>Asignatura</h3></div>
      <div class="col-md-2"><h3>Periodo 1</h3></div>
      <div class="col-md-2"><h3>Periodo 2</h3></div>
    <div class="col-md-2"><h3>Periodo 3</h3></div>
    </div>
    @for ($i = 0; $i < 4; $i++)
      <div class="panel panel-default">
        <div class="panel-heading" role="tab">
          <div class="panel-title">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  Matematicas
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse">
                  + Detalles </a>
                </div>
                <div class="col-md-2"><h3>5.0</h3></div>
                <div class="col-md-2"><h3>5.0</h3></div>
                <div class="col-md-2"><h3>5.0</h3></div>
              </div>
            </div>
          </div>
        </div>
        <div id="collapse{{ $i }}" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="container">
            <div class="row">
              <div class="col-md-6">Taller</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
            </div>
            <div class="row">
              <div class="col-md-6">Examen</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
            </div>
            <div class="row">
              <div class="col-md-6">Parcial</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
              <div class="col-md-2">5.0</div>
            </div>
            </div>
          </div>
        </div>
      </div>
    @endfor
  </div>
</div>
@endsection
