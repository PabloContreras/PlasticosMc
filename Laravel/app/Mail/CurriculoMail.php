<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CurriculoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $curriculo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($curriculo)
    {
        $this->curriculo = $curriculo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Se ha recibido un nuevo curriculo')->view('mails.CurriculosView');
    }
}
