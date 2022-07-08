<?php
namespace App\Mail;
use App\Models\Subscriber;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => 'no-reply@austrasse-zuerich.ch', 'name' => 'Apleona Real Estate'])
                    ->subject('Ihre Anfrage Billroth Minerva')
                    ->markdown('mails.confirmation-subscriber');
    }
}
