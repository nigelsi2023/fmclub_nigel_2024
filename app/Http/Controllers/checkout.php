<?php

namespace App\Http\Controllers;

use App\Signal;
use App\Package;
use App\Product;
use App\Product2;
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
        //
        $page_title = "Checkout Page | Financial Markets Club";
        $packageId  = $id;
        $package    = Package::WHERE('id',$id)->first();
        dd($package);
        // return view('financepro.pages.checkout',compact('packageId','page_title'));
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
        //
        $this->validate( $request, [
            'item_name'     => 'required',
            'open_price'    => 'required|numeric|between:0,9999999.99',
            'target_price'  => 'required|numeric|between:0,9999999.99',
            'stop_loss'     => 'required|numeric|between:0,9999999.99',
            'closed_price'  => 'required|numeric|between:0,9999999.99'
        ]);

        $signal = New Signal();
        
        $signal->item_name      = $request->item_name;
        $signal->open_price     = $request->open_price;
        $signal->target_price   = $request->target_price;
        $signal->stop_loss      = $request->stop_loss;
        $signal->closed_price   = $request->closed_price;
        // dd($signal);
        $signal->save();
        
        return redirect()->back()->with('message', 'Signal Successfully Saved.');
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
