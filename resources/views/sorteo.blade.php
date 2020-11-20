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
              <p class="mb-2"> Usuarios registrados: <strong>{{ sizeof($registeredUsers) }}</strong></p>
              <p class="mb-2"> Sorteos realizados: <strong>{{ sizeof($refflesDone) }}</strong></p>
              <p class="mb-5">Registra tus datos y <strong>GANA</strong> grandes premios !</p>
              <div class="input-group input-group-newsletter">
                @include('includes._form_user')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="reffles-done">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ganadores') }}</div>
                <div class="card-body">
                  <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Fecha realizacion</th>
                        <th scope="col">Cedula ganador</th>
                        <th scope="col">Nombre ganador</th>
                      </tr>
                    </thead>
                    @foreach ($refflesDone as $reffle)
                        <tr>
                          <td><span>{{$reffle->created_at}}</span></td>
                          <td><span>{{$reffle->winningUser->id_card}}</span></td>
                          <td><span>{{$reffle->winningUser->name}} {{$reffle->winningUser->lastname}}</span></td>
                        </tr>
                    @endforeach
                  </table>
                </div>
              </div>
          </div>
      </div>
    </div>
    
    @include('includes.social_networks')
    
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/coming-soon.min.js') }}"></script>
  </body>
</html>
