<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Symfony\Component\Mailer\Bridge\Brevo\Transport\BrevoTransportFactory;
use Symfony\Component\Mailer\Transport\Dsn;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceRootUrl(config('app.url'));
            URL::forceScheme('https');
        }
        // Força o Livewire a usar caminhos relativos ou HTTPS
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        // Registra o driver customizado 'brevo' no gerenciador de e-mails
        $this->app->make('mail.manager')->extend('brevo', function ($config) {
            return (new BrevoTransportFactory())->create(
                Dsn::fromString('brevo+api://' . config('services.brevo.key') . '@default')
            );
        });
    }
}
