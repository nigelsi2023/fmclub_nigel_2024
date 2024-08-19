<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Session;
use App\Forum;
use App\ForumCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function show()
    {
        $blogs = Forum::all();
        return view('admin.view_forumpost',['blogs'=>$blogs]);
    }


    public function view($id)
    {
        $blog = Forum::find($id);
        return view('admin.viewpostforum',['blog'=>$blog]);
    }

    public function edit($id)
    {
        $blog = Forum::find($id);
        $categories = ForumCategory::all();
        return view('admin.edit_forumpost',['blog'=>$blog, 'categories'=>$categories]);
    }


    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'blogname' => 'required|string|max:255',
            'category' => 'required|integer',
            'blogdetail' => 'required|string'
        ]);

        /*$blog = Forum::find($id);

        $filename = $blog->image;

        
        $image = $request->file('profile_image');
        $slug = str_slug($request->blogname);

        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $ext = $image->getClientOriginalExtension();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$ext;
            if (!file_exists('uploads/forums')) {
                mkdir('uploads/forums', 0777, true);
            }
            if (file_exists('uploads/forums/'.$filename)) {
                unlink('uploads/forums/'. $filename);
            }
            $image->move('uploads/forums', $imageName);
        } else {
            $imageName = $filename;
        }*/

        $data = array();
        $data['forum_category_id'] = $request->category;
        $data['name'] = $request->blogname;
        $data['page_url'] = str_slug($request->blogname);
        $data['detail'] = $request->blogdetail;

        //$data['image'] = $imageName;

        DB::table('forums')
            ->where('id', $id)
            ->update($data);

        Session::flash('message', 'Forum Post Updated successfully!');

        return redirect(route('forumpost'));
    }

    public function delete($id)
    {
        $blog = Forum::find($id);

        $filename = $blog->image;

        if (file_exists('uploads/forums/'.$filename)) {
            unlink('uploads/forums/'.$filename);
        }

        DB::table('forums')
                ->where('id', $id)
                ->delete();

        DB::table('forum_comments')
                ->where('commentable_id', $id)
                ->delete();

        return redirect()->back()->with('message', 'Deleted Successfully'); 
    }
}
