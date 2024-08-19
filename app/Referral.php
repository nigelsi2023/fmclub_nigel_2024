<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use App\Affiliator;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use Notifiable;


    // protected $table = 'referrals';

    protected $fillable = [
        'page_url', 'affiliator_id', 'visitor_ip',
    ];

    //relation with affiliator many to one relationship
    public function affiliator(){
        return $this->belongsTo(Affiliator::class, 'affiliator_id', 'id');
    }
}
