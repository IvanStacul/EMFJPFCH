<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageRecieved extends Mailable
{
  use Queueable, SerializesModels;

  public $subject;

  public $message;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($message)
  {
    $this->subject = $message['subject'];
    $this->message = $message;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->markdown('emails.question');
  }
}
