<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use App\Trader_blog;
use App\ForumCategory;
use App\TraderCategory;
use App\Category;
use App\Forum;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
	public function company(){
		return view('financepro.pages.company');
	}

	public function index(){
		$blogs = Blog::latest()->paginate(3);
		$desc_blogs = DB::table('blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		$learning_category = DB::table('categories')->orderBy('name', 'asc')->get();
		return view('financepro.pages.learning_center', compact('blogs', 'desc_blogs', 'learning_category'));
	}
	public function learning_category_view($id){
		$categories = Category::all();
		$category = Category::find($id);
		$blogs = DB::table('blogs')
				->join('categories', 'blogs.category_id', '=', 'categories.id')
				->join('users', 'blogs.user_id', '=', 'users.id')->where('category_id', $id)
				->select('blogs.*', 'users.*', 'blogs.name as learning_name','blogs.image as image', 'blogs.id as learning_id', 'categories.name as category_name', 'users.name as postedby')
				->orderBy('blogs.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.learning_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}
	
		public function learning_category_view2($id){
		$categories = Category::all();
		//$category = Category::find($id);
		
		$category= Category::where('slug',$id)->get()->first();
		
		$blogs = DB::table('blogs')
				->join('categories', 'blogs.category_id', '=', 'categories.id')
				->join('users', 'blogs.user_id', '=', 'users.id')->where('category_id', $category->id)
				// ->select('blogs.*', 'users.*', 'blogs.name as learning_name','blogs.image as image', 'blogs.id as learning_id', 'categories.name as category_name', 'users.name as postedby')
				->select('blogs.*', 'users.*', 'blogs.name as learning_name','blogs.image as image', 'blogs.id as learning_id', 'blogs.created_at as blog_created', 'categories.name as category_name', 'users.name as postedby')
				->orderBy('blogs.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.learning_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}

	public function trader_blog(){
		$blogs = Trader_blog::latest()->paginate(3);
		$desc_blogs = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		$trader_category = DB::table('trader_categories')->orderBy('name', 'asc')->get();
		return view('financepro.pages.trader_blog', compact('blogs', 'desc_blogs', 'trader_category'));
	}
	public function trader_category_view($id){
		$categories = TraderCategory::all();
		$category = TraderCategory::find($id);
		$blogs = DB::table('trader_blogs')
				->join('trader_categories', 'trader_blogs.trader_category_id', '=', 'trader_categories.id')
				->join('users', 'trader_blogs.user_id', '=', 'users.id')->where('trader_category_id', $id)
				->select('trader_blogs.*', 'users.*', 'trader_blogs.name as trader_name', 'trader_blogs.id as trader_id','trader_blogs.image as image', 'trader_categories.name as category_name', 'users.name as postedby')
				->orderBy('trader_blogs.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.trader_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}
	
	
	public function trader_category_view2($id){
		$categories = TraderCategory::all();
		$category = TraderCategory::where('slug',$id)->get()->first();
		
		$blogs = DB::table('trader_blogs')
				->join('trader_categories', 'trader_blogs.trader_category_id', '=', 'trader_categories.id')
				->join('users', 'trader_blogs.user_id', '=', 'users.id')->where('trader_category_id', $category->id)
				->select('trader_blogs.*', 'users.*', 'trader_blogs.name as trader_name', 'trader_blogs.id as trader_id','trader_blogs.image as image', 'trader_categories.name as category_name', 'users.name as postedby', 'trader_blogs.created_at as tb_created_at')
				->orderBy('trader_blogs.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.trader_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}

	public function forum(){
		$categories = ForumCategory::all();
		$blogs = Forum::latest()->paginate(5);
		$desc_blogs = DB::table('forums')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.forum', compact('blogs', 'desc_blogs', 'categories'));
	}

	public function forum_category_view($id){
		$categories = ForumCategory::all();
		$category = ForumCategory::find($id);
		$blogs = DB::table('forums')
				->join('forum_categories', 'forums.forum_category_id', '=', 'forum_categories.id')
				->join('users', 'forums.user_id', '=', 'users.id')->where('forum_category_id', $id)
				->select('forums.*', 'users.*', 'forums.name as forum_name', 'forums.id as forum_id', 'forum_categories.name as category_name', 'users.name as postedby')
				->orderBy('forums.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('forums')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.forum_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}
	
	
	public function forum_category_view2($id){
		$categories = ForumCategory::all();
		$category = ForumCategory::where('slug',$id)->get()->first();
		$blogs = DB::table('forums')
				->join('forum_categories', 'forums.forum_category_id', '=', 'forum_categories.id')
				->join('users', 'forums.user_id', '=', 'users.id')->where('forum_category_id', $category->id)
				->select('forums.*', 'users.*', 'forums.name as forum_name', 'forums.id as forum_id', 'forum_categories.name as category_name', 'users.name as postedby')
				->orderBy('forums.created_at', 'desc')
				->paginate(6);
		//dd($blogs);
		$desc_blogs = DB::table('forums')->orderBy('created_at', 'desc')->limit(5)->get();
		return view('financepro.pages.forum_category', compact('blogs', 'desc_blogs', 'categories', 'category'));
	}

	public function forum_view($id){
		$blog = Forum::find($id);
        $comments = DB::table('forum_comments')->where('commentable_id', $id)->get()->count();
        $blogs = DB::table('forums')->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = DB::table('forums')->inRandomOrder(3)->get();
        return view('financepro.pages.forum_postview', compact('blog', 'blogs', 'posts', 'comments'));
	}
	
	public function forum_view2($id){
		$blog = Forum::where('page_url',$id)->get()->first();
		
		        
        $page_title = $blog->name;
        $page_subtitle = $blog->sub_title;
		
        $comments = DB::table('forum_comments')->where('commentable_id', $blog->id)->get()->count();
        $blogs = DB::table('forums')->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = DB::table('forums')->inRandomOrder(3)->get();
        
        return view('financepro.pages.forum_postview', compact('blog', 'blogs', 'posts', 'comments','page_title','page_subtitle'));
	}

	public function fulldata($id)
    {
        /*if(Auth::check()){*/
        
        
      
        
        $trader_category = DB::table('trader_categories')->orderBy('name', 'asc')->get();
        $blog = Trader_blog::find($id);
        
          $page_title= $blog->name;;
        
        $comments = DB::table('trader_comments')->where('commentable_id', $id)->get()->count();
        $blogs = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = DB::table('trader_blogs')->inRandomOrder(3)->get();
        return view('financepro.pages.trader_postview', compact('blog', 'blogs', 'posts', 'comments', 'trader_category'))->with('page_title',$page_title);
      /*}else{
        return redirect('login')->with('success', 'You need to Log In to see the information on this page');
      }*/
    }
    
    public function fulldata2($id)
    {
        
        $blog = Trader_blog::where('page_url',$id)->get()->first();
        
        $page_title = $blog->name;
        $page_subtitle = $blog->sub_title;
        
        /*if(Auth::check()){*/
        $trader_category = DB::table('trader_categories')->orderBy('name', 'asc')->get();
        //$blog = Trader_blog::find($id);
        $comments = DB::table('trader_comments')->where('commentable_id', $blog->id)->get()->count();
        $blogs = DB::table('trader_blogs')->orderBy('created_at', 'desc')->limit(5)->get();
        $posts = DB::table('trader_blogs')->inRandomOrder(3)->get();
        return view('financepro.pages.trader_postview', compact('blog','blogs', 'posts', 'comments', 'trader_category','page_title','page_subtitle'));
      /*}else{
        return redirect('login')->with('success', 'You need to Log In to see the information on this page');
      }*/
    }
}
