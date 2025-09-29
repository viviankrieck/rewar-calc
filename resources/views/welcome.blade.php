<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Vivian Pereira">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body
        class="bg-primary-200 dark:bg-primary-900 text-primary-950 dark:text-primary-100 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] mb-6">
            <div class="text-[4rem] font-extrabold text-center leading-none">
                Calculadora de pontos
            </div>
        </header>
        <div
            class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full ">
                <div>
                    <div>Calculadora de pontos</div>
                    <br />
                    <div>Transforme seus pontos em recompensas reais</div>
                    <div>Calcule em segundos quanto valem seus pontos Rewards e descubra o que você pode trocar</div>
                </div>
            </main>
        </div>
    </body>

</html>
