<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Product;
use App\Product2;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
	
    

    public function dashboard()
    {
        $products = DB::table('products2')->get();
        return view('admin.viewallproduct',['products'=>$products]);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function profile_update(Request $request)
    {
        $this->validate( $request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|min:11',
            'age' => 'required|integer',
            'occupation' => 'required|string',
            'image' => 'image|mimes:jpeg,bmp,png'
        ]);

        $user = Auth::user();

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
        $user->image = $imageName;
        $user->save();

        return redirect()->back()->with('message', 'Profile Updated Successfully.');
    }

    public function account()
    {
        return view('admin.account_settings');
    }

    public function password(Request $request)
    {
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
        
        return redirect()->back()->with('message', 'Password Changed Successfully.');
    }

    public function change_password(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = User::where('id', $request->user_id)->first();
        $user->password = Hash::make($request->password);
        // dd($user);
        $user->save();
        
        return redirect()->back()->with('message', 'Password Changed Successfully.');
    }

    public function otherindex()
    {
        $products = Product::all();
        return view('admin.admin',['products'=>$products]);
    }
    public function add_product()
    {
        //
        return view('admin.product_create');
    }
    public function store_product(Request $request)
    {
        //
        $this->validate( $request, [
            'name' => 'required'
        ]);

        $product = New Product2();
        $product->name = $request->name;
        $product->save();
        return redirect()->back()->with('message', 'Product Successfully Created.');
    }

    public function edit_product(Request $request)
    {
        //
        $product = Product2::find($id);
        return redirect()->back()->with('message', 'Product Successfully Created.');
    }
    public function update_product(Request $request, $id)
    {
        //
        $this->validate( $request, [
            'name' => 'required'
        ]);

        $product = Product2::find($id);
        $product->name = $request->name;
        $product->save();
        return redirect()->back()->with('message', 'Product Successfully Updated.');
    }
    public function delete_product(Request $request)
    {
        //
        $product = Product2::find($id)->delete();
        return redirect()->back()->with('message', 'Product Successfully Deleted.');
    }

    public function admins(){
        $users = DB::table('users')->where('role', 'admin')->get();
        $tb_name = 'Admins';
        return view('admin.admins', compact('users', 'tb_name'));
    }

    public function admin_create(){
        return view('admin.admin_create');
    }

    public function admin_store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->save();

        return redirect()->back()->with('message', 'Admin Created Successfuy.');
    }

    public function users(){
        $users = DB::table('users')->where('role', 'user')->get();
        $tb_name = 'Users';
        return view('admin.users', compact('users', 'tb_name'));
    }

    public function users_ban($id){
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('message', 'User Banned Successfuy.');
    }
    
    public function users_unban($id){
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->back()->with('message', 'User Unbanned Successfuy.');   
    }

    public function users_delete($id){
        $user = User::find($id);
        
        $filename = $user->image;

        if (file_exists('uploads/users/'.$filename)) {
            unlink('uploads/users/'. $filename);
        }

        $user->delete();
        return redirect()->back()->with('message', 'User Dleted Successfuy.');   
    }

}
