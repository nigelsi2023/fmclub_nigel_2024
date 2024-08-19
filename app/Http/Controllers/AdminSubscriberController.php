<?php

namespace App\Http\Controllers;

use DB;
use App\Subscribe;
use Illuminate\Http\Request;

class AdminSubscriberController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function view(){
        // $subscriber = Subscribe::all();
          $subscriber = Subscribe::orderBy('id', 'DESC')->get();
        return view('admin.viewsubscriber', compact('subscriber'));
    }

    public function delete($id){
        Subscribe::find($id)->delete();
        return redirect()->back()->with('message', 'Subscriber Successfully Deleted');
    }
    
    //new
     public function deleteselected(Request $request)
    {
        $ids = $request->ids;
        DB::table("subscribes")->whereIn('id',explode(",",$ids))->delete();
        // dd($request);
        return redirect()->back()->with('message', 'Selected Subscriber Successfully Deleted');
    }
    
}
