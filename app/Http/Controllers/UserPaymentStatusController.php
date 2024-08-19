<?php

namespace App\Http\Controllers;

use DB;
use App\Order;
use Illuminate\Http\Request;

class UserPaymentStatusController extends Controller
{
    
    public function paidstatus(Request $request, $id)
    {
        
        $siw = Order::find($id);
        $siw->payment_status = $request->payment_status;
        $siw->save();
        return redirect()->back()->with('message', 'User Payment Status Set To Paid Successfully.');
        
    }
    
    public function unpaidstatus(Request $request, $id)
    {
        
        $siw2 = Order::find($id);
        $siw2->payment_status = $request->payment_status;
        $siw2->save();
        return redirect()->back()->with('message', 'User Payment Status Set To Not Paid Successfully.');
        
    }
    
}