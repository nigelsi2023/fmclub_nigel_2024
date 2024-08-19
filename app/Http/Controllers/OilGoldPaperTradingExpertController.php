<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Contact;
use App\Signal;

class OilGoldPaperTradingExpertController extends Controller
{

    // public function index()
    // {
    //     $signals = DB::table('signals')->orderBy('signal_date','DESC')->where('item_name', '!=', 'GBP/USD')->where('item_name', '!=', 'EUR/USD')->get();
    //     $countRow = count($signals);
    //     $liveCount = DB::table('signals')->WHERE('status',0)->where('item_name', '!=', 'GBP/USD')->where('item_name', '!=', 'EUR/USD')->count();
    //     $profitCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',1)->where('item_name', '!=', 'GBP/USD')->where('item_name', '!=', 'EUR/USD')->count();
    //     $lossCount = DB::table('signals')->where('signal_privacy','public')->WHERE('status',2)->where('item_name', '!=', 'GBP/USD')->where('item_name', '!=', 'EUR/USD')->count();
        
    //     return view('financepro.pages.oil_gold_paper_trading_expert',['signals'=>$signals,'countRow'=>$countRow, 'profitCount'=>$profitCount, 'lossCount'=>$lossCount , 'liveCount'=>$liveCount, ]);
    // }


    public function index() {
        $signals = Signal::whereItemName('XBR/USD')->orderBy('signal_date', 'DESC')->get();

        $liveCount = Signal::whereStatus(0)->whereItemName('XBR/USD')->count();
        $profitCount = Signal::whereSignalPrivacy('public')->whereStatus(1)->whereItemName('XBR/USD')->count();
        $lossCount = Signal::whereSignalPrivacy('public')->whereStatus(2)->whereItemName('XBR/USD')->count();
        // dd($signals);

        return view('financepro.pages.oil_gold_paper_trading_expert', compact([
                                                                        'signals',
                                                                        'liveCount', 
                                                                        'profitCount', 
                                                                        'lossCount'
                                                                    ]));
    }



    public function sendInfo(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string',  'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'howyou' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required'],
        ]);

        $message = new Contact();

        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->howyou = $request->howyou;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        // dd($request);

        $to_name = 'Admin';
        // $to_email = 'nasir.financialmarketsclub@gmail.com';
        $to_email = 'nasir@financialmarkets.club';
        $from_name = $request->name;
        $from_email = $request->email;
        $subject = $request->subject;
        
        try {
            $data = [
                'name'=> $to_name, 
                'name2'=> $request->name, 
                'phone'=> $request->phone, 
                'howyou' => $request->howyou, 
                'body' => $request->message
            ];

            // Send Mail to Admin with Form Info
            Mail::send('emails.test', $data, function($message) use ($to_name, $to_email, $subject, $from_name, $from_email) {
                $message->to($to_email, $to_name)->subject($subject);
                $message->from($from_email, $from_name);
            });

            // Send Mail to User
            Mail::send('emails.oilgoldenquiry', $data, function($message) use ($to_name, $to_email, $from_name, $from_email) {
                $message->to($from_email, $from_name)->subject('Oil, Gold Paper Trading Expert');
                $message->from($to_email, $to_name);
            });

            /**
             * -----------------------------------------------------
             * Send Mail Info to MailerLite                     ----
             *                                                  ----
             * The Helper Function "send_to_mailer_lite()"      ----
             * comes from "app/helpers.php"                     ----
             * -----------------------------------------------------
             */
            send_to_mailer_lite($request->email);
        } catch (Exception $e) {
            return redirect()->back()->with('full_name', $e);
        }
        // return redirect()->back()->with('full_name', $request->name);
        return redirect()->route('contact.success', ['name' => $request->name])->with('success', 'Your mail has been sent successfully.');
    }
}
