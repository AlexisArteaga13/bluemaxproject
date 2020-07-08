<?php

namespace bluemax\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RptaUsuarioEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject="Bluemax Technologys";
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        //
        $this->msg = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.emailusuario');
    }
}
