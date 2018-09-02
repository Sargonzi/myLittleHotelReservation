<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $booking;
    public $user;
    public $room;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking, $user, $room)
    {
        //
       $this->booking = $booking;
       $this->user = $user;
       $this->room = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.email.receive');
    }
}
