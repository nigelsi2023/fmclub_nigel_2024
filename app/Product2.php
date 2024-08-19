<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Product2 extends Model

{

    protected $table = 'products2';



    protected $fillable = [

        'name', 'detail'

    ];

	public function product()
    {
        return $this->hasMany(Product::class);
    }


}