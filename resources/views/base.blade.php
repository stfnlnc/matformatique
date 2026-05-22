<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <header class="fixed top-0 left-0 w-full py-5 z-9999">
        <nav class="relative bg-white rounded-lg container mx-auto py-1 px-1 flex flex-row items-center justify-between">
            <div>
                <img class="absolute top-1/2 -translate-y-1/2 left-2 w-14" src="./images/logo-bot.png" alt="">
            </div>
            <div class="flex flex-row gap-1">
                <div class="flex flex-row gap-1 px-2">
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="">Nos services</a>
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="">Notre équipe</a>
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="">Vos avis</a>
                </div>
                <a class="bg-mat-dark-blue text-white text-sm px-2.5 py-2 rounded-lg" href="">Nous
                    contacter</a>
                <a class="bg-mat-light-blue text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg"
                    href="">06.14.34.17.09</a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
