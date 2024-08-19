<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trader_blog extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(TraderComment::class, 'commentable')->whereNull('parent_id');
    }
    public function trader_category()
    {
        return $this->belongsTo(TraderCategory::class);
    }
}
