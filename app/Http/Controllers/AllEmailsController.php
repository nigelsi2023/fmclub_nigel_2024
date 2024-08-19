<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Session;

class AllEmailsController extends Controller
{
    public function viewallmail(Request $request)
    {
        $allmailsvnd = DB::table('new_mail_save_and_send')->orderBy('id', 'DESC')->get();
       
        return view('admin.signals.allemails', compact('allmailsvnd'));
    }
    
    public function deletemail(Request $request, $id)
    {
        DB::table('new_mail_save_and_send')->where(function ($query) use ($id) {$query->where('id', '=', $id);})->delete();

        return redirect()->back()->with('message', 'Email Successfully Deleted');
    }
    
    
    
}