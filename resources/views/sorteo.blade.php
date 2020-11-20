<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sorteo INXAIT</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="{{ asset('../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/coming-soon.min.css') }}" rel="stylesheet">
  </head>
  
  <body>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{ asset('mp4/bg.mp4') }}" type="video/mp4">
    </video>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <p>{{ session('status') }}</p>
          </div>
        @endif

        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Sorteo INXAIT</h1>
              <p class="mb-2"> Usuarios registrados: <strong>{{ $registeredUsers }}</strong></p>
              <p class="mb-2"> Sorteos realizados: <strong>{{ $refflesDone }}</strong></p>
              <p class="mb-5">Registra tus datos y <strong>GANA</strong> grandes premios !</p>
              <div class="input-group input-group-newsletter">
                {!! Form::open(['route' => 'users.create', 'method' => 'post', 'novalidate']) !!}
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="card-sizing-sm">Cedula * </span>
                    </div>
                    {!! Form::text('id_card', null, ['class'=>'form-control', 'placeholder'=>'123456789', 'required']) !!}
                  </div>                  
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="">Nombres y apellidos * </span>
                    </div>
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Pepito', 'required']) !!}
                    {!! Form::text('lastname', null, ['class'=>'form-control', 'placeholder'=>'Perez', 'required']) !!}
                  </div>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="email-sizing-sm">Correo * </span>
                    </div>
                    {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'pepitoperez@correo.com', 'required']) !!}
                  </div>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="phone-sizing-sm">Telefono * </span>
                    </div>
                    {!! Form::number('phone', null, ['min' => '3000000000', 'class'=>'form-control','placeholder'=>'3193903127', 'required']) !!}
                  </div>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="town-sizing-sm">Ciudad * </span>
                    </div>
                    {!! Form::select('town_id', $departments_and_towns, null, ['class'=>'form-control', 'placeholder' => 'Seleccione una departamento...']) !!}
                  </div>
                  <div class="custom-control custom-checkbox">
                    {!! Form::checkbox('habeasData', 1, false, ['class'=>'custom-control-input', 'id'=>'habeas_data']) !!}
                    <label class="custom-control-label" for="habeas_data">Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales * </label>
                  </div>
                  <div class="input-group-append">
                    {!! Form::submit('Registrame!',['class'=>'btn btn-secondary', 'id'=>'submit-button', 'required']) !!}
                  </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="https://twitter.com/mpoveda98" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="https://www.facebook.com/michaelandres.poveda" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="https://instagram.com/michaelp.1" target="_blank">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/coming-soon.min.js') }}"></script>
  </body>
</html>
