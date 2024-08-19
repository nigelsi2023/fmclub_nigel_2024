<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Session;
use App\Blog;
use Illuminate\Http\Request;

class PostBlogController extends Controller
{
    public function __construct()
    {
        Session::flash('error', 'You need to Log In to see the information on this page');
        //$request->session->flash('success', 'You need to Log In to see the information on this page');
        $this->middleware('auth');
    }
    

    public function fulldata($id)
    {
    	/*if(Auth::check()){*/
        $blog = Blog::find($id);
        $comments = DB::table('comments')->where('commentable_id', $id)->get()->count();
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->get();
        $posts = DB::table('blogs')->inRandomOrder(3)->get();
        return view('financepro.pages.postview', compact('blog', 'blogs', 'posts', 'comments'));
      /*}else{
        return redirect('login')->with('success', 'You need to Log In to see the information on this page');
      }*/
    }
    
    
     public function fulldata2($id)
    {
    	/*if(Auth::check()){*/
        $blog = Blog::find($id);
        
        $blog = Blog::where('page_url',$id)->get()->first();
         
                 
        $page_title = $blog->name;
        $page_subtitle = $blog->sub_title;
        
        $comments = DB::table('comments')->where('commentable_id',$blog->id)->get()->count();
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->get();
        $posts = DB::table('blogs')->inRandomOrder(3)->get();
        return view('financepro.pages.postview', compact('blog', 'blogs', 'posts', 'comments','page_title','page_subtitle'));
      /*}else{
        return redirect('login')->with('success', 'You need to Log In to see the information on this page');
      }*/
    }

    
}
