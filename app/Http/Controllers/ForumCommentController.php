<?php

namespace App\Http\Controllers;

use DB;
use App\Forum;
use App\ForumComment;
use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required',
            //'g-recaptcha-response' => 'required|captcha',
            
        ]);

    	$comment = new ForumComment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $blog = Forum::find($request->get('blog_id'));
        $blog->comments()->save($comment);

        return back();
        
    }

    public function replyStore(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $reply = new ForumComment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $blog = Forum::find($request->get('blog_id'));
        $blog->comments()->save($reply);

        return back();

    }

    

    public function edit($id){
        $comment = ForumComment::find($id);

        return view('partials.forum_comment_edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $data['body'] = $request->comment_body;

        $comment = DB::table('forum_comments')
            ->where('id', $id)
            ->first();

        DB::table('forum_comments')
            ->where('id', $id)
            ->update($data);

        // Session::flash('message', 'Forum Post Updated successfully!');

        return redirect(route('forum.view', $comment->commentable_id));

    }

    public function delete($id)
    {
        $comment = DB::table('forum_comments')
                ->where('id', $id)
                ->first();
        if($comment->parent_id == Null){
            DB::table('forum_comments')
                ->where('parent_id', $id)
                ->delete();
            DB::table('forum_comments')
                ->where('id', $id)
                ->delete();
        }else{
            DB::table('forum_comments')
                ->where('id', $id)
                ->delete();
        }

        
        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
