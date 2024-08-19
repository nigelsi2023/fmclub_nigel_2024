<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*echo json_encode($data);
        exit;*/
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users', 'max:255'],
            'telephone' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users', 'confirmed'],
            'role' => 'required|in:admin,agent,customer',
            'address' => ['required', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'sex' => 'required|in:Male,Female',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'security_question' => ['required', 'string'],
            'security_answer' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'buy_shares' => 'required|in:Yes,No',
            'investing' => ['required', 'string', 'max:255'],
            'trading_course' => 'required|in:Yes,No',
            'trading_with' => ['required', 'string', 'max:255'],
            'how_find' => ['required', 'string', 'max:255'],
            'why_join' => ['required', 'string', 'max:255'],
            'find_information' => ['required', 'string', 'max:255'],
        ]);
        /*echo json_encode($data);
        exit;*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'security_question' => $data['security_question'],
            'security_answer' => $data['security_answer'],
            'role' => $data['role'],
            'address' => $data['address'],
            'dob' => $data['dob'],
            'sex' => $data['sex'],
            'occupation' => $data['occupation'],
            'buy_shares' => $data['buy_shares'],
            'investing' => $data['investing'],
            'trading_course' => $data['trading_course'],
            'trading_with' => $data['trading_with'],
            'how_find' => $data['how_find'],
            'why_join' => $data['why_join'],
            'find_information' => $data['find_information'],
        ]);
    }
}
