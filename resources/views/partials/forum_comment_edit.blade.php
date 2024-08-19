@extends('layouts.financepro_content')

@section('content')
	<!-- PAGE HEADING SECTION -->
            <section class="page-header minimal page-title-left light-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <!-- TITLE-->
                            <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">Forum Comment Edit</h2>
                            <!-- BREADCRUMB-->
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">Forum Comment Edit</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PAGE HEADING SECTION -->
            <section id="why-choose">
            	<div class="container">
	            	<div class="row">
	            		<div class="col-md-8 col-md-offset-2">
	            			<form method="post" action="{{ route('forum_comment.update', $comment->id) }}">
	            				@csrf
	            				<div class="form-group">
	            					<textarea name="comment_body" class="form-control" required>{{ $comment->body }}</textarea>
	            					<input type="hidden" name="comment_id" value="{{ $comment->id }}" />
	            				</div>
	            				<div class="form-group">
	            					<input type="submit" class="btn btn-dark btn-hvborder-left  btn-square btn-default" value="Save" />
	            				</div>
	        				</form>
	            		</div>
	            	</div>
	            </div>
            </section>
@endsection