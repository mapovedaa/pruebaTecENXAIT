<?php

namespace App\Http\Controllers;

use App\Town;
use App\User;
use App\Reffle;
use Illuminate\Http\Request;

class RefflesController extends Controller
{
    public function index()
    {
        $departments_and_towns = Town::getTownsPerDepartment();

        return view('sorteo', [
            'registeredUsers'=>User::all(),
            'refflesDone'=>Reffle::all(),
            'departments_and_towns'=>$departments_and_towns,
        ]);
    }
}
