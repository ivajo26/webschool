@extends('layouts.page')

@section('title')
  Notas
@endsection

@section('contenedor')
<div class="container">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="row panel-heading">
      <div class="col-md-6"><h3>Alumno</h3></div>
      <div class="col-md-2"><h3>Periodo 1</h3></div>
      <div class="col-md-2"><h3>Periodo 2</h3></div>
    <div class="col-md-2"><h3>Periodo 3</h3></div>
    </div>
    @for ($i = 0; $i < 10; $i++)
      <div class="panel panel-default">
        <div class="panel-heading" role="tab">
          <div class="panel-title">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  Ivan Diaz
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
