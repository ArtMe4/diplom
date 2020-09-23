<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $data;
    protected $phone;
    protected $email;
    protected $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $data, $phone, $email, $text)
    {
        $this->name = $name;
        $this->data = $data;
        $this->phone = $phone;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('articles.na')->with([
            'name' => $this->name,
            'data' => $this->data,
            'phone' => $this->phone,
            'email' => $this->email,
            'text' => $this->text,
        ])->subject('Новое обращение');
    }
}
