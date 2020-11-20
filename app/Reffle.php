<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reffle extends Model
{
    protected $table = 'reffles';


    public function winningUser()
    {
        return $this->belongsTo('App\User', 'winnig_user_id', 'id');
    }
}
