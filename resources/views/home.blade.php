@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Resumen') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="card-header">{{ __('Rifas realizadas') }}</div>
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
                        <div class="col col-md-6">
                            <div class="card-header">
                                {{ __('Usuarios registrados') }}
                                @if ( sizeof($registeredUsers)>=5 )
                                    <a href="{{ route('reffles.create') }}">
                                        <button type="button" class="btn btn-info">Sortear</button>
                                    </a>
                                @endif
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Cedula usuario</th>
                                            <th scope="col">Nombre usuario</th>
                                            <th scope="col">telefono usuario</th>
                                            <th scope="col">correo usuario</th>
                                            </tr>
                                        </thead>
                                        @foreach ($registeredUsers as $user)
                                            <tr>
                                                <td><span>{{$user->id_card}}</span></td>
                                                <td><span>{{$user->name}} {{$user->lastname}}</span></td>
                                                <td><span>{{$user->phone}}</span></td>
                                                <td><span>{{$user->email}}</span></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
