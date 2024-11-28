<?php

namespace App\Livewire;

use App\Mail\DispatchMail;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;

class SendMail extends Component
{

    #[Validate('required')] 
    public $name = '';

    public $phone = '';

    #[Validate('required')] 
    public $email = '';
    
    public $subject = '';

    #[Validate('required|min:10')] 
    public $message = '';

    public function render()
    {
        return view('livewire.send-mail');
    }

    function sendMail(Request $request)
    {
        $this->validate();
        $mail = Mail::to('mazisimsebele18@gmail.com')
        ->send(new DispatchMail($this->name, $this->phone, $this->email, $this->subject, $this->message));
        if($mail) {
            $this->reset(['name', 'phone', 'email', 'subject', 'message']);
            return back()->with('success', 'Message sent successfully');
        }
        return back()->with('error', 'Message not sent');
    }
}
