<?php

namespace App\Http\Controllers;

use App\Town;
use App\User;
use App\Reffle;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class RefflesController extends Controller
{
    public function index()
    {
        $departments_and_towns = Town::getTownsPerDepartment();

        return view('sorteo', [
            'registeredUsers'=>User::getParticipantsReffles(),
            'refflesDone'=>Reffle::all(),
            'departments_and_towns'=>$departments_and_towns,
        ]);
    }
    
    public function create()
    {
        $users = User::getParticipantsReffles()->all();

        if ( sizeof($users)<5 ) {
            return redirect()->back()->withErrors('No hay suficientes participantes para realizar el sorteo');
        }

        shuffle($users);
        $key_winner = array_rand($users);

        $reffle = new Reffle;
        $reffle->winnig_user_id  = $users[$key_winner]->id;
        $reffle->save();
        
        return redirect()->back()->with('status', 'El ganador ha sido '.ucwords($users[$key_winner]->name).' '
            .ucwords($users[$key_winner]->lastname).' con cedula '.$users[$key_winner]->id_card.'!');

    }
}
