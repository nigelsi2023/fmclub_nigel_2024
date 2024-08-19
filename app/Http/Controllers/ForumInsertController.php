<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Auth;
use App\ForumCategory;
use Illuminate\Http\Request;

class ForumInsertController extends Controller
{
    //

	public function __construct()
    {
        Session::flash('error', 'You need to Log In for Ask Question.');
        //$request->session->flash('success', 'You need to Log In to see the information on this page');
        $this->middleware('auth');
    }

    public function create(){
        //
        $categories = ForumCategory::all();
    	return view('financepro.pages.forumadd', compact('categories'));
    }

    public function insert(Request $request)
    {
    	$this->validate( $request, [
            'title' => 'required|string|max:255',
            'category' => 'required|integer',
            'description' => 'required|string'
            //'image' =>'required|image|mimes:jpeg,bmp,png'
        ]);


       /* $image = $request->file('image');
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
        $data['user_id'] = Auth::id();
        $data['name'] = $request->input('title');
        $data['page_url'] = str_slug($request->input('title'));
        $data['detail'] = $request->input('description');
        //$data['image'] = $imageName;

        DB::table('forums')->insert($data);

        Session::flash('message', 'Post inserted successfully!'); 
        return redirect(route('forum'));  
    }
}
