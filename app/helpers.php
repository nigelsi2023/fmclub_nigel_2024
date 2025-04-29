<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require_once 'PHPMailer/src/Exception.php';
// require_once 'PHPMailer/src/PHPMailer.php';
// require_once 'PHPMailer/src/SMTP.php';



if (! function_exists('smtp_email_send')) {
    function smtp_email_send($to_email,$subject,$from_name = null, $template,$msgBody,$controllerName) {
        try{

            // This is the SMTP mail server
            $mail->Host = "smtp.gmail.com";

            //$mail->SMTPDebug = 1;

            $mail->IsSMTP();
            // SMTP authentication
            $mail->SMTPAuth = true;
            $mail->Username = "nasir.financialmarketsclub@gmail.com";
            $mail->Password = "fmsnogjjbgjwvvrl";
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            return true;

        } catch (Exception $e) {
                 //Do Something
            return false;
        }
        return $msg;
    }



    if (! function_exists('send_smtp_email')) {
        function send_smtp_email($to_email,$subject,$template,$message){
            $from_name = 'Financial Markets Club';
            $from_email = 'nasir.financialmarketsclub@gmail.com';

            Mail::send($template, ['bodyMessage' => $message], function($message) use ( $to_email, $subject,$from_name, $from_email) {
        		$message->to($to_email)
        		->subject($subject);
        		$message->from($from_email, $from_name);
        	});

        }

    }

}



/**
 * ========================================
 * ======== Mailer Lite ===================
 * ========================================
 */
if (! function_exists('send_to_mailer_lite')) {
    function send_to_mailer_lite($emailAddress){
        $apiKey = config('app.mailer_lite.api_key');
        $groupId = config('app.mailer_lite.group_id');

        $url = "https://api.mailerlite.com/api/v2/groups/{$groupId}/subscribers";

        $headers = array(
            "content-type: application/json",
            "x-mailerlite-apikey: " . $apiKey
        );

        $data = array(
            "email" => $emailAddress
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        curl_close($ch);

        return response()->json([
            "message" => "Email sent successfully",
            "response" => $response
        ]);
    }
}

if (!function_exists('get_youtube_video_id')) {
    function get_youtube_video_id($url) {
        $videoId = '';

        // Regular expressions to match various YouTube URL formats
        $patterns = [
            '/youtube\.com\/watch\?v=([^\&\?\/]+)/',
            '/youtube\.com\/embed\/([^\&\?\/]+)/',
            '/youtube\.com\/v\/([^\&\?\/]+)/',
            '/youtu\.be\/([^\&\?\/]+)/',
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $matches)) {
                $videoId = $matches[1];
                break;
            }
        }

        return $videoId;
    }
}