<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminInquiryForm extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $contact;

    //コントローラーから値を取得してセットする
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('【お客様からお問い合わせを受け付けました】')//件名
                ->view('inquiry.Admin_mail')//本文
                ->with(['contact'=>$this->contact]);//本文に送る値
    }

}
