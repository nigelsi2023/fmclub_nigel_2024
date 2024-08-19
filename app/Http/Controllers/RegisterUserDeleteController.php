<?php

namespace App\Http\Controllers;

use App\Signal;
use App\Product;
use App\Product2;
use App\Order;
use Illuminate\Http\Request;

class RegisterUserDeleteController extends Controller
{
    public function destroy($id)
    {   
        Order::find($id)->delete();
        return redirect()->back()->with('message', 'User Deleted Successfully.'); 
    }
    
}