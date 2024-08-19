<?php

namespace App\Http\Controllers;

use DB;
use App\Signal;
use App\Product;
use App\Product2;
use App\Order;
use Illuminate\Http\Request;

class UserColorsSelController extends Controller
{
    
    public function updatex(Request $request, $id)
    {
        
        $siw = Order::find($id);
        $siw->color_id = $request->color_id;
        $siw->save();
        return redirect()->back();
        
    }
    
    public function uncolor(Request $request, $id)
    {
        
        $siw2 = Order::find($id);
        $siw2->color_id = $request->color_id;
        $siw2->save();
        return redirect()->back();
        
    }
    
}