<header>
  <div class="row navbar-main">
      <div class="col-md-3">
        <div class="dropdown">
          <button class="btn noti" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-comments"></i><span class="badge"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="{{ action('Auth\AuthController@getLogout') }}">Cerrar Sesión</a></li>
            <li class="divider"></li>
            <li role="presentation" class="dropdown-header">Notificaciones</li>
            <li><a href="#">Nueva Asignatura asignada</a></li>
          </ul>
        </div>
      </div>  
      <div class="col-md-6">
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Buscar Alumno y/o Docentes">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </span>
          </div>
        </div>
        </form>
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
        <a href="" class="col-md-3 col-sm-3 col-xs-12"><i class="fa fa-check-square-o"></i> Consultas de Notas</a>
        <a href="{{ action('AdminController@asignarEstudiante') }}"class="col-md-3 col-sm-3 col-xs-12 @if(Request::url() === action('AdminController@asignarEstudiante') OR Request::url() === action('AdminController@newUser','estudiante')) active @endif">
           Estudiantes
        </a>
        <a href="{{ action('AdminController@asignarCargas') }}" class="col-md-3 col-sm-3 col-xs-12 @if(Request::url() === action('AdminController@newUser', 'docente') OR Request::url() === action('AdminController@newUser'))  active @endif ">
           Docentes
        </a>
        <a href="{{ action('AdminController@newAsignatura') }}" class="col-md-3 col-sm-3 col-xs-12  @if(Request::url() === action('AdminController@newAsignatura')) active @endif">
          Nueva Asignatura
        </a>
      @elseif(Auth::user()->type === 'docente')
        <a href="{{ action('DocenteController@getCursos') }}" class="col-md-3 col-sm-3 col-xs-12 "><i class="fa fa-check-square-o"></i> Registar Notas</a>
        <a href="" class="col-md-3 col-sm-3 col-xs-12 ">Registro de Asistencias</a>
      @endif
  </div>
</header>
