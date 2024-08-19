@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="admincreatetitle">
      <h2>Please Enter Forum Post Title And Detail</h2>
  </div>
  


  @if(session('message'))
  <div class="alert alert-success">
    <button type="button" aria-hidden="true" class="close"
    onclick="this.parentElement.sty le.display='none'">×</button>
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
    <div class="card-header">Add Forum Post</div>
    <div class="card-body">
      <form action="{{ route('signal.update', $signal->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="email">Category Name:</label>
        <!--<input type="text" class="form-control" id="Name" name="name" value="{{ $signal->item_name }}">-->
        <select id="item_name" name="item_name" class="form-control">
            @if($items)
                @foreach($items as $item)
                <option value ="{{$item->name}}" {{($item->name == $signal->item_name) ? 'selected':''}}>{{$item->name}}</option>
                @endforeach
            @endif    
        </select>  
      </div>      
      <div class="form-group">
        <label for="email">Open Price:</label>
        <input type="number" class="form-control" id="open_price" name='open_price' value="{{ $signal->open_price }}" min="0" step="0.0001" />
      </div>
      <div class="form-group">
        <label for="email">Target Price:</label>
        <input type="number" class="form-control" id="target_price" name='target_price' value="{{ $signal->target_price }}" min="0" step="0.0001" />
      </div>
      <div class="form-group">
        <label for="email">Stop Loss:</label>
        <input type="number" class="form-control" id="stop_loss" name='stop_loss' value="{{ $signal->stop_loss }}" min="0" step="0.0001" />
      </div>
      <!--<div class="form-group">-->
      <!--  <label for="email">Closed Price:</label>-->
        <!--<input type="number" class="form-control" id="closed_price" name='closed_price' value="{{ $signal->closed_price }}" min="0" step="0.0001" />-->
      <!--</div>-->
      <div class="form-group">
        <label for="email">Date<span style="color:red;">*</span>:</label>
        <input type="date" class="form-control" id="signal_date" name='signal_date' value="<?= date('Y-m-d',strtotime($signal->signal_date));?>" />
      </div>
      <div class="form-group">
        <label for="email">Type<span style="color:red;">*</span>:</label> &nbsp;
        <input type="radio" id="free" name="signal_type" value="free" <?= ($signal->signal_type == "free")?'checked':'';?> >
        <label for="age2">Free</label>
        <input type="radio" id="vip" name="signal_type" value="vip" <?= ($signal->signal_type == "vip")?'checked':'';?>>
        <label for="age3">VIP</label><br>
      </div>
      <div class="form-group">
        <label for="email">Type<span style="color:red;">*</span>:</label> &nbsp;
        <input type="radio" id="public" name="signal_privacy" value="public" <?= ($signal->signal_privacy == "public")?'checked':'';?> >
        <label for="age2">Public</label>
        <input type="radio" id="private" name="signal_privacy" value="private" <?= ($signal->signal_privacy == "private")?'checked':'';?>>
        <label for="age3">Not Public</label><br>
      </div>
      <div class="form-group">
        <label for="email">Signal Icon<span style="color:red;">*</span>:</label> &nbsp;
        <input type="file" name="signal_img" class="form-controll" />
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
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