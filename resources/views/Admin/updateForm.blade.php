<div class="row form-users">
  <div class="container">

      <div class="col-md-6">
        {!! Form::text('nombre',null, ['placeholder' => 'Nombre', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::text('apellido',null, ['placeholder' => 'Apellido', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::text('identificacion',null, ['disabled','placeholder' => 'Numero de Identificacion', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::email('email',null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::password('password',array('disabled','placeholder' => 'Contraseña', 'class' => 'form-control')) !!}
      </div>

      <div class="col-md-6">
        {!! Form::input('number','edad',null,['placeholder' => 'Edad', 'class' => 'form-control']) !!}
      </div>
      
      <div class="col-md-6">
        {!! Form::select('genero',['' => 'Ingrese su genero','masculino' => 'Masculino', 'femenino' => 'Femenino'],null,['class' => 'form-control']) !!}
      </div>

      <div class="col-md-6">
        {!! Form::submit('Registrar '.$type ,['class' => 'btn btn-default btn-block']) !!}
      </div>

      {!! Form::hidden('type',$type) !!}
    
  </div>
</div>