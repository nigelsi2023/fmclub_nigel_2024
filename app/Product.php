<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Product extends Model

{
	protected $table = 'products';



    protected $fillable = [

        'name', 'detail'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product2()
    {
        return $this->belongsTo(Product2::class);
    }

	public function trader()
    {
        return $this->hasMany(Trader::class);
    }

}