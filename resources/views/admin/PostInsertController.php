<?php

namespace App\Http\Controllers;

use DB;
use Image;
use File;
use Auth;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PostInsertController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('admin.postinsert', compact('categories'));
    }

    public function show_trader()
    {
        
        return view('admin.trader_blog_add');
    }

    public function show_forum()
    {
        
        return view('admin.forum_add');
    }

    public function insert(Request $request)
    {
		$this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'category' => 'required|integer',
            'blogdetail' => 'required|string',
            'profile_image' =>'required|image|mimes:jpeg,bmp,png'
        ]);
	   
	   
	    $image = $request->file('profile_image');
        $slug = str_slug($request->blogname);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/blogs')) {
                mkdir('uploads/blogs', 0777, true);
            }
            $image->move('uploads/blogs', $imageName);
        } else {
            $imageName = '';
        }
        $data['category_id'] = $request->category;
        $data['user_id'] = Auth::id();
        $data['name'] = $request->input('blogname');
        $data['detail'] = $request->input('blogdetail');
        $data['image'] = $imageName;

        DB::table('blogs')->insert($data);

        Session::flash('message', 'Post inserted successfully!');

        return redirect()->back();
	   
	   
	   
	   
    }

    public function insert_trader(Request $request)
    {
     

        $this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'blogdetail' => 'required|string'
        ]);
     
        


        $image = $request->file('profile_image');
        $slug = str_slug($request->blogname);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/traders')) {
                mkdir('uploads/traders', 0777, true);
            }
            $image->move('uploads/traders', $imageName);
        } else {
            $imageName = '';
        }
        $data['user_id'] = Auth::id();
        $data['name'] = $request->input('blogname');
        $data['detail'] = $request->input('blogdetail');
        $data['image'] = $imageName;

        DB::table('trader_blogs')->insert($data);



        Session::flash('message', 'Trader Post inserted successfully!');

        return redirect()->back();
    }


    public function insert_forum(Request $request)
    {
        $this->validate( $request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' =>'required|image'
        ]);


        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/forums')) {
                mkdir('uploads/forums', 0777, true);
            }
            $image->move('uploads/forums', $imageName);
        } else {
            $imageName = '';
        }
        
        $data['user_id'] = Auth::id();
        $data['name'] = $request->input('title');
        $data['detail'] = $request->input('description');
        $data['image'] = $imageName;

        DB::table('forums')->insert($data);

        Session::flash('message', 'Post inserted successfully!'); 

        return redirect()->back();  
    }

}
