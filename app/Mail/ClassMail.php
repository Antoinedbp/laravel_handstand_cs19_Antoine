<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClassMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $contenuClassMail;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenuClassMail)
    {
        $this->contenuClassMail =  $contenuClassMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('classmail');
    }
}
