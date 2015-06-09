@extends('layouts.page')

@section('title')
  Notas
@endsection

@section('contenedor')
<div class="row form-users docente">
  <div class="container">
    <div class="col-md-3">
      {!! Form::label('asignatura', 'Seleccione Asignatura', array('class'=>'btn-block')) !!}
    </div>
    <div class="col-md-9">
      {!! Form::select('asignatura', array('' => '+ Asignar Asignatura', '1' => 'Matematicas', '2' => 'Sociales', '3' => 'Español', '4' => 'Naturales'),'',array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="container">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab">
        <div class="panel-title">
          <div class="container">
            <div class="row">
              <div class="col-md-4"><h3>Alumno</h3></div>
              <div class="col-md-8">
                <h3>Periodo 1</h3>
                <table class="table">
                  <tr>
                    <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td>
                </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab">
        <div class="panel-title">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              Ivan Diaz <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapse">
                + Detalles
                </a>
            </div>
            <div class="col-md-8">
              <table class="table">
                <tr>
                  <td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>X</td><td>-</td><td>X</td><td>-</td><td>-</td><td>-</td><td>-</td><td>X</td><td>X</td><td>X</td><td>X</td><td>-</td><td>-</td><td>-</td><td>-</td>
                </tr>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="container">
            No Hay Observaiones Pendientes
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
