<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class newLaravelTips extends Mailable
{
    private $email;
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Relatório PDF');
        $this->to('mtheusriki@gmail.com');
        $this->attach(public_path().'/pdf/'.$this->email->id_pdf.'.pdf');
        $this->view('email.email');
    }
}
