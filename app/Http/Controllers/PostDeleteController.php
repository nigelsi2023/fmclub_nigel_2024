<?php

namespace App\Http\Controllers;


use DB;
use Storage;
use File;
use Session;
use Carbon\Carbon;
use App\Category;
use App\Blog;
use Illuminate\Http\Request;

class PostDeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('admin');
    }
    
    public function show()
    {
    	$blogs = Blog::all();

        $blogs =  Blog::orderBy('id','desc')->get();



        return view('admin.deletepost',['blogs'=>$blogs]);
    }

    public function view($id)
    {
        $blog = Blog::find($id);
        return view('admin.viewpost',['blog'=>$blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        return view('admin.editpost',['blog'=>$blog, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'category' => 'required|integer',
            'blogdetail' => 'required|string'
        ]);

        $blog = Blog::find($id);

        $filename = $blog->image;


        $image = $request->file('profile_image');
        $slug = str_slug($request->blogname);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/blogs')) {
                mkdir('uploads/blogs', 0777, true);
            }
            if (file_exists('uploads/blogs/'.$filename)) {
                unlink('uploads/blogs/'. $filename);
            }
            $image->move('uploads/blogs', $imageName);
        } else {
            $imageName = $filename;
        }

        $data = array();
        $data['name'] = $request->blogname;
        $data['page_url'] = str_slug($request->blogname);
        
        $data['category_id'] = $request->category;
        $data['detail'] = $request->blogdetail;
        
        

        $data['image'] = $imageName;

        DB::table('blogs')
            ->where('id', $id)
            ->update($data);

        Session::flash('message', 'Post Updated Successfully!');

        return redirect(route('postdelete'));
    }

    public function delete($id)
    {
        $blog = Blog::find($id);

        $filename = $blog->image;

        if (file_exists('uploads/blogs/'.$filename)) {
            unlink('uploads/blogs/'.$filename);
        }

        DB::table('blogs')
                ->where('id', $id)
                ->delete();
                
        DB::table('comments')
                ->where('commentable_id', $id)
                ->delete();

        return redirect()->back()->with('message', 'Deleted Successfully');
    	
    }
}
