<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="tallstackui_darkTheme()" x-init="darkTheme = true">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="Reward Points Calculator">
        <meta name="keywords" content="Points, Rewards, Calculator, Loyalty Programs">
        <meta name="author" content="Vivian Pereira">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased h-screen flex flex-col overflow-hidden apply-neon-bg dark"
        x-bind:class="{ 'dark': darkTheme }">

        <!-- Navbar Simples -->
        <livewire:home.navbar />

        <!-- Conteúdo principal -->
        <main class="flex-1 overflow-hidden relative z-10">
            {{ $slot }}
        </main>

        <!-- Footer Simples -->
        <livewire:home.footer />
        @livewireScripts
    </body>

</html>
