<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Trader_blog;
use App\TraderCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TraderPostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function show()
    {
    	$blogs = Trader_blog::all();

        $blogs =  Trader_blog::orderBy('id','desc')->get();


        return view('admin.viewtraderpost',['blogs'=>$blogs]);

    }

    public function view($id)
    {
        $blog = Trader_blog::find($id);

        
        return view('admin.viewposttrader',['blog'=>$blog]);
    }

    public function edit($id)
    {
        $blog = Trader_blog::find($id);
        $categories = TraderCategory::all();
        return view('admin.edit_tradepost',['blog'=>$blog, 'categories' => $categories]);
    }


    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'category' => 'required|integer',
            'blogdetail' => 'required|string'
        ]);

        $blog = Trader_blog::find($id);

        $filename = $blog->image;

        
        $image = $request->file('profile_image');
        $slug = str_slug($request->blogname);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/traders')) {
                mkdir('uploads/traders', 0777, true);
            }
            if (file_exists('uploads/traders/'.$filename)) {
                unlink('uploads/traders/'. $filename);
            }
            $image->move('uploads/traders', $imageName);
        } else {
            $imageName = $filename;
        }

        $data = array();
        $data['trader_category_id'] = $request->category;
        $data['name'] = $request->blogname;
        
         $data['page_url'] = preg_replace('/\W+/', '-', strtolower($request->blogname));
        
        $data['detail'] = $request->blogdetail;
        $data['videoLink'] = $request->videoLink;

        $data['image'] = $imageName;

        DB::table('trader_blogs')
            ->where('id', $id)
            ->update($data);

        Session::flash('message', 'Trader Post Updated successfully!');

        return redirect(route('traderpost'));
    }

    public function delete($id)
    {
        $blog = Trader_blog::find($id);

        if(!empty($blog->image)){
            $filename = $blog->image;
    
            if (file_exists('uploads/traders/'.$filename)) {
                unlink('uploads/traders/'.$filename);
            }

        }
        DB::table('trader_blogs')
                ->where('id', $id)
                ->delete();

        DB::table('trader_comments')
                ->where('commentable_id', $id)
                ->delete();

        return redirect()->back()->with('message', 'Deleted Successfully');	
    }
}
