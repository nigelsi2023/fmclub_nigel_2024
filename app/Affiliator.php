<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use App\User;
use App\Referral;
use Illuminate\Database\Eloquent\Model;

class Affiliator extends Model
{
    use Notifiable;

    /**
     * ====================< Relations >===============
     */
    //relation with user one to one relationship
    public function user(){
        return $this->belongsTo(User::class, 'affiliator_id', 'id');
    }
    //relation with Referrals one to many relationship
    public function referrals(){
        return $this->hasMany(Referral::class, 'affiliator_id', 'id');
    }
}