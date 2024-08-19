<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required',
            //'g-recaptcha-response' => 'required|captcha',
            
        ]);

    	$comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $blog = Blog::find($request->get('blog_id'));
        $blog->comments()->save($comment);

        return back();
        
    }

    public function replyStore(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $blog = Blog::find($request->get('blog_id'));
        $blog->comments()->save($reply);

        return back();

    }

    public function all_comments()
    {
        $comments = Comment::all();
        //dd($comments);
        return view('admin.comments', compact('comments'));
    }

    public function edit($id){
        $comment = Comment::find($id);

        return view('partials.comment_edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $data['body'] = $request->comment_body;

        $comment = DB::table('comments')
            ->where('id', $id)
            ->first();

        DB::table('comments')
            ->where('id', $id)
            ->update($data);

        // Session::flash('message', 'Forum Post Updated successfully!');

        return redirect(route('fullpost', $comment->commentable_id));

    }

    public function delete($id)
    {
        $comment = DB::table('comments')
                ->where('id', $id)
                ->first();
        if($comment->parent_id == Null){
            DB::table('comments')
                ->where('parent_id', $id)
                ->delete();
            DB::table('comments')
                ->where('id', $id)
                ->delete();
        }else{
            DB::table('comments')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
