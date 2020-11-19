<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_card' => ['required','regex:/^[0-9]+$/u','unique:users'],
            'name' => ['required','regex:/^[a-zA-Z\']+$/u'],
            'lastname' => ['required','regex:/^[a-zA-Z]+$/u'],
            'email' => ['required','regex:/^[a-z0-9\.!#$%&\'*+\/=?^_`{|}~-]+@[a-z0-9-]+(?:\.[a-z0-9-]+)*$/u'],
            'phone' => ['required','regex:/^[0-9]+$/u'],
            'town_id' => ['required'],
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'id_card.required' => 'Debe ingresar un numero de cedula',
            'id_card.regex' => 'El numero de cedula deben ser solo numeros',
            'name.required' => 'Debe ingresar su nombre',
            'name.regex' => 'El nombre debe contener solo letras',
            'lastname.required' => 'Debe ingresar su apellido',
            'lastname.regex' => 'El apellido debe contener solo letras',
            'email.required' => 'Debe ingresar un correo',
            'email.regex' => 'El correo debe mantener el formato \'name@example.com\', todo en minusculas',
            'phone.required' => 'Debe ingresar un numero de telefono',
            'phone.regex' => 'El numero de telefono debe ser solo numeros',
            'town_id.required' => 'Debe seleccionar una ciudad',
        ];
    }
}
