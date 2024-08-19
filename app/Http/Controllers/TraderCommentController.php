<?php

namespace App\Http\Controllers;

use DB;
use App\Trader_blog;
use App\TraderComment;
use Illuminate\Http\Request;

class TraderCommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required',
            //'g-recaptcha-response' => 'required|captcha',
            
        ]);

        $comment = new TraderComment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $blog = Trader_blog::find($request->get('blog_id'));
        $blog->comments()->save($comment);

        return back();
        
    }

    public function replyStore(Request $request)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $reply = new TraderComment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $blog = Trader_blog::find($request->get('blog_id'));
        $blog->comments()->save($reply);

        return back();

    }

    
    public function edit($id){
        $comment = TraderComment::find($id);

        return view('partials.trader_comment_edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'comment_body'=>'required'
            
        ]);

        $data['body'] = $request->comment_body;

        $comment = DB::table('trader_comments')
            ->where('id', $id)
            ->first();

        DB::table('trader_comments')
            ->where('id', $id)
            ->update($data);

        // Session::flash('message', 'Forum Post Updated successfully!');

        return redirect(route('fulltraderpost', $comment->commentable_id));

    }

    public function delete($id)
    {
        $comment = DB::table('trader_comments')
                ->where('id', $id)
                ->first();
        if($comment->parent_id == Null){
            DB::table('trader_comments')
                ->where('parent_id', $id)
                ->delete();
            DB::table('trader_comments')
                ->where('id', $id)
                ->delete();
        }else{
            DB::table('trader_comments')
                ->where('id', $id)
                ->delete();
        }

        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
