<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
use App\Package;
use App\Order;
use App\Subscribe;
use App\Http\Controllers\Session;
class PaymentController extends Controller
{
    private $gateway;


    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }
    
    public function index()
    {
        return view('signup_complete');
    }

    public function pay(Request $request) {
        
        // $data = $request->all();
        // $this->validate( $request, [
        //     'package_id'    => 'required',
        //     'fname'         => 'required',
        //     'lname'         => 'required',
        //     'email'         => 'required|email',
        //     'mobile'        => 'required',
        //     'address'       => 'required',
        //     'country'       => 'required',
        // ]);
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $location = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        
        $data                = New Order();
        $data->package_id    = $request->package_id;
        $data->fname         = $request->fname;
        $data->lname         = $request->lname;
        $data->email         = $request->email;
        $data->mobile        = $request->mobile;
        $data->address       = $request->address;
        $data->country       = $request->country;
        $data->country2      = $location->country;
        $data->reference     = $request->reference;
        $data->terms         = $request->terms;
        $data->is_approved   = 0;
        
        $result = $data->save();

        if($result){ 
            $arr_data = array(
                    'package_id' => $data->package_id,
                );
        	$arr = array('msg' => 'Contact Added Successfully!', 'status' => true,'data'=>$arr_data);
        	
        	//mac start
        	// mac === auto mail user data to admin when user subscribe to signal pakage ===
        	
    		$to_email = 'nasir.financialmarketsclub@gmail.com';
    // 		$to_email = 'scott.staffindia02@gmail.com';
            $from_name = 'Financial Markets Club';
            $from_email = 'nasir.financialmarketsclub@gmail.com';
            // $from_email = 'scott.financialmarketsclub@gmail.com';
            $subject = 'You have received a new data from Financial Markets Club';
    
    		$data = array(
    		    'pid'=> $request->package_id,
    		    'name'=> $request->fname,
    		    'lastname' => $request->lname,
    		    'email' => $request->email,
    		    'mbile' => $request->mobile,
    		    'aaddr' => $request->address,
    		    'cntry' => $request->country,
    		    'refr' => $request->reference,
    		    );

    
    // commented by scott
    		Mail::send('emails.subscribe2', $data, function($message) use ( $to_email, $subject,$from_name, $from_email) {
    		$message->to($to_email)
    		->subject($subject);
    		$message->from($from_email, $from_name);
    		});
            
            
            // mac === auto mail to user when user subscribe to signal pakage ===
            
    		$to_email = $request->email;
            $from_name = 'Financial Markets Club';
            $from_email = 'nasir.financialmarketsclub@gmail.com';
            // $from_email = 'scott.financialmarketsclub@gmail.com';
            $subject = $request->fname.' - Verify Yourself';
            
            $p_id = $request->package_id;
            $p_ct = DB::table('packages')->where(function ($query) use ($p_id) {$query->where('id', '=', $p_id);})->pluck('p_name');
            
    		$data = array(
    		    'name'=> $request->fname,
    		    'pcat'=> $p_ct["0"],
    		    
    		    );

            // commented by scott
            try {
        		Mail::send('emails.userMail', $data, function($message) use ( $to_email, $subject,$from_name, $from_email) {
        		$message->to($to_email)
        		->subject($subject);
        		$message->from($from_email, $from_name);
        		});
            } 
            catch(\Exception $e) {
                    // Do nothing 
            }
            
            // mac === when user Subscribe a new Signal the email and name wiil also save to subscribes table in database ===
            
            $news = new Subscribe;
            $isExist = Subscribe::select("*")->where("email", $request->email)->doesntExist();
            if ($isExist) {
               
                $news->name = $request->fname;
                $news->email = $request->email;
                $news->subscriber_from = 'Signal Subs';
                $news->save();
            }
            
        	// mac end
    	
        } else
        {
            $arr = array('msg' => 'Contact Add Unsuccessful!', 'status' => false,'data'=>$arr_data);
        }
        
        return Response()->json($arr);
        
    }

    // public function pay(Request $request) {
    //     // dd($request);
    //     $order = New Order();
    //     $order->package_id    = $request->package_id;
    //     $order->fname         = $request->fname;
    //     $order->lname         = $request->lname;
    //     $order->email         = $request->email;
    //     $order->mobile        = $request->mobile;
    //     $order->address       = $request->address;
    //     $order->country       = $request->country;
    //     $order->reference     = $request->reference;

    //     $order->is_approved   = 0;
    //     $order->save();
        
    // 	$subscribe = new Subscribe();
        
    //     $subscribe->name = $request->fname.' '.$request->lname;
    //     $subscribe->email = $request->email;
    //     $subscribe->save();
    
        
    //     $request->session()->put('packageOrderId', $order->id);
    //     $request->session()->put('packageID', $request->package_id);
        
     
    //     //sammy
    //     if($request->package_id == 1 || $request->package_id == 4){
    //         return view('signup_complete');
    //     }else{
    //         try {
    //             $response = $this->gateway->purchase(array(
    //                 'amount' => $request->amount,
    //                 'currency'=> env('PAYPAL_CURRENCY'),
    //                 'returnUrl' => url('success'),
    //                 'cancelUrl' => url('error')
    //             ))->send();
                
    //             if( $response->isRedirect()){
    //                 $response->redirect();
    //             } else {
    //                 return $response->getMessage();
    //             }
                
    //         } catch (\Throwable $th) {
    //             return $th->getMessage();
    //         }
    //     }
    // }

    public function success(Request $request)
    {
        if($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();
            if($response->isSuccessful()){
                $arr = $response->getData();

                $payment = new Payment(); 
                $payment->orderId    = $request->session()->get('packageOrderId', 'default');
                $payment->payment_id = $arr['id'];
                $payment->payer_id   = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email= $arr['payer']['payer_info']['email'];
                $payment->amount     = $arr['transactions'][0]['amount']['total'];
                $payment->currency   = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();
                
              
               
                $packageId = $request->session()->get('packageID', 'default');
                return redirect('/checkout/'.$packageId)->with('message', 'Payment is Successfull. Your Transaction ID is: '.$arr['id']);
                // return "Payment is Successfull. Your Transaction ID is: ".$arr['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return "Payment declined!!";
        }
        
    }

    public function error()
    {
        return "User Declined the payment!";
    }

   //sammy
    public function signup_complete(){
        return view('signup_complete');
        
    }

}
