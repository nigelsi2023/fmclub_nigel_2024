@foreach($comments as $key => $comment)
    <div class="">

        <div class="panel panel-default panel-border">
            <div class="panel-heading">
                @if($comment->user_id == Auth::id())
                    <div class="pull-right">
                        <!-- <a href="{{ route('comment.edit', $comment->id) }}"><i class="fa fa-pencil"></i></a>
                        <a href="comments/delete/{{ $comment->id }}"><i class="fa fa-trash"></i></a> -->
                        <a href="{{ route('comment.edit', $comment->id) }}">Edit</a>
                        /
                        <a style="color: red;" href="{{ route('comment.delete', $comment->id) }}">Delete</a>
                    </div>
                @endif

                <h4 class="panel-title">
                    <strong>{{ $comment->user->name }}</strong>
                </h4>
                <p>{{ date("F j, Y", strtotime($comment->created_at)) }} at {{ date("h:i A", strtotime($comment->created_at)) }}</p>
                <!-- <p>{{ date("M d, Y", strtotime($comment->created_at)) }} at {{ date("h:i A", strtotime($comment->created_at)) }}</p> -->
                <!-- <p>{{ $comment->created_at->diffForHumans() }}</p> -->

            </div>
            <div class="panel-body ">
                <p>{{ $comment->body }}</p>
            </div>
        </div>



        <!-- <strong>{{ $comment->user->name }}</strong>
        <p>{{ date("M d, Y", strtotime($comment->created_at)) }} at {{ date("h:i A", strtotime($comment->created_at)) }}</p>
        <p>{{ $comment->body }}</p> -->
        
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <textarea name="comment_body" class="form-control" required></textarea>
                <input type="hidden" name="blog_id" value="{{ $blog_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark btn-hvborder-left  btn-square btn-default" value="Reply" />
            </div>
        </form>

        <style type="text/css">
            .padding-left-40{
                padding-left: 40px;
            }
        </style>
        
        <div class="padding-left-40">
            @include('partials.comment_replies', ['comments' => $comment->replies ])
        </div>

    </div>
@endforeach