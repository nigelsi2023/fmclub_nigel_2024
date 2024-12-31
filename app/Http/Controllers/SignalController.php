<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use App\Order;
use App\Signal;
use App\Product;
use App\Signal2;
use App\Product2;
use Illuminate\Http\Request;
use App\Mail\Admin\Signal\Status\UpdateProfitMail;
use App\Mail\Admin\Signal\Status\UpdateStopMail;

class SignalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $signals = Signal::orderBy('id', 'DESC')->get();
        return view('admin.signals.index', compact('signals'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Product2::orderBy('id', 'DESC')->get();

        return view('admin.signals.signal_create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inform_subscriber = $request->inform_subscriber;
        // dd($request->all(), $inform_subscriber);

        $this->validate($request, [
            'item_name'     => 'required',
            'open_price'    => 'required|numeric|between:0,9999999.99',
            'target_price'  => 'required|numeric|between:0,9999999.99',
            'stop_loss'     => 'required|numeric|between:0,9999999.99',
            'signal_type'   => 'required',
            'signal_privacy' => 'required'
        ]);

        $tempImg = '';
        if ($request->hasFile('signal_img')) {
            $image = $request->file('signal_img');
            $tempImg = time() . '.' . $image->extension();
            $dest   = public_path('/images/signals');
            $image->move($dest, $tempImg);
        }

        $date = empty($request->signal_date) 
            ? now()->format('Y-m-d H:i') 
            : date('Y-m-d H:i', strtotime($request->signal_date));

        try {
            DB::transaction(function () use ($request, $tempImg, $date, $inform_subscriber) {
                $signal = new Signal();
                
                $signal->item_name      = $request->item_name;
                $signal->open_price     = $request->open_price;
                $signal->target_price   = $request->target_price;
                $signal->stop_loss      = $request->stop_loss;
                $signal->signal_date    = $date;
                $signal->signal_type    = $request->signal_type;
                $signal->signal_privacy = $request->signal_privacy;
                $signal->signal_img     = $tempImg;
                $signal->risk_per_trade = 200; // 10000 * 0.02
                $signal->loss_at_sl     = ($request->stop_loss - $request->open_price);

                $signal->save();
                // dd($signal);

                $Signal_name = $signal->item_name;
                $Signal_open = $signal->open_price;
                $Signal_trgt = $signal->target_price;
                $Signal_stop = $signal->stop_loss;
                $Risk_Reward = abs(round(($signal->target_price - $signal->open_price) / ($signal->open_price - $signal->stop_loss), 0));

                $values = $this->calculateValues($signal);

                if ($inform_subscriber == "Yes") {
                    $this->informSubscribers($Signal_name, $Signal_open, $Signal_trgt, $Signal_stop, $Risk_Reward, $values);
                }
            });
        } catch (\Exception $e) {
            dd('Failed to save signal: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to save signal: ' . $e->getMessage()]);
        }

        return redirect()->back()->with('message', 'Signal Successfully Saved.');
    }

    private function calculateValues($signal)
    {
        if (in_array($signal->item_name, ['XAU/USD', 'SP500', 'US2000', 'DJIA', 'NASDAQ'])) {
            return abs(round($signal->open_price - ($signal->status == '2' ? $signal->stop_loss : $signal->target_price), 4)) * 10;
        } elseif ($signal->item_name == 'XBR/USD') {
            return abs(round($signal->open_price - ($signal->status == '2' ? $signal->stop_loss : $signal->target_price), 4)) * 100;
        } else {
            return abs(round($signal->open_price - ($signal->status == '2' ? $signal->stop_loss : $signal->target_price), 4)) * 10000;
        }
    }

    private function informSubscribers($Signal_name, $Signal_open, $Signal_trgt, $Signal_stop, $Risk_Reward, $values)
    {
        $allUsers = Order::select(['id', 'fname', 'email', 'package_id', 'payment_status'])->get();

        foreach ($allUsers as $user) {
            $usermail = $user->email;
            $user_name = $user->fname;
            $subject = $user_name . ' - New Trade Idea for You - ' . $Signal_name;

            $data = [
                'Signal_name' => $Signal_name,
                'Signal_open' => $Signal_open,
                'Signal_trgt' => $Signal_trgt,
                'Signal_stop' => $Signal_stop,
                'Risk_Reward' => $Risk_Reward,
                'values'      => $values,
                'user_name'   => $user_name,
                'user_pymnt'  => $user->payment_status,
                'user_pakge'  => $user->package_id,
                'usermail'    => $usermail,
            ];

            $emailTemplate = $user->payment_status == 1 && $user->package_id > 1 
                ? 'emails.SendSignalToUsers' 
                : 'emails.SendSignalToFreeUsers';

            try {
                Mail::send($emailTemplate, $data, function ($message) use ($usermail, $subject) {
                    $message->to($usermail)->subject($subject);
                    $message->from('nasir.financialmarketsclub@gmail.com', 'Financial Markets Club');
                });
            } catch (\Exception $e) {
                dd('Failed to send mail: ' . $e->getMessage());
            }
        }
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
        return view('admin.signals.signal_edit', compact('signal', 'items'));
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

        $signal = Signal::find($id);

        $this->validate($request, [
            'item_name'     => 'required',
            'open_price'    => 'required|numeric|between:0,9999999.99',
            'target_price'  => 'required|numeric|between:0,9999999.99',
            'stop_loss'     => 'required|numeric|between:0,9999999.99',
            // 'closed_price'  => 'required|numeric|between:0,9999999.99',
            'signal_date'   => 'required',
            'signal_type'   => 'required',
            'signal_privacy' => 'required'
        ]);

        if ($request->hasFile('signal_img')) {

            $image = $request->file('signal_img');
            $tempImg = time() . rand(1, 100) . '.' . $image->extension();
            $dest   = public_path('/images/signals');

            $image->move($dest, $tempImg);

            if (!empty($signal)) {
                $destination_path  = 'images/signals/';
                unlink($destination_path . $signal->signal_img);
            }
        } else {
            $tempImg = $signal->signal_img;
        }

        $signal->item_name      = $request->item_name;
        $signal->open_price     = $request->open_price;
        $signal->target_price   = $request->target_price;
        $signal->stop_loss      = $request->stop_loss;
        // $signal->closed_price   = $request->closed_price;
        $signal->signal_date    = date('Y-m-d', strtotime($request->signal_date));
        $signal->signal_type    = $request->signal_type;
        $signal->signal_privacy = $request->signal_privacy;
        $signal->signal_img     = $tempImg;
        $signal->save();
        return redirect(route('signal.index'))->with('message', 'Signal Updated Successfully.');
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
    public function checkout($id = null)
    {
        $page_title = "Checkout Page";
        $packageId = $id;
        if ($packageId == null) {
            redirect()->back();
        } else {
            return view('financepro.pages.checkout', compact('packageId', 'page_title'));
        }
    }

    public function updateSignalStatus(Request $request, $id)
    {
        $signal = Signal::find($id);

        $signal->status = $request->signalStatus;

        $subscribers = DB::table('orders')->select(['id', 'fname', 'email'])->get();


        $pipsResult = 0;
        if ($signal->item_name == 'XAU/USD' || $signal->item_name == 'SP500' || $signal->item_name == 'US2000' || $signal->item_name == 'DJIA') {
            if ($signal->status == 2) {
                $pipsResult = abs(round($signal->open_price - $signal->stop_loss, 4)) * 10;
            } else {
                $pipsResult = abs(round($signal->open_price - $signal->target_price, 4)) * 10;
            }
        } else if ($signal->item_name == 'NASDAQ') {
            if ($signal->status == 2) {
                $pipsResult = abs(round($signal->open_price - $signal->stop_loss, 4)) * 10;
            } else {
                $pipsResult = abs(round($signal->open_price - $signal->target_price, 4)) * 10;
            }
        } else if ($signal->item_name == 'XBR/USD') {
            if ($signal->status == 2) {
                $pipsResult = abs(round($signal->open_price - $signal->stop_loss, 4)) * 100;
            } else {
                $pipsResult = abs(round($signal->open_price - $signal->target_price, 4)) * 100;
            }
        } else {
            if ($signal->status == 2) {
                $pipsResult = abs(round($signal->open_price - $signal->stop_loss, 4)) * 10000;
            } else {
                $pipsResult = abs(round($signal->open_price - $signal->target_price, 4)) * 10000;
            }
        }


        // Mail::to('nigel.staffindia@gmail.com')->send(new UpdateProfitMail('Nigel', 'nigel.staffindia@gmail.com', $pipsResult, $signal->item_name));

        // dd($id, $request->signalStatus, $pipsResult, $signal->item_name, $subscribers[0]->fname, $subscribers[0]->email);

        if ($signal->save()) {
            // if ($request->signalStatus == 1) {
            //     // Send the profit email to all subcribers
            //     foreach ($subscribers as $subscriber) {
            //         // dd($subscriber, 'nigel.staffindia@gmail.com');
            //         Mail::to($subscriber->email)->send(new UpdateProfitMail($subscriber->fname, $subscriber->email, $pipsResult, $signal->item_name));
            //     }
            // } elseif ($request->signalStatus == 2) {
            //     // Send the stopped email to all subcribers
            //     foreach ($subscribers as $subscriber) {
            //         Mail::to($subscriber->email)->send(new UpdateStopMail($subscriber->fname, $subscriber->email, $pipsResult, $signal->item_name));
            //     }
            // } else {
            //     return redirect()->route('signal.index')->with('message', 'Signal Updated to Live.');
            // }
            return redirect()->route('signal.index')->with('message', 'Signal Updated Successfully.');
        } else {
            return redirect()->route('signal.index')->with('message', 'Signal Not Updated.');
        }
    }

    public function signalRegisterdUser()
    {

        $registerdUser = Order::orderBy('id', 'DESC')->get();
        $allmail = DB::table('new_mail_save_and_send')->orderBy('id', 'DESC')->get();
        return view('admin.signals.registerdSignalOrderedUser', compact('registerdUser', 'allmail'));
    }


    //sammy corporate_trade_ideas.blade 7/12/2022
    public function corporateTradeIdeas()
    {
        //
        $signals = Signal::orderBy('id', 'DESC')->get();
        return view('admin.signals.index', compact('signals'));
    }
}
