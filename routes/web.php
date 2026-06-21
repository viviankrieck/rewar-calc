<?php

use App\Mail\ContactMail;
use App\Pages\Contact;
use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.home-page')->name('home');
Route::get('/contact', Contact::class)->name('contact');


/* NOTE: rota para visualizar o layout do e-mail diretamente no navegador, sem precisar enviar de fato.
   Útil para testes de estilização do e-mail.

Route::get('/preview-contato', function () {
    // Dados mocados (fictícios) simulando o formulário Livewire
    $dadosFalsos = [
        'subject' => 'Teste de Contato',
        'name' => 'Carlos Silva',
        'email' => 'carlos@teste.com',
        'message' => 'Olá! Estou testando o layout do e-mail diretamente pelo navegador para ver se a estilização está correta.'
    ];

    // Retorna a mailable; o Laravel renderiza o HTML automaticamente na tela
    return new ContactMail($dadosFalsos);
});
*/
// require __DIR__ . '/auth.php';
