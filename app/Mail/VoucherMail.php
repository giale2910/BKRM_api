<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VoucherMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this 
     */
    public function build()
    {
        return $this
            ->subject('VOUCHER giảm giá từ' . $this->details['store_name'])
            ->to($this->details['customer_email'], $this->details['customer_name'])
            ->view('VoucherMail');
    }
}
