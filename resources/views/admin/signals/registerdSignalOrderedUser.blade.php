@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	
	@if(session('message'))
	<div class="alert alert-success">
		<button type="button" aria-hidden="true" class="close"
		onclick="this.parentElement.style.display='none'">×</button>
		<span>{{ session('message') }}</span>
	</div>
	@endif

<style>
    .inlineee{
        display: inline-flex;
    }
    .onevalue{
        margin-right: 5px;
    }
    .zerovalue {
        box-shadow: 0px 0px 8px -2px #0000007a;
        font-size: 14px;
        margin-right: 5px;
    }
    .modal-footer{
        padding-top: 10px;
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 10px;
    }
.btmrg {
    margin-right: 5px;
}
span.badge.badgecustomm {
    background: #ffa500;
    color: #fff;
}
</style>

	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Signals
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
					<thead>
						<tr>
							<th>SL</th>
							<th >Date&emsp;&emsp;</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Country</th>
							<th>Country2</th>
							<th>Reference</th>
							<th>Package</th>
							<th>Status</th>
							<th>Telegram ID</th>
							 <th style="width: 132px;">Action</th> 
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Date&emsp;&emsp;</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Country</th>
							<th>Country2</th>
							<th>Reference</th>
							<th>Package</th>
							<th>Status</th>
							<th>Telegram ID</th>
							 <th style="width: 132px;">Action</th> 
						</tr>
					</tfoot>

					<tbody>
					    @php 
                            $lastid = null;
                            $rowclass = 'grey';
                        @endphp
                        
						@foreach ($registerdUser as $key => $users)
						
						
						<tr <?php  if($users->color_id == 1){ echo "style='bgcolor:#dd2c00;background: #11f102e0;'"; }  ?>>
							<td>
							    {{ $key+1 }}
							</td>
							<td> {{ $users->created_at->format('Y-m-d') }} </td>
							<td> {{ $users->fname }} {{ $users->lname }}</td>
							<td>{{ $users->email }}</td>
							<td>{{ $users->mobile }}</td>
							<td>{{ $users->country }}</td>
							<td>{{ $users->country2 }}</td>
							<td>{{ $users->reference }}</td>
							<td>
							    <?php
							        if($users->package_id == 1){
							            echo '0';
							        } elseif($users->package_id == 2){
							            echo '1';
							        } elseif($users->package_id == 3){
							            echo '2';
							        } else {
							            echo '3';
							        }
							        
							    ?>
							</td>
							<td>
							    <?php 
							        if($users->payment_status == 1){ 
							            echo "<h5><span class='badge badge-primary'>Paid</span></h5>"; 
							        }
							        else{
							            echo "<h5><span class='badge badgecustomm'>Not Paid</span></h5>";
							        }
							    ?>
							</td>
							<td>{{ $users->address }}</td>

							<!--Mac Start-->
							<td class="adminsactionbutton">
								  
								  <div class="inlineee">  
								        <!--{{ url('signal/registeredUser/store-color') }}-->
								        <?php  if($users->color_id == 0){   ?>
								        
    								        <form action="{{ url('signal/registeredUser/store-color') }}/{{ $users->id }}" method="POST">
                                                @csrf
                                                
                                                <input type="hidden" name="color_id" class="form-control" value="1">
                                                <!--Mac  -- Select Button-->
                                                <button type="submiiiit" class="btn btn-info btn-sm onevalue" data-toggle="tooltip" data-placement="left" title="Select the user">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                
                                            </form>
                                            
								        <?php }else{  ?>
								       
								            <form action="{{ url('signal/registeredUser/store-uncolor') }}/{{ $users->id }}" method="POST">
                                                @csrf
                                                
                                                <input type="hidden" name="color_id" class="form-control" value="0">
                                                <button type="submiiiit" class="btn btn-info btn-sm zerovalue" data-toggle="tooltip" data-placement="left" title="Select the user">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                                
                                            </form>
                                        <?php } ?>
								    
								

								<!-- Delete Button trigger modal -->
								<span data-toggle="tooltip" data-placement="top" title="Delete the user" >
								    <button type="button" class="btn btn-danger btn-sm btmrg" data-toggle="modal" data-target="#delete-{{ $users->id }}">
									    <i class="fas fa-trash"></i>
								    </button>
								</span>
                                
                               

								@if($users->count()>0)
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="{{ route('userdelete.destroy', $users->id) }}" method="post" style="margin-bottom: 0px;" >
												@csrf
												@method('delete')
												<div class="modal-body">
													Are you want to delete this?
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Delete</button>
													<button type="button" class="btn btn-secondary btmrg" data-dismiss="modal">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								@endif
								
								<?php 
								
								$string = $users->address;
								$string = str_replace(' ', '', $string); 
								$string = preg_replace('/[^A-Za-z0-9+_\-]/', '', $string);
								
								?>
								<!--whatsapp Button-->
								<style>
								    .whatsapp_button{
								        background-color:#169d16;
								        margin-right: 5px;
								        padding: 4px 6px 3px;
								    }
								</style>
								<!--<a href="https://api.whatsapp.com/send?phone={{ $users->mobile }}&amp;text=I%27m+interested+in+your+services" target="_blank" style="color:#fff;">-->
								<button type="button" class="btn btn-primary btn-sm whatsapp_button sendWhatsapp" data-id="{{$users->id}}" data-name = "{{$users->fname}}" data-number="{{ $users->mobile }}" data-toggle="tooltip" data-placement="bottom" title="User Whatsapp link">
									<i class="fab fa-whatsapp-square" aria-hidden="true" style="font-size:20px;"></i>
								</button>
								
								<!--Mac  -- Telegram Button-->
								<a href="https://t.me/{{ $string }}" target="_blank" style="color:#fff;">
								<button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" data-toggle="tooltip" data-placement="top" title="User telegram link">
									<i class="fab fa-telegram"></i>
								</button>
								</a>
								
								<!--Mac  -- Mail Button-->
								<button type="button" class="btn btn-warning btn-sm sendemail" data-id="{{$users->id}}" data-email="{{$users->email}}" data-name="{{$users->fname}}" data-toggle="tooltip" data-placement="Bottom" title="Send email to the user">
								    <i class="fa fa-envelope" style="color:#fff;"></i>
								</button>
								
								
								<!--Mac  -- History Button-->
								<a href="{{ url('signal/registeredUser/view-history') }}/{{ $users->id }}" target="_blank" style="color:#fff;">
								    <button type="button" class="btn btn-dark btn-sm" style="margin-left: 5px;" data-toggle="tooltip" data-placement="Bottom" title="See the mail history">
								    <i class="fa fa-history" style="color:#fff;"></i>
								</button>
								</a>
                            
                                
                                <?php  if($users->payment_status == 0){   ?>
								        
							        <form action="{{ url('signal/registeredUser/store-p-id') }}/{{ $users->id }}" method="POST">
                                        @csrf
                                        
                                        <input type="hidden" name="payment_status" class="form-control" value="1">
                                        <button type="submiiiit" class="btn btn-success btn-sm onevalue" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Set payment status for the user">
                                            <i class="fas fa-dollar-sign"></i>
                                        </button>
                                        
                                    </form>
                                    
						        <?php }else{  ?>
						       
						            <form action="{{ url('signal/registeredUser/store-un-pid') }}/{{ $users->id }}" method="POST">
                                        @csrf
                                        
                                        <input type="hidden" name="payment_status" class="form-control" value="0">
                                        <button type="submiiiit" class="btn btn-success btn-sm zerovalue" style="margin-left:5px;" data-toggle="tooltip" data-placement="bottom" title="Set payment status for the user">
                                            <i class="fas fa-dollar-sign"></i>
                                        </button>
                                        
                                    </form>
                                <?php } ?>
                            
                                </div>
							</td>
							
						</tr>
						@endforeach 
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
<div class="modal fade" id="sendmail_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message <span id="username"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">

        <form action="{{ url('signal/registeredUser/send-mail') }}" method="POST">
			@csrf		
			<div class="form-group">
				<select class="form-control" id ="vendorsub" name ="vendorsub" aria-label="Default select example">
					<option selected>Select an email template</option>
					@foreach($allmail as $singlemail)
						<option id ="{{ $singlemail->id }}" data-subjct="{{ $singlemail->subject }}" data-msg="{{ $singlemail->message }}" {{ old('vendorsub') == $singlemail->id ? 'selected' : '' }} value="{{ $singlemail->subject }}">{{ $singlemail->subject }}</option>
					@endforeach
				</select>
			</div>
		
			<div class="form-group">
				<input type="hidden" class="form-control" name="umail" id="recipient_email" value="">
				<input type="hidden" class="form-control" name="uid" id="user_uid" value="">
				<input type="text" placeholder="Subject" name="uname" class="form-control" id="recipient_name" value="" required>
			</div>
		
			<div class="form-group">
				<!--<textarea id="summernote" class="message_text" name="umsg" rows="10" placeholder="Message" value="4tgf" required></textarea>-->
				<textarea class="form-control message_text" placeholder="Message" rows="7" name="umsg" id="summernote" value="" required></textarea>
			</div>
		
			<div class="modal-footer justify-content-between">
				<button type="submit" class="btn btn-primary submit">Send</button>
				<button type="submit" class="btn btn-primary" formaction="{{ url('signal/registeredUser/save-send-mail') }}">Save and Send</button>
			</div>
		</form>		
        
      </div>
    </div>
  </div>
</div>

<!-- /Whatsapp Modal -->
<div class="modal fade" id="whatsapp_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Message To <span id="whatsapp_username"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
          <div style="width:100%;text-align:center;">
            <a href="https://api.whatsapp.com/send?phone=&amp;text=I%27m+interested+in+your+services" class="social-icon whatsapp" style="font-size: 150px;color:#ff5959;" 
          target="_blank" alt = "Whatsup" data-toggle="tooltip" id="client_whatsapp_number" title="Whatsup">
                <i class="fab fa-whatsapp-square" aria-hidden="true"></i>
            </a>
		    <div style="width:100%:">
			<div class="form-group" style="margin:10px auto;" > 
			    <span style="display:inline-flex;margin-top:10px;">
			        
    			    <label style="font-weight: bold; margin:10px 3px;">Client Number : </label>
    			    <input type="text" value="" id="customer_whatsapp_number" class="form-control" style="width:50%; margin:5px;" >
			    </span>
			    <!--<div class="row">-->
			    <!--    <div class="col-md-offset-2 col-md-4 col-sm-6">-->
			           
			    <!--    </div>-->
			    <!--    <div class="col-md-4 col-sm-6" style="padding:0px;">-->
			    <!--        <-->
			    <!--    </div>-->
			    <!--</div>-->
			</div>
		</div>
		</div>
      </div>
      
     
      
    </div>
  </div>
</div>

<!--//For tooltip-->
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script type="text/javascript">
	// Initialize tooltip component
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});

	// Initialize popover component
	$(function () {
		$('[data-toggle="popover"]').popover()
	});
</script>
    
    
@endsection


