<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraderCategory extends Model
{
    //
    public function trader_blog()
    {
        return $this->hasMany(TraderCategory::class);
    }
}
