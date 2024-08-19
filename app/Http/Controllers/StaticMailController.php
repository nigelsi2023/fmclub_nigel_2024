<?php

namespace App\Http\Controllers;
use Mail;
use DB;
use Illuminate\Http\Request;

class StaticMailController extends Controller
{


    public function index()
    {
        
        echo "test";
        
        // $to_email = 'scott.ih@staff-india.com';
        // $from_name = 'Financial Markets Club';
        // $from_email = 'info@financialmarkets.club';
        // $subject = 'New Signal';
        
        
//       	Mail::send('emails.testtt', $data, function($message) use ( $to_email, $subject,$from_name, $from_email) {
// 		$message->to($to_email)
// 		->subject($subject);
// 		$message->from($from_email, $from_name);
// 		});
		
		  //Mail::send('emails.testtt', $data, function($message) {
    //         $message->to('scott.ih@staff-india.com', 'John Doe')
    //         ->subject('From Laravel With Gmail');
    //         $message->from('info@financialmarkets.club',' Jesal Mithani');
 
    //       });



        // $data = array('name'=>"Hardik Parsania", "body" => "Gmail from Laravel");
    
        // Mail::send('emails.testtt', $data, function($message) {
        //     $message->to('scott.ih@staff-india.com', 'John Doe')
        //     ->subject('From Laravel With Gmail');
        //     $message->from('info@financialmarkets.club',' Jesal Mithani');
 
        //   });
 
        //   if (Mail::failures()) {
        //     return response()->Fail('Sorry! Please try again latter');
        //   }else{
        //     return response()->json('Yes, You have sent email to GMAIL from LARAVEL 5.8 !!');
        //   }
    }


  

}
