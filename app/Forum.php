<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(ForumComment::class, 'commentable')->whereNull('parent_id');
    }
    public function forum_category()
    {
        return $this->belongsTo(ForumCategory::class);
    }
}
