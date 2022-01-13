<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class PurchaseFeedback extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct( $user ) {
        $this->user = $user;
    }

    public function build() {

        return $this->from(env('MAIL_FROM_ADDRESS'), 'FIT fitness center')
            ->subject('Membership card successfully purchased!')
            ->markdown('emails.purchase-feedback')
            ->with([
                'reject_link'       => 'http://127.0.0.1:8000/card-reject',
                'thanksgiving_link' => 'http://127.0.0.1:8000/thank?from=' . $this->user->email
            ]);

    }

}