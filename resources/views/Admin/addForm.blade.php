<div class="row form-users">
  <div class="container">

    {!! Form::open() !!}

      <div class="col-md-6">
        {!! Form::text('nombre',null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::text('apellido',null, ['placeholder' => 'Apellido', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::text('identificacion',null, ['placeholder' => 'Numero de Identificacion', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::email('email',null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::password('password',array('placeholder' => 'Contraseña', 'class' => 'form-control')) !!}
      </div>

      <div class="col-md-6">
        {!! Form::submit('Registrar '.$type ,['class' => 'btn btn-default btn-block']) !!}
      </div>

      {!! Form::hidden('estado',1) !!}

      {!! Form::hidden('type',$type) !!}

    {!! Form::close() !!}
    
  </div>
</div>