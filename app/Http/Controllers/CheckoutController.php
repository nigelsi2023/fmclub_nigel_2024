<?php

namespace App\Http\Controllers;

use App\Signal;
use App\Package;
use App\Order;
use App\Product;
use App\Product2;
use App\Country;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page_title = "Checkout Page | Financial Markets Club";
        $packageId  = $id;
        $package    = Package::WHERE('id',$id)->first();
        $countries  = Country::all();

        // $ip = $_SERVER['REMOTE_ADDR'];
        // $location = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        // dd($ip, $location, $countries[0], $package);
        
        return view('financepro.pages.checkout',compact('packageId','page_title','package','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'package_id' => 'required|integer',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'companyName' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:255',
            'address' => 'required|string',
            'country' => 'required|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'paymentMethod' => 'nullable|string|max:255',
            'terms' => 'required|integer',
        ]);

        $latestId = Order::latest()->pluck('id')->first();

        $order = new Order();
        $order->id = $latestId + 1;
        $order->package_id = $request->package_id;
        $order->fname = $request->fname;
        $order->lname = $request->lname;
        $order->companyName = $request->companyName ?? null;
        $order->email = $request->email;
        $order->mobile = $request->mobile;
        $order->address = $request->address;
        $order->country = $request->country;
        $order->terms = $request->terms;
        $order->state = $request->state ?? null;
        $order->zip = $request->zip ?? null;
        $order->paymentMethod = $request->paymentMethod ?? null;
        $order->cardName = $request->cardName ?? null;
        $order->cardNumber = $request->cardNumber ?? null;
        $order->cardExp = $request->cardExp ?? null;
        $order->cardCVV = $request->cardCVV ?? null;
        $order->is_approved = 0;

        $order->save();

        // Return JSON response for AJAX
        return response()->json([
            'status' => true,
            'message' => 'Order Placed Successfully.',
            'data' => [
                'package_id' => $order->package_id,
            ],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $signal = Signal::find($id);
        $items = Product2::orderBy('id', 'DESC')->get();
        return view('admin.signals.signal_edit', compact('signal','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate( $request, [
            'item_name'     => 'required',
            'open_price'    => 'required|numeric|between:0,9999999.99',
            'target_price'  => 'required|numeric|between:0,9999999.99',
            'stop_loss'     => 'required|numeric|between:0,9999999.99',
            'closed_price'  => 'required|numeric|between:0,9999999.99'
        ]);

        $signal = Signal::find($id);
        $signal->item_name      = $request->item_name;
        $signal->open_price     = $request->open_price;
        $signal->target_price   = $request->target_price;
        $signal->stop_loss      = $request->stop_loss;
        $signal->closed_price   = $request->closed_price;
        $signal->save();
        return redirect( route('signal.index') )->with('message', 'Signal Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Signal::find($id)->delete();
        return redirect()->back()->with('message', 'Signal Deleted Successfully.');
    }
    
    
    // check out page
    public function checkout($id = null){
        $page_title = "Checkout Page";
        $packageId = $id;
        if($packageId == null){
            redirect()->back();
        } else {
            return view('financepro.pages.checkout',compact('packageId','page_title'));
        }
    } 
    
    
    
 
}
