<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Affiliator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'username', 'telephone', 'email', 'password', 'security_question', 'security_answer', 'role', 'address', 'dob', 'sex', 'occupation', 'buy_shares', 'investing', 'trading_course', 'trading_with', 'how_find', 'why_join', 'find_information',
    ];
    
    // mac
    protected function Subscribe() {
        return $this->hasMany(Subscribe::class);
    }
    // mac
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];






    /**
     * ====================< Relations >===============
     */
    //relation with affiliator one to one relationship
    public function affiliator(){
        return $this->hasOne(Affiliator::class, 'affiliator_id', 'id');
    }
}
