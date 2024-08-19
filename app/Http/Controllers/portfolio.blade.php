@extends('layouts.financepro_content')

@section('content')
<!-- PAGE HEADING SECTION -->
<section class="page-header minimal page-title-left light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <!-- TITLE-->
                <h2 class="text-uppercase" data-animated="fadeInLeftBig" data-animation-delay="400">My Portfolio</h2>
                <!-- BREADCRUMB-->
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">My Portfolio</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

                <style type="text/css">
                    .table{
                        border-top: 0px solid !important;
                    }
                    .table > thead > tr > th{
                        border-bottom: 1px solid !important;
                    }
                    .table > tbody > tr > td{
                        border-bottom: 1px solid !important;
                    }

                    /*.no-border{
                        border-top: 0px !important;
                        border-bottom: 0px !important;
                        }*/

                    .select2-container--default .select2-selection--single{
                        border-radius: 0px !important;
                        height: 30px !important;
                        padding-top: 2px !important;
                    }
                </style>

                <!-- PAGE HEADING SECTION -->

                <div class="container" style="margin-top: 20px;margin-bottom: 20px;">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close"
                        onclick="this.parentElement.style.display='none'">×</button>
                        <span>{{ session('success') }}</span>
                        @php Session::forget('success');; @endphp
                    </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" >
                           <div class="" style="margin-left: 15%;">
                                <form action="{{ route('products.store') }}" method="POST" class="form-inline">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-email form-group has-feedback">
                                            <select class="js-example-basic-single input-subject form-control" name="product_id">

                                                @foreach ($products2 as $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            <style type="text/css">
                                                .btn.btn-sm{
                                                    margin-top: 7px!important;
                                                    padding-bottom: 3px;
                                                }
                                            </style>
                                            <button type="submit" class="btn typo-light btn-hv-dark theme-bg btn-sm">Add to Watch List</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    

   <section class="sidebar-wrapper right-sidebar">
    <div class="container">
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#portfolio">My Portfolio</a></li>
                <li class="active"><a data-toggle="tab" href="#myfav">My Watch List</a></li>
                <li><a data-toggle="tab" href="#mytrade">My Trades</a></li>
                <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
            </ul>

            <div class="tab-content bottom-margin-sm">
                <div id="portfolio" class="tab-pane fade">
                    <h3>Market Summary</h3>
                    <table class="table" id="sttable">
                        <thead>
                            <th>Name</th>
                            <th>Symbol</th>
                            <th>Last</th>
                            <th>Change</th>
                            <th>Change (%)</th>
                        </thead>
                        <tbody>
                            @foreach ($summary as $key => $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->symbol }}</td>
                                <td>
                                    <div class="pull-left" style="padding-right: 5px;">
                                        @if($product->status == 'up')
                                            <i class="fa fa-arrow-up" style="color: #071"></i> 
                                        @elseif($product->status == 'down')
                                            <i class="fa fa-arrow-down" style="color: #B00"></i> 
                                        @endif
                                    </div>
                                     {{ $product->current_price }}
                                </td>
                                <td>
                                    @php
                                    $change = preg_replace("/[^0-9.%-]/", "", $product->price_change_amount);
                                    $percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent)
                                    @endphp

                                    @if($product->status == 'down')
                                    <p style="color: #B00">${{ $change }}</p>
                                    @elseif($product->status == 'up')
                                    <p style="color: #071;">${{ $change }}</p>
                                    @else
                                    <p>${{ $change }}</p>
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent)
                                    @endphp

                                    @if($product->status == 'down')
                                    <p style="color: #B00">{{ $percent }}</p>
                                    @elseif($product->status == 'up')
                                    <p style="color: #071;">{{ $percent }}</p>
                                    @else
                                    <p>${{ $percent }}</p>
                                    @endif
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $summary->links() !!} --}}
                </div>
                <div id="myfav" class="tab-pane fade in active">
                    <h3>My Watch List</h3>
                    <table class="table dataTable" id="dataTable">
                        <thead>
                            <!-- <th>Logo</th> -->
                            <th style="width: 200px;">Name</th>
                            <th>Symbol</th>
                            <th style="width: 100px;">Last Price</th>
                            <th>Change</th>
                            <th style="width: 100px;">Change (%)</th>
                            <th style="width: 300px;">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($watchlist as $key => $product)
                            <tr style="height: 60px;">
                                <!-- <td><img src="{{ $product->image }}" width="65" height="65"></td> -->
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->symbol }}</td>
                                <td>
                                    <div class="pull-left" style="padding-right: 5px;">
                                        @if($product->status == 'up')
                                            <i class="fa fa-arrow-up" style="color: #071"></i> 
                                        @elseif($product->status == 'down')
                                            <i class="fa fa-arrow-down" style="color: #B00"></i> 
                                        @endif
                                    </div>
                                     {{ $product->current_price }}
                                </td>
                                <td>
                                    @php
                                        $change = preg_replace("/[^0-9.%-]/", "", $product->price_change_amount);
                                        $percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent)
                                    @endphp

                                    @if($product->status == 'down')
                                        <p style="color: #B00">${{ $change }}</p>
                                    @elseif($product->status == 'up')
                                        <p style="color: #071;">${{ $change }}</p>
                                    @elseif($product->price_change_amount == null)
                                    <p> </p>
                                    @else
                                    <p>${{ $change }}</p>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent)
                                    @endphp

                                    @if($product->status == 'down')
                                        <p style="color: #B00">{{ $percent }}</p>
                                    @elseif($product->status == 'up')
                                        <p style="color: #071;">{{ $percent }}</p>
                                    @else
                                    <p>{{ $percent }}</p>
                                    @endif
                                </td>
                                <style type="text/css">
                                    table.table tr td div.bt-oup { display:none;}
                                    table.table tr:hover td div.bt-oup { display:inline-block;}
                                    .btn-hv-dark:hover{
                                        border-color: #000;
                                    }
                                </style>
                                <td>
                                    <div class="bt-oup">
                                        

                                        <form action="{{ route('products.destroy', $product->pro_id) }}" method="POST">

                                            <a class="btn btn-md btn-success btn-square btn-hv-dark btn-sm" href="{{ route('product.buy', $product->id) }}">Buy</a>

                                            <a class="btn btn-md btn-info btn-square btn-hv-dark btn-sm" href="{{ route('product.sell', $product->id) }}">Sell</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-md btn-danger btn-square btn-hv-dark btn-sm">Delete</button>
                                        </form>  
                                    </div>
                                </td>   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {!! $watchlist->links() !!} --}}
              </div>
              <div id="mytrade" class="tab-pane fade">
                  <h3>My Trades</h3>
                  <table class="table" id="dTable3">
                    <thead>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Cost (+/-) </th>
                        <th>Action</th>
                        <th>PL</th>
                        <!-- <th style="width: 230px;">Action</th> -->
                    </thead>
                    <tbody>
                        @foreach ($mytrade as $key => $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->date }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->total_cost }}</td>
                            <style type="text/css">
                                table.table tr td div.bt-oup { display:none;}
                                table.table tr:hover td div.bt-oup { display:inline-block;}
                                .btn-hv-dark:hover{
                                    border-color: #000;
                                }
                            </style>
                            <td>
                                @if ($product->trade_status == 'buy')
                                    <a class="btn btn-md btn-success btn-square btn-hv-dark btn-sm" href="{{ route('share.sell', $product->trade_id) }}">Sell</a>
                                @elseif ($product->trade_status == 'sell')
                                    <a class="btn btn-md btn-danger btn-square btn-hv-dark btn-sm" href="{{ route('product.buy', $product->trade_id) }}">Buy</a>
                                @endif
                            </td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $mytrade->links() !!} --}}
              </div>
              <div id="menu3" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
          </div>
      </div>
  </div>
</div>
</section>

<!-- <script type="text/javascript">
    setTimeout(function () {
        location.reload()
    }, 300000);
</script> -->

@endsection