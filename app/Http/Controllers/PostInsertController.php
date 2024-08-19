<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Image;
use File;
use Auth;
use App\Category;
use App\TraderCategory;
use App\ForumCategory;
use App\Trader_blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



class PostInsertController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('admin');
    }
    
    public function show()
    {
        $categories = Category::all();
        return view('admin.postinsert', compact('categories'));
    }

    public function show_trader()
    {
        $categories = TraderCategory::all();
        return view('admin.trader_blog_add', compact('categories'));
    }

    public function show_forum()
    {
        $categories = ForumCategory::all();
        return view('admin.forum_add', compact('categories'));
    }

    public function insert(Request $request)
    {
		$this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'sub_title' => 'string|max:255',
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
        $data['category_id']    = $request->category;
        $data['user_id']        = Auth::id();
        $data['name']           = $request->input('blogname');
        $data['page_url']       = str_slug($request->input('blogname'));
        $data['sub_title']      = $request->input('sub_title');
        
        
        $data['detail'] = $request->input('blogdetail');
        if(!empty($request->input('videoLink'))){
            $data['videoLink'] = $request->input('videoLink');
        }
        $data['image'] = $imageName;
        if(!empty($request->input('blogdate'))){
            $data['created_at'] = $request->input('blogdate');
            $data['updated_at'] = $request->input('blogdate');
        }
        DB::table('blogs')->insert($data);

        Session::flash('message', 'Post inserted successfully!');

        return redirect()->back();
	   
    }

    public function insert_trader(Request $request)
    {
     

        $this->validate( $request, [
            'blogname'  => 'required|string|max:255',
            'sub_title' => 'string|max:255',
            'category'  => 'required|integer',
            'blogdetail'=> 'required|string'
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
        $data['trader_category_id'] = $request->category;
        $data['user_id']            = Auth::id();
        $data['name']               = $request->input('blogname');
        $data['sub_title']          = $request->input('sub_title');
        
        
        $data['page_url'] = preg_replace('/\W+/', '-', strtolower($request->input('blogname')));
        
        
        $data['detail'] = $request->input('blogdetail');
        $data['videoLink'] = $request->input('videoLink');
        $data['image'] = $imageName;
        if(!empty($request->input('blogdate'))){
            $data['created_at'] = $request->input('blogdate');
            $data['updated_at'] = $request->input('blogdate');
        }
        DB::table('trader_blogs')->insert($data);


        //mac start
        
        //$to_email = 'musufy789@gmail.com';
        $from_name = 'Financial Markets Club';
        // $from_email = 'nasir@financialmarkets.club';
        $from_email = 'nasir.financialmarketsclub@gmail.com';
        
        
        $t_id = $data["trader_category_id"];
        $ct = DB::table('trader_categories')->where(function ($query) use ($t_id) {$query->where('id', '=', $t_id);})->pluck('name');
        
         $usersall = DB::table('subscribes')->select(array('id', 'name', 'email'))->get();
        // dd($usersall);
       

        if ($usersall->count() > 0) {
            foreach ($usersall as $user) {
               
            $usermail = $user->email;
            $bloglink = DB::table('trader_blogs')->select('page_url')->latest('id')->first();
           
            $data = array(
    		    'bsub'    =>  $request->input('sub_title'),
    		    'bdate'   =>  $request->input('blogdate'),
    		    'bdtail'   =>  $request->input('blogdetail'),
    		    'bdtailink'=>  $bloglink->page_url,
    		    'bcat'    =>  $ct["0"],
    		    'bvid'    =>  $request->input('videoLink'),
    		    'bimg'    =>  $imageName,
    		    'username' => $user->name,
    		);
           
          try {
                $ttl = $request->input('blogname');
                $subject = $ttl;
                Mail::send('emails.notificationMail', $data, function($message) use ( $usermail, $subject,$from_name, $from_email) {
            		$message->to($usermail)->subject($subject);
            		$message->from($from_email, $from_name);
        		});
            } catch(\Exception $e) {
                // Do nothing 
            }

    // 		Mail::send('emails.notificationMail', $data, function($message) use ( $usermail, $subject,$from_name, $from_email) {
    //     		$message->to($usermail)->subject($subject);
    //     		$message->from($from_email, $from_name);
    // 		});
    		
            }
        }
        
        //mac end


        Session::flash('message', 'Trader Post inserted successfully!');

        return redirect()->back();
    }


    public function insert_forum(Request $request)
    {
        $this->validate( $request, [
            'title' => 'required|string|max:255',
            'sub_title' => 'string|max:255',
            'category' => 'required|integer',
            'description' => 'required|string'
            //'image' =>'required|image|mimes:jpeg,bmp,png'
        ]);


        /*$image = $request->file('image');
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
        }*/
        
        $data['forum_category_id'] = $request->category;
        $data['user_id']    = Auth::id();
        $data['name']       = $request->input('title');
        $data['page_url']   = str_slug($request->input('title'));
        $data['sub_title']  = $request->input('sub_title');
        $data['detail']     = $request->input('description');
        //$data['image']    = $imageName;

        DB::table('forums')->insert($data);

        Session::flash('message', 'Post inserted successfully!'); 

        return redirect()->back();  
    }

}
