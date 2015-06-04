<header>
  <div class="row navbar-main">
      <div class="col-md-3">
        <div class="dropdown">
          <button class="btn noti" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-comments"></i><span class="badge">4</span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li><a href="#">Cerrar Sesión</a></li>
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
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Curso <i class="fa fa-plus"></i>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Sexto 6°</a></li>
                <li><a href="#">Septimo 7°</a></li>
              </ul>
            </div>
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Año <i class="fa fa-plus"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">2014</a></li>
                <li><a href="#">2015</a></li>
              </ul>
            </div>
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
          <h4>Bienvenido, {{ Auth::user()->nombre }}</h4>
        </div>
      </div>
  </div>
  <div class="row navbar-user">
      @if(Auth::user()->type === 'admin')
        <a href="" class="col-md-3 col-sm-3 col-xs-12"><i class="fa fa-check-square-o"></i> Consultas de Notas</a>
        <a href="{{ action('Admin\UsersController@create', 'alumno') }}" class="col-md-3 col-sm-3 col-xs-12 @if(Request::url() === action('Admin\UsersController@create', 'alumno')) active @endif">Registro de Alumnos</a>
        <a href="{{ action('Admin\UsersController@create', 'docente') }}" class="col-md-3 col-sm-3 col-xs-12 @if(Request::url() === action('Admin\UsersController@create', 'docente')) active @endif">Registro de Docentes</a>
        <a href="" class="col-md-3 col-sm-3 col-xs-12">Registro de Asignaturas</a>
      @elseif(Auth::user()->type === 'docente')
        <a href="" class="col-md-3 col-sm-3 col-xs-12"><i class="fa fa-check-square-o"></i> Registar Notas</a>
        <a href="" class="col-md-3 col-sm-3 col-xs-12">Registro de Asistencias</a>
      @endif
  </div>
</header>
