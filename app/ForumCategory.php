<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    //
    public function forum()
    {
        return $this->hasMany(ForumCategory::class);
    }
}
