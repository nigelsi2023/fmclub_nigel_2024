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
                
                    <h3 class="media-heading"><b>Subject:</b> {{ $contact->subject }}</h3>
                    <p class="text-left postdate">
                    	<b>Sent By:</b> {{ $contact->name }} || <b>Sent at:</b> {{ $contact->created_at->diffForHumans() }}
                    </p>
                    <p><b>How You Get To Know This Website:</b> {{ $contact->howyou }}</p>
                    <p><b>Message:</b> {{ $contact->message }}</p>
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
