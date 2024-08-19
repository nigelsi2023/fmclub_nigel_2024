<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Session;
use App\User;
// mac
use App\Subscribe;
// mac
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //
    public function register(Request $request)
    {
    	$this->validation1($request);
        
    	/*$this->create($request);
    	return redirect()->route('login');*/
    	/*return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
	        'telephone' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users', 'confirmed'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);*/

	    session(['name' => $request->name]);
	    session(['telephone' => $request->telephone]);
	    session(['email' => $request->email]);
	    session(['password' => $request->password]);
    	
    // 	$news = new Subscribe;
    //     $news->name = $request->name;
    //     $news->email = $request->email;
    //     $news->subscriber_from = 'Register';
    //     $news->save();
        
    	return view('auth.register2');
    }

    public function register2(Request $request)
    {
    	$this->validation2($request);

    	$request['name'] = $request->session()->get('name');
    	$request['telephone'] = $request->session()->get('telephone');
    	$request['email'] = $request->session()->get('email');
    	$request['password'] = $request->session()->get('password');


    	//return $request->all();
        
        
        
        // mac
        //When register a new account the email and name wiil save to subscribes table in database.
        
        $news = new Subscribe;
        $isExist = Subscribe::select("*")->where("email", $request->email)->doesntExist();
        if ($isExist) {
           
            $news->name = $request->name;
            $news->email = $request->email;
            $news->subscriber_from = 'Register';
            $news->save();
        }
        
    	// mac
    	
    	
    	$user = $this->create($request);
        
        Auth::login($user);
        return redirect('/');
    	
    }

    public function validation1($request)
    {
    	return $this->validate($request, [
	        'name' => ['required', 'string', 'max:255'],
	        'telephone' => ['required', 'numeric', 'unique:users', 'min:11'],
            'email' => ['required', 'email', 'max:255', 'unique:users', 'confirmed'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    	]);
    }

    public function validation2($request)
    {
    	return $this->validate($request, [
    		'age' => ['required', 'numeric'],
	        //'sex' => 'required|in:Male,Female',
	        'occupation' => ['required', 'string'],
            'buy_shares' => 'required|in:Yes,No',
            'investing' => ['required', 'string', 'max:255'],
            'trading_course' => 'required|in:Yes,No',
            'how_find' => ['required', 'string', 'max:255'],
            'why_join' => ['required', 'string', 'max:255'],
    	]);
    }

    protected function create($data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
            'age' => $data['age'],
            //'sex' => $data['sex'],
            'occupation' => $data['occupation'],
            'buy_shares' => $data['buy_shares'],
            'investing' => $data['investing'],
            'trading_course' => $data['trading_course'],
            'how_find' => $data['how_find'],
            'why_join' => $data['why_join'],
        ]);
    }
}
