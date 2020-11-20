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
        {!! Form::text('phone', null, ['min' => '3000000000', 'class'=>'form-control','placeholder'=>'3193903127', 'required']) !!}
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