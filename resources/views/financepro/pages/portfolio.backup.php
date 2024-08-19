<!-- <section class="sidebar-wrapper right-sidebar">
        <div class="container">
            <div class="col-md-10 top-margin-lg">
                {{-- @foreach ($products as $key => $product) --}}
                <div class="post border-bottom-style-1 bottom-margin-sm bottom-padding-sm"> -->

                    <!-- <div class="post-title bottom-line bottom-margin-vsm"> -->
                        <!-- POST TITLE -->
                        <!-- <h4 class="font-weight-lbold text-capitalize"><a class="text-color-hover" href="#">{{ $product->name }}</a></h4>
                        </div> -->

                    <!-- <div class="row">
                        <div class="col-md-2"> -->
                            <!-- IMAGE -->
                            <!-- <div class="post-image">
                                <img class="img-responsive" src="{{ $product->image }}" width="80" height="80" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-title bottom-line bottom-margin-vsm">
                                <h4 class="font-weight-lbold text-capitalize">{{ $product->name }}</h4>
                            </div>
                            <h5 class="text-capitalize">Current Price: 
                                {{ $product->current_price }}
                            </h5>
                            <h6 class="text-capitalize">Price Change: 
                                @php
                                    $change = preg_replace("/[^0-9.%-]/", "", $product->price_change_amount);
                                @endphp

                                @if($product->status == 'down')
                                    <span style="color: #B00">${{ $change }}</span>
                                @else
                                    <span style="color: #071;">${{ $change }}</span>
                                @endif
                            </h6>
                            <p class="text-capitalize">Price Change Percent: 
                                @php
                                    $percent = preg_replace("/[^0-9.%-]/", "", $product->price_change_percent)
                                @endphp

                                @if($product->status == 'down')
                                    <span style="color: #B00">{{ $percent }}</span>
                                @else
                                    <span style="color: #071;">{{ $percent }}</span>
                                @endif
                            </p>
                       </div>
                       <div class="col-md-4">
                           <div class="pull-right">
                             <form action="{{ route('products.destroy',$product->id) }}" method="POST"> -->

                                <!-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> -->

                                    <!-- <style type="text/css">
                                        .btn-hv-dark:hover{
                                            border-color: #000;
                                        }
                                    </style>

                                    

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-md btn-danger btn-square btn-hv-dark">Delete</button>
                                </form>
                           </div>
                       </div>
                   </div>
               </div>
              {{-- @endforeach --}}

               {{-- {!! $products->links() !!} --}}

           </div>
       </div>
   </section> -->





   <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Current Price</th>
                        <th style="width: 230px;">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($watchlist as $key => $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <style type="text/css">
                                table.table tr td div.bt-oup { display:none;}
                                table.table tr:hover td div.bt-oup { display:inline-block;}
                                .btn-hv-dark:hover{
                                    border-color: #000;
                                }
                            </style>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $watchlist->links() !!}







                