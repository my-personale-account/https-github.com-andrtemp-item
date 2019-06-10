<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;

    /**
     * Create a new message instance.
     *
     * @param \stdClass $class
     * @return void
     */
    public function __construct($class)
    {
        $this->demo = $class;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('andr.evich11@gmail.com')
            ->view('mails.mail')
            ->attach($this->demo->image, [
                'as' => 'template.png',
                'mime' => 'image/png',
            ]);
    }
}