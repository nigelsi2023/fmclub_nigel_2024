@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
    <h2>Please Enter Signal Informations</h2>
  </div>
  
  

  @if(session('message'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close"
    onclick="this.parentElement.style.display='none'">×</button>
    <span>{{ session('message') }}</span>
  </div>
  @endif
  
   @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close"
        onclick="this.parentElement.style.display='none'">×</button>
        <span>{{ $error }}</span>
      </div>
    @endforeach
  @endif

  <div class="card mb-3">
    <div class="card-header">Add Signal Information</div>
    <div class="card-body">
      <form action="{{ route('signal.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="email">Stock Item Name<span style="color:red;">*</span>:</label>
        <!--<input type="text" class="form-control" id="item_name" name='name' />-->
        <select id="item_name" name="item_name" class="form-control">
            @if($items)
                @foreach($items as $item)
                <option value ="{{$item->name}}">{{$item->name}}</option>
                @endforeach
            @endif                
        </select>
      </div>
      <div class="form-group">
        <label for="email">Open Price<span style="color:red;">*</span>:</label>
        <input type="number" class="form-control" id="open_price" name='open_price' min="0" step="0.0001" required />
      </div>
      <div class="form-group">
        <label for="email">Target Price<span style="color:red;">*</span>:</label>
        <input type="number" class="form-control" id="target_price" name='target_price' min="0" step="0.0001" required />
      </div>
      <div class="form-group">
        <label for="email">Stop Loss<span style="color:red;">*</span>:</label>
        <input type="number" class="form-control" id="stop_loss" name='stop_loss' min="0" step="0.0001" required />
      </div>
      <!--<div class="form-group">-->
      <!--  <label for="email">Closed Price<span style="color:red;">*</span>:</label>-->
      <!--  <input type="number" class="form-control" id="closed_price" name='closed_price' min="0" step="0.0001" />-->
      <!--</div>-->
      <div class="form-group">
        <label for="email">Date<span style="color:red;">*</span>:</label>
        <input type="datetime-local" class="form-control" id="signal_date" name='signal_date' value="<?= date('Y-m-d');?>" />
      </div>
      <div class="form-group">
        <label for="email">Type<span style="color:red;">*</span>:</label> &nbsp;
        <input type="radio" id="free" name="signal_type" value="free" checked>
        <label for="age2">Free</label>
        <input type="radio" id="vip" name="signal_type" value="vip">
        <label for="age3">VIP</label><br>
      </div>
      <div class="form-group">
        <label for="email">Privacy<span style="color:red;">*</span>:</label> &nbsp;
        <input type="radio" id="public" name="signal_privacy" value="public" checked>
        <label for="age2">Public</label>
        <input type="radio" id="private" name="signal_privacy" value="private">
        <label for="age3">Not Public</label><br>
      </div>
      <div class="form-group">
        <label for="email">Signal Icon<span style="color:red;">*</span>:</label> &nbsp;
        <input type="file" name="signal_img" class="form-controll" requrired />
      </div>
      <div class="form-group">
        <label for="email">Do you want to Inform all Subscriber?<span style="color:red;">*</span>:</label> &nbsp;
        <input type="radio" id="Yes" name="inform_subscriber" value="Yes" >
        <label for="age2">Yes</label>
        <input type="radio" id="No" name="inform_subscriber" value="No" checked>
        <label for="age3">No</label><br>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>
</div>

@endsection 


@section('scripts')
<script >

$(document).ready(function () {
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
  });
});

</script>

@endsection