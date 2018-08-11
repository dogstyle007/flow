<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Markdown;
use Notify;
use App\User;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->message = (object) array('image' => '/images/logo.png');
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome To Old Vandals Association')
                    ->markdown('vendor.mail.welcome.index');
                    

    }
}
