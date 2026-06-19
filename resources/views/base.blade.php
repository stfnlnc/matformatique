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

<body class="w-full">
    <header class="fixed top-0 left-0 w-full py-5 z-9999 px-2">
        <nav
            class="relative bg-white rounded-lg container mx-auto py-1 px-1 min-h-12 flex flex-row items-center justify-between">
            <div>
                <img class="absolute top-1/2 -translate-y-1/2 left-2 w-14" src="./images/logo-bot.png" alt="">
            </div>
            <div class="flex flex-row gap-1">
                <div class="lg:flex hidden flex-row gap-1 px-2">
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="#nos-services">Nos services</a>
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="#notre-equipe">Notre équipe</a>
                    <a class="text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg" href="#vos-avis">Vos avis</a>
                </div>
                <x-button-dark href="#contact-form">Nous contacter</x-button-dark>
                <x-button-light href="tel:0614341709">06.14.34.17.09</x-button-light>
            </div>
        </nav>
    </header>
    <main class="w-full">
        @yield('content')
    </main>
    <footer class="w-full bg-mat-dark-blue py-14">
        <div class="w-full container mx-auto flex flex-col gap-10 px-4">
            <div class="flex flex-col md:flex-row gap-10 items-start justify-between">
                <div class="w-45 rounded-lg overflow-hidden">
                    <img class="w-full aspect-square object-cover object-center" src="./images/logo-bot-full.png"
                        alt="">
                </div>
                <div>
                    <span class="text-mat-light-blue uppercase text-sm">Horaires</span>
                    <br>
                    <br>
                    <span class="text-white uppercase text-sm">Atelier</span>
                    <p class="text-white text-sm">
                        Du lundi au vendredi - de 8h30 à 18h00 <br>
                        Le samedi - de 10h à 12h30
                    </p>
                    <br>
                    <span class="text-white uppercase text-sm">À domicile ou entreprise</span>
                    <p class="text-white text-sm">
                        Du lundi au vendredi <br>
                        Uniquement sur rendez-vous
                    </p>
                </div>
                <div>
                    <span class="text-mat-light-blue uppercase text-sm">Contact</span>
                    <br>
                    <br>
                    <a href="mailto:contact@matformatique.com" class="text-white text-sm">
                        contact@matformatique.com
                    </a>
                    <br>
                    <a href="tel:0614341709" class="text-white text-sm">
                        06 14 34 17 09
                    </a>
                    <br>
                    <p class="text-white text-sm">
                        3 rue de Livron, 64000 Pau
                    </p>
                </div>
            </div>
            <div class="w-full border-t border-mat-mid-blue flex flex-col lg:flex-row lg:gap-10 gap-2 pt-2.5">
                <p class="text-sm text-mat-mid-blue">© 2026 Matformatique. Tous droits réservés.</p>
                <a class="text-sm text-mat-mid-blue hover:text-mat-light-blue transition-colors duration-300"
                    href="">Mentions légales.</a>
                <a class="text-sm text-mat-mid-blue hover:text-mat-light-blue transition-colors duration-300"
                    href="">Politique de confidentialité.</a>
            </div>
        </div>
    </footer>
</body>

</html>
