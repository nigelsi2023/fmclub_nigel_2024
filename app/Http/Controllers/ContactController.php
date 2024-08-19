<?php

namespace App\Http\Controllers;

use Mail;
use App\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    
    //
    public function index(){
    	return view('financepro.pages.contact_us');
    }
    
    public function success($name)
    {
        // dd($name);
    	return view('financepro.pages.contact.success', compact(['name']));
    }
 
    
    public function send_message(Request $request){
    	$this->validate($request, [
	        'name' => ['required', 'string', 'max:255'],
	        'phone' => ['required', 'string',  'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'howyou' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required'],
            'g-recaptcha-response' => 'required|captcha',
    	]);
    	
    	$message = new Contact();
        
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->howyou = $request->howyou;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        
        /**
         * -----------------------------------------------------
         * Send Mail Info to MailerLite                     ----
         *                                                  ----
         * The Helper Function "send_to_mailer_lite()"      ----
         * comes from "app/helpers.php"                     ----
         * -----------------------------------------------------
         */
        send_to_mailer_lite($request->email);

        $to_name = 'Admin';
        // $to_email = 'nasir.financialmarketsclub@gmail.com';
        $to_email = 'nasir@financialmarkets.club';
        $from_name = $request->name;
        $from_email = $request->email;
        $subject = $request->subject;
        
        // dd($request->email);
        try {
            $data = array('name'=> $to_name, 'name2'=> $request->name, 'phone'=> $request->phone, 'howyou' => $request->howyou, 'body' => $request->message);

            Mail::send('emails.test', $data, function($message) use ($to_name, $to_email, $subject, $from_name, $from_email) {
                $message->to($to_email, $to_name)->subject($subject);
                $message->from($from_email, $from_name);
            });

        } catch (Exception $e) {
            //Do Something
        }
        return redirect()->route('contact.success', ['name' => $request->name])->with('success', 'Your mail has been sent successfully.');
    }    
}
