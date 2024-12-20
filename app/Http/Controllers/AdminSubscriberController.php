<?php

namespace App\Http\Controllers;

use DB;
use Exception;
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
        return redirect()->back()->with('message', 'Subscriber Deleted Successfully');
    }
    
    //new
    public function deleteselected(Request $request)
    {
        $ids = explode(",",$request->ids);
        
        // dd($request->ids, $ids);
        try {
            if (is_array($ids) && !empty($ids)) {
                Subscribe::whereIn('id', $ids)->delete();
                return redirect()->back()->with('message', 'Selected Subscriber Deleted Successfully.');
            }
            return redirect()->back()->with('error', 'No valid IDs provided.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    
}
