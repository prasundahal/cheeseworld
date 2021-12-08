<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;
    public $token;
    public $email;


    public function __construct($name, $email, $token)
    {
        $this->name = $name;
        $this->email = $email;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $customer['name'] = $this->name;
        $customer['email'] = $this->email;
        $customer['reset_token'] = $this->token;
        return $this->from(env("MAIL_FROM_ADDRESS", env("APP_NAME"))->subject("Password Reset Link")
        
        ->view('email.forgetPassword', ['customer' => $customer]));
    }
}
