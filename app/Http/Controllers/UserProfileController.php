<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Hash;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');    
    }
    

    public function index(){
    	$blogs = DB::table('forums')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    	return view('financepro.pages.user.profile', compact('blogs'));
    }

    public function update_profile(Request $request){
    	$this->validate( $request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:11',
            'age' => 'required|integer',
            'occupation' => 'required|string',
            'buy_shares' => 'required|string',
            'image' => 'image|mimes:jpeg,bmp,png',
            'investing' => 'required|integer',
            'trading_course' => 'required|string',
            'how_find' => 'required|string',
            'why_join' => 'required|string'
        ]);

        $user = User::find(Auth::id());

        $filename = $user->image;

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/users/')) {
                mkdir('uploads/users/', 0777, true);
            }
            if (file_exists('uploads/users/'.$filename)) {
                unlink('uploads/users/'. $filename);
            }
            $image->move('uploads/users/', $imageName);
        } else {
            $imageName = $filename;
        }
        
        

    	
    	$user->name = $request->name;
    	$user->telephone = $request->phone;
    	$user->age = $request->age;
    	$user->occupation = $request->occupation;
    	$user->buy_shares = $request->buy_shares;
    	$user->image = $imageName;
    	$user->investing = $request->investing;
    	$user->trading_course = $request->trading_course;
    	$user->how_find = $request->how_find;
    	$user->why_join = $request->why_join;
    	$user->save();

    	return redirect()->back()->with('success', 'Profile Updated Successfully.');
    }

    public function account(){
    	$blogs = DB::table('forums')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    	return view('financepro.pages.user.account_settings', compact('blogs'));
    }

    public function password(Request $request){
    	if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords not matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            //return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        //uncomment this if you need to validate that the new password is same as old one

        if(strcmp($request->get('old_password'), $request->get('password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            //return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
        }

        $validatedData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->back()->with('success', 'Password Changed Successfully.');
    }
}
