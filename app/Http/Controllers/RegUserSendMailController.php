<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Post;
use App\Order;
use Mail;
use Session;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

class RegUserSendMailController extends Controller
{
    
    public function sendmail(Request $request)
    {
        $user_id = $request->input('uid');
        $subject = $request->input('uname');
        $message = $request->input('umsg');

        //Inserting the mail data to database
        $data=array('user_id'=>$user_id,"subject"=>$subject,"message"=>$message);
        DB::table('new_mail_history')->insert($data);
        
        // Set who the email is sending to
        $to_email = $request->umail;
        // $to_email = 'nigel.staffindia@gmail.com';
        $from_name = 'Financial Markets Club';
        $from_email = 'nasir.financialmarketsclub@gmail.com';
        // Setup PHPMailer
        // $mail = new PHPMailer(true);
        
        try {
            

        		Mail::send('emails.singlemailtouser', ['bodyMessage' => $message], function($message) use ( $to_email, $subject,$from_name, $from_email) {
        		$message->to($to_email)
        		->subject($subject);
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
                send_to_mailer_lite($request->to_email);
        
        
        }catch (Exception $e) {
             //Do Something
        }

        return redirect()->back()->with('message', 'Email Send Successfully.');
    }
    
    
    
    public function viewmail(Request $request, $id)
    {
        
        $mailhistory = DB::table('new_mail_history')->where(function ($query) use ($id) {$query->where('user_id', '=', $id);})->select('id','user_id','subject','message','created_at')->orderBy('id', 'DESC')->get();
        $mailhistory2 = DB::table('new_mail_save_and_send')->where(function ($query) use ($id) {$query->where('user_id', '=', $id);})->select('id','user_id','subject','message','created_at')->orderBy('id', 'DESC')->get();
        
        $maildatas = $mailhistory->concat($mailhistory2);
        
        return view('admin.signals.userMailHistory', compact('maildatas'));
        
        
    }
    
    
    
}
