<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProcessEmailQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:process-queue';

    /**
     * For cPanel: /opt/cpanel/ea-php74/root/usr/bin/php /home/staffi7/financialmarkets.club/fmclub_nigel_2024/artisan email:process-queue
     */

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process the email queue and send emails with a gap of 1 minute';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            // Fetch the first email from the queue
            $email = DB::table('email_queue')->orderBy('created_at')->first();

            if ($email) {
                try {
                    // Decode the JSON email data
                    $emailData = json_decode($email->email_body, true);

                    // Send the email using the template stored in the queue
                    Mail::send($emailData['email_template'], $emailData, function ($message) use ($email, $emailData) {
                        $message->to($email->user_email)
                                ->subject($email->email_subject)
                                ->from('nasir.financialmarketsclub@gmail.com', 'Financial Markets Club');
                    });

                    // Delete the email from the queue after it is sent
                    DB::table('email_queue')->where('id', $email->id)->delete();

                    $this->info("Email sent to {$email->user_email}");
                } catch (Exception $e) {
                    // Update the queue with the failed status
                    DB::table('email_queue')->where('id', $email->id)->update(['is_failed' => true]);

                    $this->error("Failed to send email to {$email->user_email}: " . $e->getMessage());
                }
            } else {
                $this->info("No emails in the queue.");
                break; // Exit the loop if no emails are left in the queue
            }

            // Wait for 10 seconds before processing the next email
            sleep(10);
        }
    }


    /**
     * For testing purpose if the "php artisan email:process-queue command" is working or not
     */
    // public function handle()
    // {
    //     try {
    //         // Send a simple test email
    //         Mail::raw('This is a test email sent from the email queue processing command.', function ($message) {
    //             $message->to('nigel.pi@staff-india.com')
    //                     ->subject('Test Email from Email Queue')
    //                     ->from('nasir.financialmarketsclub@gmail.com', 'Financial Markets Club');
    //         });

    //         $this->info("Test email sent to nigel.pi@staff-india.com");
    //     } catch (Exception $e) {
    //         $this->error("Failed to send test email: " . $e->getMessage());
    //     }
    // }
}
