<?php
namespace App\Mails;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class MyEmail extends Mailable {
 
    use Queueable,
        SerializesModels;
 
    //build the message.
    public function build() {
        return $this->view('mails.sample');
    }
}