<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(StoreUser $request)
    {
        if ( !isset($request->habeasData)) {
            return redirect()->back()->withErrors('Debe autorizar el tratamiento de sus datos');
        }
        
        $user = new User;

        foreach ($user->getFillable() as $key => $field) {
            if ( isset($request->{$field}) ) {
                $user->{$field} = $request->{$field};
            }
        }
        $user->save();
        
        return redirect()->back()->with('status', 'Se ha registrado correctamente en el sorteo!');;
    }
}
