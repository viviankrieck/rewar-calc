<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.home-page')->name('home');

Route::livewire('/teste', function () {
    return '<h1>Laravel em produção está respondendo!</h1>';
});


// require __DIR__ . '/auth.php';