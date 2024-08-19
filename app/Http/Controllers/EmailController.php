<?php

namespace App\Http\Controllers;

use Mail;
use Subscribe;
use App\Contact;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    //
    public function index(){
        $subscribers = Subscribe::get();
        dd($subscribers);
    	echo "This is email page";
    }
    
 
    
    public function send_message(Request $request){
//     	$this->validate($request, [
// 	        'name' => ['required', 'string', 'max:255'],
// 	        'phone' => ['required', 'string',  'max:255'],
//             'email' => ['required', 'email', 'max:255'],
//             'howyou' => ['required', 'string'],
//             'subject' => ['required', 'string'],
//             'message' => ['required'],
//             'g-recaptcha-response' => 'required|captcha',
//     	]);
    	
//     	$message = new Contact();
        
//         $message->name = $request->name;
//         $message->phone = $request->phone;
//         $message->email = $request->email;
//         $message->howyou = $request->howyou;
//         $message->subject = $request->subject;
//         $message->message = $request->message;
//         $message->save();

//         $to_name = 'Admin';
// 		$to_email = 'admin@financialmarkets.club';
//         $from_name = $request->name;
//         $from_email = $request->email;
//         $subject = $request->subject;
        
//         //dd($request->email);

// 		$data = array('name'=> $to_name, 'name2'=> $request->name, 'phone'=> $request->phone, 'howyou' => $request->howyou, 'body' => $request->message);

// 		Mail::send('emails.test', $data, function($message) use ($to_name, $to_email, $subject,$from_name, $from_email) {
// 		$message->to($to_email, $to_name)
// 		->subject($subject);
// 		$message->from($from_email, $from_name);
// 		});

//         return redirect()->back()->with('success', 'Your mail has been sent successfully.');
    }

    
}
