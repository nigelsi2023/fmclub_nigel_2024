<?php

namespace App\Http\Controllers;

use Mail;
use App\Subscribe;
// mac
use App\User;
// mac
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Cookie;

class SubscriberController extends Controller
{
    //
    public function add(Request $request){
    	$this->validate($request, [
	        'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255', 'unique:subscribes'],
    	]);
    	
    	$subscribe = new Subscribe();
        
        $subscribe->name = $request->name;
        $subscribe->email = $request->email;
        $subscribe->save();

        $to_name = $request->name;
		$to_email = $request->email;
        $from_name = 'Financial Markets Club';
        // $from_email = 'noreply@financialmarkets.club';
        $from_email = 'nasir.financialmarketsclub@gmail.com';
        $subject = 'You have successfully subscribe to Financial Markets Club';

        //dd($request->email);

		$data = array('name'=> $to_name);
        
        try {
    		Mail::send('emails.subscribe', $data, function($message) use ($to_name, $to_email, $subject,$from_name, $from_email) {
                $message->to($to_email, $to_name)->subject($subject);
                $message->from($from_email, $from_name);
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
        
        } 
        catch(\Exception $e) {
                // Do nothing 
        }

        if ($request->discount == true) {
            return redirect()->back()->with('scroll_to', '#newsletterSection')->cookie('discount50percent', '50', 7200);
        } else {
            return redirect()->back()->with('success_message', 'Your have subscribed successfully.');
        }
        
    }
}
