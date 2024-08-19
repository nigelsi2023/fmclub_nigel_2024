<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Country extends Model

{

    protected $table = 'country';



    protected $fillable = [

        'name', 'detail'

    ];

	public function product()
    {
        return $this->hasMany(Product::class);
    }


}