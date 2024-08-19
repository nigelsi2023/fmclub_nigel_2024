<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Affiliator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AffiliatController extends Controller
{
	public function __construct()
    {
        // Get all cookies and loop through them
        foreach ($_COOKIE as $name => $value) {
            // Set the cookie to expire in the past
            setcookie($name, '', time()-3600, '/');
        }
    }


    public function index(){
        $posts = DB::table('trader_blogs')->orderBy('id', 'DESC')->offset(0)->limit(5)->get();
        $post  = DB::table('trader_blogs')->orderBy('id', 'DESC')->first();
        $signal= DB::table('signals')->orderBy('id', 'DESC')->offset(0)->limit(5)->get();
        return view('financepro.pages.affiliate',['posts'=>$posts,'tBlog'=>$post,'signals'=>$signal]);
    }


    // Affiliate Registration Page
    public function registration()
    {
        Auth::logout();
        return view('financepro.pages.affiliator.index');
    }


    // Affiliate login Page
    public function login()
    {
        if (auth()->user() != null) {
            return redirect()->back();
        } else {
            Auth::logout();
            return view('financepro.pages.affiliator.login');
        }        
    }


    // Affiliate Registration Page
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'paypal_email' => ['required', 'email', 'max:255', 'unique:affiliators'],
            'phone' => ['required', 'string', 'max:20']
        ]);

        // Check if email already exists
        $count = DB::table('users')->where('email', $request->email)->count();

        // If email exists, return with error message
        if ($count > 0) {
            return back()->withInput()->with(['error_msg' => 'Email already exists']);
        }

        $user = new User();
        $user->name = $request->first_name. ' ' .$request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'affiliator';

        if($user->save() && $user->id != NULL) {
            // dd($user);
            $affiliator = new Affiliator();
            $affiliator->affiliator_id = $user->id;
            $affiliator->paypal_email = $request->paypal_email;
            $affiliator->phone = $request->phone;
            $affiliator->save();

            // Log the user in
            Auth::login($user);

            

            /**
             * -----------------------------------------------------
             * Send Mail Info to MailerLite                     ----
             *                                                  ----
             * The Helper Function "send_to_mailer_lite()"      ----
             * comes from "app/helpers.php"                     ----
             * -----------------------------------------------------
             */
            send_to_mailer_lite($request->email);
    
    
            
            return redirect()->route('affiliator.dashboard.index')->with('success_msg', 'You have Been Registered Successfully.');
        }
    }


    // Logout Affiliate
    public function logoutAffiliate(Request $request)
    {
        Auth::logout();
        return redirect()->route('affiliate.login');
    }
}
