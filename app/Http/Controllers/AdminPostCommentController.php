<?php

namespace App\Http\Controllers;

use App\Comment;
use App\TraderComment;
use App\ForumComment;
use Illuminate\Http\Request;

class AdminPostCommentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function all_comments()
    {
        $comments = Comment::all();
        //dd($comments);
        return view('admin.comments', compact('comments'));
    }

    public function all_trader_comments()
    {
        $comments = TraderComment::all();
        //dd($comments);
        return view('admin.trader_comments', compact('comments'));
    }

    public function all_forum_comments()
    {
        $comments = ForumComment::all();
        //dd($comments);
        return view('admin.forum_comments', compact('comments'));
    }
    
}
