<?php

namespace App\Livewire\Pages;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:3'],
            'message' => ['required', 'min:10'],
        ];
    }

    public function send(): void
    {
        $validated = $this->validate();
        $env_email = env('MAIL_FROM_ADDRESS');

        Mail::to($env_email)
            ->send(new ContactMail($validated));

        $this->reset();

        session()->flash(
            'success',
            'Mensagem enviada com sucesso!'
        );
    }
    public function render()
    {
        return view('livewire.pages.contact');
    }
}
