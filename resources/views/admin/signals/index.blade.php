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

	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Signals
			<span style="float:right;">
            <form action="{{ route('signalimport') }}" method="POST" enctype="multipart/form-data">  
                @csrf  
                <input type="file" name="file" class="form-control">  
                  
                <button class="btn btn-success">Import Data</button>  
                <a class="btn btn-warning" href="{{route('signalexport')}}">Export Data</a>
            </form>
			</span>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Image</th>
							<th>Open Price</th>
							<th>Target Price</th>
							<th>Stop Loss</th>
							<!--<th>Closed Price</th>-->
							<th>Type</th>
							<th>Privacy</th>
							<th>Status</th>
							<th style="width: 132px;">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Image</th>
							<th>Open Price</th>
							<th>Target Price</th>
							<th>Stop Loss</th>
							<!--<th>Closed Price</th>-->
							<th>Type</th>
							<th>Privacy</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>

					<tbody>
						@foreach ($signals as $key => $signal)
						<tr <?php  if($signal->status==0){ echo "style='background: #96ff8fe0;'"; }  ?>>
							<td>
							    {{ $key+1 }}
							</td>
							<td>{{ $signal->item_name }}</td>
							
							<td><img src="{{ asset('public/images/signals/'.$signal->signal_img) }}" alt="{{$signal->item_name}}" width="80px;" onclick="showme(this.src)"></td>
							<td>{{ $signal->open_price }}</td>
							<td>{{ $signal->target_price }}</td>
							<td>{{ $signal->stop_loss }}</td>
							<!--<td>{{ $signal->closed_price }}</td>-->
							<td>
    						    <?php if($signal->signal_type == 'vip'){ ?>
    						        <span class="label label-success" style="padding:5px 15px; background-color:orange;">VIP</span>
    						    <?php } else { ?>
    						        <span class="label label-danger" style="padding:5px 10px; background-color:gray;">FREE</span>
    						   <?php } ?>
							</td>
							<td>
    						    <?php if($signal->signal_privacy == 'public'){ ?>
    						        <span class="label label-success" style="padding:5px 15px; background-color:orange;">Public</span>
    						    <?php } elseif($signal->signal_privacy == 'private') { ?>
    						        <span class="label label-danger" style="padding:5px 10px; background-color:gray;">Not Public</span>
    						   <?php } else { ?>
    						        -
    						   <?php } ?>
							</td>
							<td>
							   
                <style>
              
                
                 .image{
                  cursor: pointer;
                  transition: 0.3s;
                }
                
                 .image:hover{
                 opacity: 0.7;
                 }
                
                 .modalw{
                 display: none;
                 position: fixed;
                 z-index: 2;
                 background-color: rgb(0, 0, 0);
                 width: 100%;
                 height: 100%;
                 left: 0;
                 top:0;
                 overflow: auto;
                 padding-top: 1%;
                 }
                
                 .modal-content{
                 display: block;
                 width: 95%;
                 max-width: 1500px;
                 margin:auto;
                 top:22px;
                 margin-top: 40px;
                 }
                
                 .close{
                 position: absolute;
                 right:1%;
                 top:1%;
                 color:white;
                 cursor: pointer;
                 font-size: 40px;
                 }
                 
                 
                @media only screen {
                  .toggleSwitch {
                    display: inline-block;
                    height: 18px;
                    position: relative;
                    overflow: visible;
                    padding: 0;
                    margin-left: 50px;
                    cursor: pointer;
                    width: 80px
                  }
                  .toggleSwitch * {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                  }
                  .toggleSwitch label,
                  .toggleSwitch > span {
                    line-height: 20px;
                    height: 20px;
                    vertical-align: middle;
                  }
                
                
                  .toggleSwitch input {
                    position: absolute;
                    opacity: 0;
                    z-index: 5;
                  }
                  .toggleSwitch > span {
                    position: absolute;
                    left: -50px;
                    width: 100%;
                    margin: 0;
                    padding-right: 50px;
                    text-align: left;
                    white-space: nowrap;
                  }
                  .toggleSwitch > span span {
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: 5;
                    display: block;
                    width: 100%;
                    margin-left: 50px;
                    text-align: left;
                    font-size: 0.9em;
                    width: 100%;
                    left: 15%;
                    top: -1px;
                    opacity: 0;
                  }
                  .toggleSwitch a {
                    position: absolute;
                    right: 50%;
                    z-index: 4;
                    display: block;
                    height: 100%;
                    padding: 0;
                    left: 2px;
                    width: 18px;
                    background-color: #fff;
                    border: 1px solid #CCC;
                    border-radius: 100%;
                    -webkit-transition: all 0.2s ease-out;
                    -moz-transition: all 0.2s ease-out;
                    transition: all 0.2s ease-out;
                    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                  }
                  .toggleSwitch > span span:first-of-type {
                    color: #ccc;
                    opacity: 1;
                    left: 45%;
                  }
                  .toggleSwitch > span:before {
                    content: '';
                    display: block;
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    left: 50px;
                    top: -2px;
                    background-color: #fafafa;
                    border: 1px solid #ccc;
                    border-radius: 30px;
                    -webkit-transition: all 0.2s ease-out;
                    -moz-transition: all 0.2s ease-out;
                    transition: all 0.2s ease-out;
                  }
                  .toggleSwitch input:checked ~ a {
                    border-color: #fff;
                    left: 100%;
                    margin-left: -8px;
                  }
                  .toggleSwitch input:checked ~ span:before {
                    border-color: #0097D1;
                    box-shadow: inset 0 0 0 30px #0097D1;
                  }
                  .toggleSwitch input:checked ~ span span:first-of-type {
                    opacity: 0;
                  }
                  .toggleSwitch input:checked ~ span span:last-of-type {
                    opacity: 1;
                    color: #fff;
                  }
                  /* Switch Sizes */
                  .toggleSwitch.large input:checked ~ a {
                    left: 60px;
                  }
                  .toggleSwitch.large > span span {
                    font-size: 1em;
                  }
                
                }
                
                </style>         
                 <!--onclick="updateSignalStatus(this.value)"-->
                                <!--<p>-->
                                <!--    <label class="toggleSwitch large">-->
                                <!--        <input type="checkbox" id="signalStatus" checked />-->
                                <!--        <span>-->
                                <!--            <span>Loss</span>-->
                                <!--            <span>Profit</span>-->
                                <!--        </span>-->
                                <!--        <a></a>-->
                                <!--    </label>-->
                                <!--</p>-->
                                <form action="{{ route('updatestatus', $signal->id) }}" method="post">
                                    @csrf
                                <select class="form-control" name="signalStatus"> 
                                    <option value="0" <?= ($signal->status==0)? 'selected': '';?> >Live</option>
                                    <option value="1" <?= ($signal->status==1)? 'selected': '';?> >Profit</option>
                                    <option value="2" <?= ($signal->status==2)? 'selected': '';?> >Stopped</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm" >Update</button>
                                </form>
                                <!--<form class="my_radio_box">-->
                                <!--    <input type="radio" name="signalStatus" value="1"> Profit-->
                                <!--    <input type="radio" name="signalStatus" value="0"> Stopped-->
                                <!--    <input type="hidden" name="signalId" value="{{$signal->id}}" />-->
                                <!--</form>-->
                                
							</td>
							<td class="adminsactionbutton">
								<a href="{{ route('signal.edit', $signal->id) }}" class="btn btn-info btn-sm">Edit</a>

								<!-- <form id="delete-from-{{ $signal->id }}" action="{{ route('signal.destroy', $signal->id) }}" style="display:none;" method="POST">
									@csrf
									@method('DELETE')
								</form>
								<button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Are you sure? You want to delete this?')){
									event.preventDefault();
									document.getElementById('delete-from-{{ $signal->id }}').submit();
								} else {
									event.preventDefault();
								}">Delete</button> -->

								<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $signal->id }}">
									Delete
								</button>


								@if($signals->count()>0)
								<!-- Modal -->
								<div class="modal fade" id="delete-{{ $signal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form action="{{ route('signal.destroy', $signal->id) }}" method="post" style="margin-bottom: 0px;" >
												@csrf
												@method('delete')
												<div class="modal-body">
													Are you want to delete this?
												</div>
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Delete</button>
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								@endif

							</td>
						</tr>
						@endforeach 
					</tbody>
				</table>
				
				<div class="modalw" id="modalw">
                     <div class="close" id="close">&times;</div>
                     <img id="modal-image" class="modal-content">
                     <div class="caption"></div>
                 </div>
                 
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

@endsection

