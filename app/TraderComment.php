<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraderComment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(TraderComment::class, 'parent_id');
    }
}
