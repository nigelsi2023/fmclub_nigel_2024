@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	@if(session('success'))
		<div class="alert alert-success">
			<button type="button" aria-hidden="true" class="close"
			onclick="this.parentElement.style.display='none'">×</button>
			<span>{{ session('success') }}</span>
		</div>
	@endif
	
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Contact Messages
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>How You Get</th>
							<th>Subject</th>
							<th>Message</th>
							<th >Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>How You Get</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($contacts as $key => $contact)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->phone }}</td>
							<td>{{ $contact->email }}</td>
							<td>{{ $contact->howyou }}</td>
							<td>{{ $contact->subject }}</td>
							<td>{{ $contact->message }}</td>
							<td>
								<div class="btn-group" role="group">
									<a href="{{ route('contact.singleview', $contact->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="Top" title="See Details of The Message">
										<i class="fas fa-info"></i>
									</a>
	
									<a onclick="return confirm('Are you sure?');" href="{{ route('contact.destroy', ['id' => $contact->id]) }}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="Top" title="Delete The Message" style="margin-left: 5px;">
										<i class="fas fa-trash"></i>
									</a>
	
									<a href="{{ route('contact.history', ['id' => $contact->id]) }}" class="btn btn-primary btn-sm" target="_blank" data-toggle="tooltip" data-placement="top" title="See the mail history" style="margin-left: 5px;">
										<i class="fa fa-history"></i>
									</a>
	
									<button type="button" class="btn btn-warning btn-sm sendemail" data-id="{{$contact->id}}" data-email="{{$contact->email}}" data-name="{{$contact->name}}" data-toggle="tooltip" data-placement="Bottom" title="Send email to the user" style="margin-left: 5px;">
										<i class="fa fa-envelope" style="color:#fff;"></i>
									</button>
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


{{-- Mail Sending Modal --}}
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