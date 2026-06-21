<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-init="darkTheme = true">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="Reward Points Calculator">
        <meta name="keywords" content="Points, Rewards, Calculator, Loyalty Programs">
        <meta name="author" content="Vivian Pereira">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="/src/style.css" rel="stylesheet">

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased h-screen flex flex-col overflow-hidden apply-neon-bg dark"
        x-bind:class="{ 'dark': darkTheme }">

        <!-- Navbar Simples -->
        <livewire:home.navbar />

        <!-- Conteúdo principal -->
        <main class="flex-1 overflow-auto sm:max-h-[calc(100vh-120px)] max-h-[calc(100vh-180px)]">
            {{ $slot }}
        </main>

        <!-- Footer Simples -->
        <livewire:home.footer />
        @livewireScripts
    </body>

</html>
