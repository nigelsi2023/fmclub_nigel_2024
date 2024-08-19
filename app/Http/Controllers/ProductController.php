<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Product;
use App\Product2;
use App\Trade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
    	session(['error' => 'You need to Log In to see the information on this page']);
        //$request->session->flash('success', 'You need to Log In to see the information on this page');
    	$this->middleware('auth');
    }
    
    public function index()
    {
    	$watchlist = DB::table('products')
    	->join('products2', 'products.product_id', '=', 'products2.id')
    	->where('user_id', Auth::id())
    	->select('products.*', 'products.id as pro_id', 'products2.*')
    	->orderBy('products.created_at', 'desc')
    	->get();

    	$summary = Product2::all();


    	$mytrade = DB::table('trades')
    	->join('products2', 'trades.product_id', '=', 'products2.id')
    	->where('trades.user_id', Auth::id())
    	->select('trades.*', 'trades.id as trade_id', 'products2.*', 'trades.status as trade_status')
    	->get();

      //dd($mytrade);  

    	return view('financepro.pages.portfolio',compact('summary', 'watchlist', 'mytrade'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //$products = DB::table('products2')->get();
        //return view('financepro.pages.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
    	$request->validate([
    		'product_id' => 'required',
    	]);

    	$product = new Product();
    	$product->user_id = Auth::id();
    	$product->product_id = $request->product_id;
    	$product->save();
    	return redirect(route('products.index'))->with('success','Product Added to Watchlist Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {

    	Product::find($id)->delete();

    	return redirect()->back()->with('success','Product Deleted From Watchlist Successfully');
    }

    public function buy($id){
    	$product = Product2::find($id);
    	return view('financepro.pages.product_buy', compact('product'));
    }

    public function buy_product(Request $request){
    	$this->validate( $request, [
			'quantity' => 'required|numeric|min:1',
    		'cost' => 'required|min:0'
    	]);

        //dd($request);

    	$trade = New Trade();
    	$trade->user_id = Auth::id();
    	$trade->product_id = $request->product_id;
    	$trade->date = date('d-m-Y');
    	$trade->quantity = $request->quantity;
    	$trade->price = $request->price;
    	$trade->total_cost = $request->cost;
    	$trade->status  = 'buy';
    	$trade->save();


    	return redirect(route('products.index'))->with('success', 'Share Bought Successfully.');
    }

    public function sell($id){
    	$product = DB::table('trades')
    	->join('products2', 'trades.product_id', '=', 'products2.id')
    	->where('trades.product_id', $id)
    	->where('trades.status', 'buy')
    	->select('trades.*', 'trades.id as trade_id', 'products2.*', 'trades.status as trade_status')
    	->orderBy('trades.created_at', 'desc')
    	->first();

      //$product = Product2::find($id);

    	$trade = DB::table('trades')
    	->where('user_id', Auth::id())
    	->where('product_id', $id)
    	->where('status', 'buy')
    	->get();

      //dd($product);

    	if($trade->count() > 0){
    		if($product->quantity > 0){
    			return view('financepro.pages.share_sell', compact('product'));
    		}else{
    			return redirect()->back()->with('err', 'You have not any stock.');
    		}
    	}
    	else{
    		return redirect()->back()->with('err', 'You have to buy share first.');
    	}
    }

    public function sell_product(Request $request){
    	$this->validate( $request, [
    		'quantity' => 'required|numeric|min:1',
    		'cost' => 'required|min:0'
    	]);

        //dd($request);

    	$trade = New Trade();
    	$trade->user_id = Auth::id();
    	$trade->product_id = $request->product_id;
    	$trade->date = date('d-m-Y');
    	$trade->quantity = $request->quantity;
    	$trade->price = $request->price;
    	$trade->total_cost = $request->cost;
    	$trade->status  = 'sell';
    	$trade->save();

    	return redirect(route('products.index'))->with('success', 'Share Sold Successfully.');
    }



    public function buy_share($id){
    	$product = DB::table('trades')
    	->join('products2', 'trades.product_id', '=', 'products2.id')
    	->where('trades.product_id', $id)
    	->select('trades.*', 'trades.id as trade_id', 'products2.*', 'trades.status as trade_status')
    	->first();

    	return view('financepro.pages.share_buy', compact('product'));
    }


    public function sell_share($id){
    	$product = DB::table('trades')
    	->join('products2', 'trades.product_id', '=', 'products2.id')
    	->where('trades.id', $id)
    	->select('trades.*', 'trades.id as trade_id', 'products2.*', 'trades.status as trade_status')
    	->first();

    	return view('financepro.pages.share_sell', compact('product'));
    }

    public function sell_share_process(Request $request, $id){
    	$this->validate( $request, [
    		'quantity' => 'required|numeric|min:1',
    		'cost' => 'required|min:0'
    	]);

        //dd($request);

    	$share = Trade::find($id);

        //dd($share);
    	
    	if($request->quantity <= $share->quantity){
    		if($share->quantity > 0){
    			$trade = New Trade();
    			$trade->user_id = Auth::id();
    			$trade->product_id = $request->product_id;
    			$trade->date = date('d-m-Y');
    			$trade->quantity = $request->quantity;
    			$trade->price = $request->price;
    			$trade->total_cost = $request->cost;
    			$trade->status  = 'sell';
    			$trade->save();

    			$old_trade = Trade::find($id);
    			$old_trade->quantity = $share->quantity - $request->quantity;
    			$numberAsFloat = ($share->quantity - $request->quantity) * $share->price;
    			$old_trade->total_cost = number_format($numberAsFloat, 2);
    			$old_trade->save();

    			return redirect(route('products.index'))->with('success', 'Share Sold Successfully.');
    		}else{
    			return redirect()->back()->with('err', 'You have no stock.');
    		}
    	}
    	else{
    		return redirect()->back()->with('err', 'Quantity must be less or equal to the product quantity.');
    	}
    }
}
