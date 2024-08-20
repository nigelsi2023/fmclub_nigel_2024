@extends('layouts.admin')

@section('content')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
  
                <!-- <img class="media-object" src= "{{ asset(Storage::url($blog->image)) }}"> -->
                <!-- <img class="media-object" src= "{{ asset($blog->image) }}"> -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <img class="img-responsive" src="{{ asset('uploads/blogs/'.$blog->image) }}" height="auto" width="100%">
                  </div>
                </div>
                <br><br>
                    <h3 class="media-heading text-capitalize">{{ $blog->name }}</h3>
                    <p class="text-left postdate">Category: {{ $blog->category['name'] }} || Posted By: {{$blog->user->name}} || Posted at: {{ $blog->updated_at->diffForHumans() }} </p>
                    <p class="text-justify">{!! $blog->detail !!}</p>
                    <br>
                    <style type="text/css">
                    .btn-back{
                      color: #FFFFFF;
                      background-color: #24CAE2;
                      border-color: #24CAE2;
                    }
                    .btn-back:hover{
                      color: #000000;
                      background-color: #DDDDDD;
                      border-color: #DDDDDD;
                    }
                  </style>

                    <a class="btn btn-primary btn-back" href="{{ URL::previous() }}"> Back </a>
                    
                    <br>
                    <!-- <hr/>
                    <h4 class="text-center">Display Comments</h4> -->
                      
            
            <hr/>
            
            
                   </div> 
               </div>
            </div>
        </div>
    </div>

  

@endsection
