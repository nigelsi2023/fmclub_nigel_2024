<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    public function index()
    {
        return view('admin.login');
    }

    // admin login
    
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $data = array('email' =>  $request->email, 'password' => $request->password );
        
        $admin = User::where('email',$request->email)->first();
           
        if ($admin != null ) {
            if ($admin->role == "user") {
                return redirect(route('admin'))->with('error', 'You are not an admin.');
            }
            else{
                if (Auth::attempt($data)){
                    return redirect(route('admin.dashboard'));
                }
                else{
                    return redirect(route('admin'))->with('error', 'Something went happens.');
                }
            }
        }
        else{
            return redirect(route('admin'))->with('error', 'Something went wrong.');
        }
    }
}
