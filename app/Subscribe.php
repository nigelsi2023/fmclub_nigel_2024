<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    // mac
    public function User(){
        return $this->belongsTo('App\User');
    }
    // mac
}
