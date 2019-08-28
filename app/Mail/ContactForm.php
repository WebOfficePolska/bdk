<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($firma, $imie_nazwisko, $telefon, $email)
    {
        $this->firma = $firma;
        $this->imie_nazwisko = $imie_nazwisko;
        $this->telefon = $telefon;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("Kontakt poprzez stronę internetową");
        //return $this->markdown('emails.orders.confirm')->with('content', $this->content);
        
        return $this->markdown('emails.contact')
			->with('firma', $this->firma)
			->with('imie_nazwisko', $this->imie_nazwisko)
			->with('telefon', $this->telefon)
            ->with('email', $this->email);
    }

}
