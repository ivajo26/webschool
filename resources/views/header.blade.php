<header>
  <div class="row navbar-main">
      <div class="col-md-3">
        <div class="dropdown">
          <button class="btn noti" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v fa-1x"></i><span class="badge"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="{{ action('Auth\AuthController@getLogout') }}">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div> 
      <div class="col-md-6">
        <div class="navbar-form navbar-left" role="search">
          <a href="{{ action('HomeController@index') }}" style="color:white;"  class =" btn fa fa-search fa-2x">Buscar</a>
        </div> 
      </div>
      <div class="col-md-3">
        <div class="navbar-right navbar-header">
          <img src="https://secure.gravatar.com/avatar/74c39ff8d9efc36fc6adcc4b3d66424d.jpg?s=70&r=g&d=mm" alt="Brand">
        </div>
        <div class="navbar-right navbar-header">
          <h4>Bienvenido, {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>
        </div>
      </div>
  </div>
  <div class="row navbar-user">
      @if(Auth::user()->type === 'admin')
        <a href="{{ action('AdminController@asignarEstudiante') }}"class="col-md-3 col-sm-3 col-xs-12  fa fa-child fa-1x @if(Request::url() === action('AdminController@asignarEstudiante') OR Request::url() === action('AdminController@newUser','estudiante')) active @endif">
           Estudiantes
        </a>
        <a href="{{ action('AdminController@asignarCargas') }}" class="col-md-3 col-sm-3 col-xs-12 fa fa-users fa-1x  @if(Request::url() === action('AdminController@newUser', 'docente') OR Request::url() === action('AdminController@newUser'))  active @endif ">
           Docentes
        </a>
        <a href="{{ action('AdminController@getAsignatura') }}" class="col-md-3 col-sm-3 col-xs-12"><i class="fa fa-edit fa-1x"></i> Editar Asignaturas</a>
        <a href="{{ action('AdminController@newAsignatura') }}" class="col-md-3 col-sm-3 col-xs-12 fa fa-book fa-1x @if(Request::url() === action('AdminController@newAsignatura')) active @endif">
          Asignaturas
        </a>
      @elseif(Auth::user()->type === 'docente')
        <a href="{{ action('DocenteController@getCursos') }}" class="col-md-3 col-sm-3 col-xs-12 "><i class="fa fa-check-square-o"></i> Registar Notas</a>
        <a href="" class="col-md-3 col-sm-3 col-xs-12 ">Registro de Asistencias</a>
      @endif
  </div>
</header>
