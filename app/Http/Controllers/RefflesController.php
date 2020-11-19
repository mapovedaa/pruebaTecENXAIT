<?php

namespace App\Http\Controllers;

use App\Town;
use App\User;
use Illuminate\Http\Request;

class RefflesController extends Controller
{
    public function index()
    {
        $registeredUsers = User::all();
        $departments_and_towns = Town::getTownsPerDepartment();
        
        return view('sorteo', [
            'registeredUsers'=>$registeredUsers,
            'departments_and_towns'=>$departments_and_towns,
        ]);
    }
}
