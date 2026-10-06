@extends('base')

@section('title', 'Assistance et dépannage informatique')

@section('head')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
    <div class="relative bg-linear-to-r from-mat-gradient-light to-mat-gradient-dark w-full reveal-container">
        <div class="relative grid grid-cols-1 lg:grid-cols-2 mx-auto px-4 py-30 w-full h-full container">
            <div class="relative flex flex-col justify-center items-start gap-5 w-full h-full">
                <h1 class="max-w-3xl text-mat-dark-blue text-4xl md:text-5xl">
                    Bienvenue chez M@tformatique, <br>
                    à votre service <span class="text-mat-mid-blue">depuis 2010</span>
                </h1>
                <p class="max-w-3xl text-mat-dark-blue text-sm">
                    Notre but ? Vous rendre l'informatique plus facile
                    par le biais de conseils, de dépannages, de ventes
                    et d'accompagnement dans vos projets.
                </p>
                <div class="flex flex-row gap-1">
                    <x-button-dark href="#contact-form">Nous contacter</x-button-dark>
                    <x-button-light href="tel:0614341709">06.14.34.17.09</x-button-light>
                </div>
                <div class="flex flex-row gap-4">
                    <a target="_blank" href="https://www.facebook.com/Matformatique">
                        <svg class="fill-mat-dark-blue w-6" width="48" height="48" viewBox="0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_17_61)">
                                <path
                                    d="M24 0C10.7453 0 0 10.7453 0 24C0 35.255 7.74912 44.6995 18.2026 47.2934V31.3344H13.2538V24H18.2026V20.8397C18.2026 12.671 21.8995 8.8848 29.9194 8.8848C31.44 8.8848 34.0637 9.18336 35.137 9.48096V16.129C34.5706 16.0694 33.5866 16.0397 32.3645 16.0397C28.4294 16.0397 26.9088 17.5306 26.9088 21.4061V24H34.7482L33.4013 31.3344H26.9088V47.8243C38.7926 46.3891 48.001 36.2707 48.001 24C48 10.7453 37.2547 0 24 0Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_17_61">
                                    <rect width="48" height="48" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/matformatique/">
                        <svg class="fill-mat-dark-blue w-6" width="48" height="48" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_17_63)">
                                <path
                                    d="M24 4.32187C30.4125 4.32187 31.1719 4.35 33.6938 4.4625C36.0375 4.56562 37.3031 4.95938 38.1469 5.2875C39.2625 5.71875 40.0688 6.24375 40.9031 7.07812C41.7469 7.92188 42.2625 8.71875 42.6938 9.83438C43.0219 10.6781 43.4156 11.9531 43.5188 14.2875C43.6313 16.8187 43.6594 17.5781 43.6594 23.9813C43.6594 30.3938 43.6313 31.1531 43.5188 33.675C43.4156 36.0188 43.0219 37.2844 42.6938 38.1281C42.2625 39.2438 41.7375 40.05 40.9031 40.8844C40.0594 41.7281 39.2625 42.2438 38.1469 42.675C37.3031 43.0031 36.0281 43.3969 33.6938 43.5C31.1625 43.6125 30.4031 43.6406 24 43.6406C17.5875 43.6406 16.8281 43.6125 14.3063 43.5C11.9625 43.3969 10.6969 43.0031 9.85313 42.675C8.7375 42.2438 7.93125 41.7188 7.09688 40.8844C6.25313 40.0406 5.7375 39.2438 5.30625 38.1281C4.97813 37.2844 4.58438 36.0094 4.48125 33.675C4.36875 31.1438 4.34063 30.3844 4.34063 23.9813C4.34063 17.5688 4.36875 16.8094 4.48125 14.2875C4.58438 11.9437 4.97813 10.6781 5.30625 9.83438C5.7375 8.71875 6.2625 7.9125 7.09688 7.07812C7.94063 6.23438 8.7375 5.71875 9.85313 5.2875C10.6969 4.95938 11.9719 4.56562 14.3063 4.4625C16.8281 4.35 17.5875 4.32187 24 4.32187ZM24 0C17.4844 0 16.6688 0.028125 14.1094 0.140625C11.5594 0.253125 9.80625 0.665625 8.2875 1.25625C6.70312 1.875 5.3625 2.69062 4.03125 4.03125C2.69063 5.3625 1.875 6.70313 1.25625 8.27813C0.665625 9.80625 0.253125 11.55 0.140625 14.1C0.028125 16.6687 0 17.4844 0 24C0 30.5156 0.028125 31.3312 0.140625 33.8906C0.253125 36.4406 0.665625 38.1938 1.25625 39.7125C1.875 41.2969 2.69063 42.6375 4.03125 43.9688C5.3625 45.3 6.70313 46.125 8.27813 46.7344C9.80625 47.325 11.55 47.7375 14.1 47.85C16.6594 47.9625 17.475 47.9906 23.9906 47.9906C30.5063 47.9906 31.3219 47.9625 33.8813 47.85C36.4313 47.7375 38.1844 47.325 39.7031 46.7344C41.2781 46.125 42.6188 45.3 43.95 43.9688C45.2812 42.6375 46.1063 41.2969 46.7156 39.7219C47.3063 38.1938 47.7188 36.45 47.8313 33.9C47.9438 31.3406 47.9719 30.525 47.9719 24.0094C47.9719 17.4938 47.9438 16.6781 47.8313 14.1188C47.7188 11.5688 47.3063 9.81563 46.7156 8.29688C46.125 6.70312 45.3094 5.3625 43.9688 4.03125C42.6375 2.7 41.2969 1.875 39.7219 1.26562C38.1938 0.675 36.45 0.2625 33.9 0.15C31.3313 0.028125 30.5156 0 24 0Z" />
                                <path
                                    d="M24 11.6719C17.1938 11.6719 11.6719 17.1938 11.6719 24C11.6719 30.8062 17.1938 36.3281 24 36.3281C30.8062 36.3281 36.3281 30.8062 36.3281 24C36.3281 17.1938 30.8062 11.6719 24 11.6719ZM24 31.9969C19.5844 31.9969 16.0031 28.4156 16.0031 24C16.0031 19.5844 19.5844 16.0031 24 16.0031C28.4156 16.0031 31.9969 19.5844 31.9969 24C31.9969 28.4156 28.4156 31.9969 24 31.9969Z" />
                                <path
                                    d="M39.6937 11.1843C39.6937 12.778 38.4 14.0624 36.8156 14.0624C35.2219 14.0624 33.9375 12.7687 33.9375 11.1843C33.9375 9.59053 35.2313 8.30615 36.8156 8.30615C38.4 8.30615 39.6937 9.5999 39.6937 11.1843Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_17_63">
                                    <rect width="48" height="48" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/matformatique">
                        <svg class="fill-mat-dark-blue w-6" width="48" height="48" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_17_68)">
                                <path
                                    d="M44.4469 0H3.54375C1.58437 0 0 1.54688 0 3.45938V44.5312C0 46.4437 1.58437 48 3.54375 48H44.4469C46.4062 48 48 46.4438 48 44.5406V3.45938C48 1.54688 46.4062 0 44.4469 0ZM14.2406 40.9031H7.11563V17.9906H14.2406V40.9031ZM10.6781 14.8688C8.39062 14.8688 6.54375 13.0219 6.54375 10.7437C6.54375 8.46562 8.39062 6.61875 10.6781 6.61875C12.9563 6.61875 14.8031 8.46562 14.8031 10.7437C14.8031 13.0125 12.9563 14.8688 10.6781 14.8688ZM40.9031 40.9031H33.7875V29.7656C33.7875 27.1125 33.7406 23.6906 30.0844 23.6906C26.3812 23.6906 25.8187 26.5875 25.8187 29.5781V40.9031H18.7125V17.9906H25.5375V21.1219H25.6312C26.5781 19.3219 28.9031 17.4188 32.3625 17.4188C39.5719 17.4188 40.9031 22.1625 40.9031 28.3313V40.9031Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_17_68">
                                    <rect width="48" height="48" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex flex-row justify-center items-center w-full h-full reveal">
                <img loading="lazy" class="w-full md:w-2/3 lg:w-full object-center object-cover aspect-square"
                    src="./images/illustrations/bot-2.png" alt="">
            </div>
            <p class="bottom-8 left-0 absolute px-4 text-mat-dark-blue text-xs md:text-sm uppercase">
                <span class="motion-safe:animate-pulse">●</span> {{ $openingHours }}
            </p>
            <div class="hidden right-0 bottom-8 absolute lg:flex flex-col gap-1 bg-white p-1 rounded-lg">
                @if ($software?->file_windows)
                    <div
                        class="flex flex-col bg-mat-light-blue px-10 py-2 rounded-xl text-mat-dark-blue text-xs md:text-sm text-center">
                        <p class="text-mat-dark-blue text-xs md:text-sm">Assistance à distance</p>
                        <p class="mb-2 text-mat-dark-blue text-2xl uppercase">Windows</p>
                        <x-button-white href="{{ asset($software->file_windows) }}">Télécharger</x-button-white>
                    </div>
                @endif

                @if ($software?->file_macos)
                    <div
                        class="flex flex-col bg-mat-dark-blue px-10 py-2 rounded-xl text-mat-light-blue text-xs md:text-sm text-center">
                        <p class="text-mat-light-blue text-xs md:text-sm">Assistance à distance</p>
                        <p class="mb-2 text-mat-light-blue text-2xl uppercase">macOS</p>
                        <x-button-white class="hover:shadow-mat-light-blue hover:shadow-sm transition-all duration-300"
                            href="{{ asset($software->file_macos) }}">Télécharger</x-button-white>
                    </div>
                @endif
            </div>

        </div>
    </div>
    <div class="bg-mat-dark-blue px-15 py-10 w-full">
        <div
            class="flex flex-row flex-wrap md:flex-nowrap justify-center items-center gap-5 lg:gap-30 mx-auto px-4 container">
            <div class="flex flex-col gap-2 text-center">
                <div class="text-mat-light-blue text-3xl md:text-5xl">
                    +{{ $years }} ans
                </div>
                <div class="text-white text-sm">
                    ans d'expérience
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-mat-light-blue text-3xl md:text-5xl">
                    +{{ $totalReviews }}
                </div>
                <div class="text-white text-sm">
                    avis Google
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-mat-light-blue text-3xl md:text-5xl">
                    ~48h
                </div>
                <div class="text-white text-sm">
                    pour un diagnostic
                </div>
            </div>
        </div>
    </div>
    <div id="nos-services" class="bg-mat-gradient-light py-30 w-full">
        <div class="flex flex-col gap-10 mx-auto px-4 w-full container">
            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="text-mat-mid-blue text-sm uppercase">
                        ● Nos services
                    </p>
                </div>
                <div class="flex flex-col gap-5 md:w-3/4 max-w-3xl">
                    <h1 class="max-w-full text-mat-dark-blue text-4xl md:text-5xl">
                        Découvrez tous <span class="text-mat-mid-blue">nos services</span>
                    </h1>
                    <p class="max-w-prose text-mat-dark-blue text-sm">
                        Nos prises en charge ainsi que nos devis sont gratuits.
                        En cas de résolution lors de l’élaboration de ce dernier,
                        un forfait de 63€ (91€ pour le matériel Apple) peut être facturé.
                    </p>
                </div>
            </div>
            <div class="justify-between gap-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 reveal-4">
                <div class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg reveal-4">
                    <img loading="lazy" class="w-fit max-w-25 h-25 object-center object-contain"
                        src="./images/illustrations/logo-bot-full.png" alt="">
                    <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                        Pour les professionnels
                    </h2>
                    <p class="text-mat-dark-blue text-sm">
                        • Assistance informatique <br>
                        • Contrat de maintenance <br>
                        • Vente et installation de matériel <br>
                        • Audit informatique <br>
                        • Mise en place de sauvegarde <br>
                        • Déplacement sur site
                    </p>
                </div>
                <div class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg reveal-4">
                    <img loading="lazy" class="w-fit max-w-25 h-25 object-center object-contain"
                        src="./images/illustrations/bot-6.png" alt="">
                    <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                        Pour les particuliers
                    </h2>
                    <p class="text-mat-dark-blue text-sm">
                        • Assistance informatique <br>
                        • Dépannage informatique <br>
                        • Accompagnement personnalisé à domicile <br>
                        • Mise en place de sauvegarde <br>
                        • Vente et installation de matériel
                    </p>
                </div>
                <div class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg reveal-4">
                    <img loading="lazy" class="w-fit max-w-25 h-25 object-center object-contain"
                        src="./images/illustrations/bot-7-rev.png" alt="">
                    <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                        Notre atelier
                    </h2>
                    <p class="text-mat-dark-blue text-sm">
                        • Vente et configuration de matériel <br>
                        • Dépannage informatique <br>
                        • Numérisation de données (photos, diapos, vidéos, ...) <br>
                        • Service d'impression et de photocopie
                    </p>
                </div>
                <div class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg reveal-4">
                    <img loading="lazy" class="w-fit max-w-25 h-25 object-center object-contain"
                        src="./images/logos/salp.png" alt="">
                    <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                        Service à la personne
                    </h2>
                    <p class="text-mat-dark-blue text-sm">
                        Possibilité de prestation à domicile sous couvert du service à la personne par notre seconde
                        structure Matformatique Service
                    </p>
                    <x-button-light target="_blank" :href="route('services.home')">En savoir plus</x-button-light>
                </div>
            </div>
            <div
                class="flex md:flex-row flex-col justify-start items-start md:items-center gap-5 md:gap-10 bg-white -mt-5 p-7.5 rounded-lg reveal-4">
                <img loading="lazy" class="w-fit max-w-25 h-15 object-center object-contain"
                    src="./images/logos/qualirepar.png" alt="">
                <p class="max-w-4/5 text-mat-dark-blue text-sm">
                    En tant que professionnel labellisé QualiRépar, nous vous permettons de bénéficier du Bonus Réparation
                    sur certaines réparations de vos équipements électroniques et informatiques éligibles. Ce label, soutenu
                    par l'État, garantit des réparations réalisées par un professionnel qualifié tout en vous aidant à
                    réduire le coût de la réparation et à prolonger la durée de vie de vos appareils.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-mat-gradient-light py-10 w-full">
        <div class="mx-auto px-4 w-full container">
            <img loading="lazy" class="rounded-lg w-full object-center object-cover aspect-13/6"
                src="./images/photos/photo-matformatique.jpg" alt="">
        </div>
    </div>
    <div class="relative bg-mat-gradient-light md:py-30 pt-30 pb-70 w-full">
        <img loading="lazy" class="right-0 bottom-0 z-0 absolute w-80" src="./images/illustrations/angle-droit.png"
            alt="">
        <div class="z-1 relative flex flex-col gap-10 mx-auto px-4 w-full container">
            <div class="flex lg:flex-row flex-col gap-20 w-full">
                <div class="flex flex-col gap-4 md:w-1/2">
                    <p class="text-mat-mid-blue text-sm uppercase">
                        ● Nos étapes
                    </p>
                    <div class="flex flex-col gap-5 md:w-3/4 max-w-3xl">
                        <h1 class="max-w-full text-mat-dark-blue text-4xl md:text-5xl">
                            Comment <br> <span class="text-mat-mid-blue">ça marche ?</span>
                        </h1>
                        <p class="text-mat-dark-blue text-sm">
                            Notre guide étape par étape pour la réparation
                            de votre matériel informatique.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-2.5 lg:w-1/2 reveal-5-container">
                    <div
                        class="flex flex-col justify-start items-start bg-white px-2 md:px-7.5 py-2.5 rounded-lg w-full reveal-5">
                        <div class="flex flex-row justify-start items-center gap-5 w-full cursor-pointer toggle-title">
                            <div class="text-mat-light-blue text-3xl md:text-5xl">01</div>
                            <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                                Prise de contact
                            </h2>
                            <div
                                class="flex flex-row justify-center items-center bg-mat-light-blue ml-auto p-1 rounded-full w-8 h-8 aspect-square text-xl leading-0">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="hidden toggle-minus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="h-full max-h-0 overflow-hidden text-mat-dark-blue text-sm transition-[max-height] duration-700 toggle-paragraph">
                            <div class="h-5"></div>
                            Nous vous accueillons en atelier ou prenons en charge votre demande par téléphone et
                            formulaire
                            en ligne. Lors de cette première étape, nous écoutons attentivement vos besoins et les
                            symptômes
                            de votre machine (lenteurs, panne matérielle, virus, écran cassé...). Nous enregistrons
                            votre
                            matériel en toute sécurité et créons votre dossier client personnalisé.
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-start items-start bg-white px-2 md:px-7.5 py-2.5 rounded-lg w-full reveal-5">
                        <div class="flex flex-row justify-start items-center gap-5 w-full cursor-pointer toggle-title">
                            <div class="text-mat-light-blue text-3xl md:text-5xl">02</div>
                            <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                                Diagnostic
                            </h2>
                            <div
                                class="flex flex-row justify-center items-center bg-mat-light-blue ml-auto p-1 rounded-full w-8 h-8 aspect-square text-xl leading-0">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="hidden toggle-minus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="h-full max-h-0 overflow-hidden text-mat-dark-blue text-sm transition-[max-height] duration-700 toggle-paragraph">
                            <div class="h-5"></div>
                            Nos techniciens qualifiés procèdent à une série de tests approfondis sur votre
                            équipement.
                            Nous
                            analysons les composants matériels (disque dur, mémoire RAM, carte mère...) et l'état du
                            système
                            d'exploitation afin d'identifier précisément l'origine de la panne ou des
                            dysfonctionnements. Ce
                            check-up complet nous permet de vous proposer la solution de réparation ou
                            d'optimisation la
                            plus adaptée et la plus durable pour votre ordinateur.
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-start items-start bg-white px-2 md:px-7.5 py-2.5 rounded-lg w-full reveal-5">
                        <div class="flex flex-row justify-start items-center gap-5 w-full cursor-pointer toggle-title">
                            <div class="text-mat-light-blue text-3xl md:text-5xl">03</div>
                            <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                                Devis
                            </h2>
                            <div
                                class="flex flex-row justify-center items-center bg-mat-light-blue ml-auto p-1 rounded-full w-8 h-8 aspect-square text-xl leading-0">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="hidden toggle-minus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="h-full max-h-0 overflow-hidden text-mat-dark-blue text-sm transition-[max-height] duration-700 toggle-paragraph">
                            <div class="h-5"></div>
                            À la suite du diagnostic, nous vous transmettons un devis clair, détaillé et
                            transparent,
                            comprenant le coût de la main-d'œuvre et des éventuelles pièces de rechange. Aucun frais
                            supplémentaire n'est engagé sans votre accord. Nous vous expliquons les différentes
                            options
                            possibles pour que vous puissiez prendre votre décision en toute sérénité.
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-start items-start bg-white px-2 md:px-7.5 py-2.5 rounded-lg w-full reveal-5">
                        <div class="flex flex-row justify-start items-center gap-5 w-full cursor-pointer toggle-title">
                            <div class="text-mat-light-blue text-3xl md:text-5xl">04</div>
                            <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                                Réparation
                            </h2>
                            <div
                                class="flex flex-row justify-center items-center bg-mat-light-blue ml-auto p-1 rounded-full w-8 h-8 aspect-square text-xl leading-0">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="hidden toggle-minus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="h-full max-h-0 overflow-hidden text-mat-dark-blue text-sm transition-[max-height] duration-700 toggle-paragraph">
                            <div class="h-5"></div>
                            Une fois le devis validé, nos techniciens interviennent sur votre matériel dans les plus
                            brefs
                            délais. Qu'il s'agisse d'un remplacement de composant, d'une suppression de logiciels
                            malveillants, d'une réinstallation de système ou d'une récupération de données, nous
                            travaillons
                            avec soin et minutie. Avant de clore l'intervention, nous effectuons une batterie de
                            tests
                            de
                            contrôle pour nous assurer du parfait fonctionnement de votre appareil.
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-start items-start bg-white px-2 md:px-7.5 py-2.5 rounded-lg w-full reveal-5">
                        <div class="flex flex-row justify-start items-center gap-5 w-full cursor-pointer toggle-title">
                            <div class="text-mat-light-blue text-3xl md:text-5xl">05</div>
                            <h2 class="text-mat-dark-blue text-xl md:text-2xl uppercase">
                                Remise du matériel
                            </h2>
                            <div
                                class="flex flex-row justify-center items-center bg-mat-light-blue ml-auto p-1 rounded-full w-8 h-8 aspect-square text-xl leading-0">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="hidden toggle-minus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="h-full max-h-0 overflow-hidden text-mat-dark-blue text-sm transition-[max-height] duration-700 toggle-paragraph">
                            <div class="h-5"></div>
                            Votre ordinateur est prêt ! Nous vous contactons pour convenir de sa restitution. Lors
                            de la
                            remise, nous prenons le temps de vous montrer le résultat, de vous expliquer les
                            réparations
                            effectuées et de vous donner des conseils personnalisés pour prolonger la durée de vie
                            de
                            votre
                            machine. Vous repartez avec un matériel fonctionnel, garanti et prêt à l'emploi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-mat-dark-blue py-10 w-full overflow-hidden">
        <div class="flex flex-row justify-between items-center gap-5 mx-auto px-4 container">
            <div class="flex flex-col gap-5 w-1/2">
                <p class="text-mat-light-blue text-sm uppercase">
                    ● Nos marques
                </p>
            </div>
        </div>
        <div class="flex gap-8 md:gap-20 mt-10 w-full overflow-hidden select-none mask-linear">
            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0">
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/eset_logo.png" alt="Logo Eset"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/synology_logo.png" alt="Logo Synology"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/asus_logo.png" alt="Logo Asus"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/msi_logo.png" alt="Logo Msi"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/lenovo_logo.png" alt="Logo Lenovo"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/canon_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/hp_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
            </div>

            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0" aria-hidden="true">
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/eset_logo.png" alt="Logo Eset"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/synology_logo.png" alt="Logo Synology"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/asus_logo.png" alt="Logo Asus"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/msi_logo.png" alt="Logo Msi"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/lenovo_logo.png" alt="Logo Lenovo"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/canon_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/hp_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
            </div>
            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0" aria-hidden="true">
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/eset_logo.png" alt="Logo Eset"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/synology_logo.png" alt="Logo Synology"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/asus_logo.png" alt="Logo Asus"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/msi_logo.png" alt="Logo Msi"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/lenovo_logo.png" alt="Logo Lenovo"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/canon_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
                <div
                    class="flex flex-row items-center bg-white px-4 py-1 rounded-lg w-30 object-center object-contain aspect-22/9 overflow-hidden">
                    <img loading="lazy" src="./images/logos/hp_logo.png" alt="Logo Canon"
                        class="w-full object-center object-contain">
                </div>
            </div>
        </div>
    </div>
    <div id="notre-equipe" class="relative bg-mat-gradient-light py-30 w-full">
        <div class="flex flex-col gap-10 mx-auto px-4 w-full container">
            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="text-mat-mid-blue text-sm uppercase">
                        ● Notre équipe
                    </p>
                </div>
                <div class="flex flex-col gap-5 md:w-3/4">
                    <h1 class="max-w-3xl text-mat-dark-blue text-4xl md:text-5xl">
                        Venez à la rencontre de <span class="text-mat-mid-blue">notre équipe</span>
                    </h1>
                    <p class="max-w-3xl text-mat-dark-blue text-sm">
                        Derrière chaque réparation, il y a une personne à l’écoute et passionnée. Nous traitons votre
                        matériel avec la plus grande attention, en privilégiant la confiance et le contact humain.
                    </p>
                </div>
            </div>
            <div class="flex flex-row flex-wrap lg:flex-nowrap justify-center items-stretch gap-5">
                <div
                    class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg w-full max-w-96 aspect-3/4">
                    <div class="flex flex-col">
                        <div
                            class="flex flex-row justify-center items-center bg-mat-light-blue rounded-lg w-fit h-26 object-center object-cover aspect-square text-mat-dark-blue text-4xl">
                            MP
                        </div>
                        {{-- <img  loading="lazy" class="grayscale rounded-lg w-fit h-26 object-center object-cover aspect-square"
                            src="./images/team.jpg" alt=""> --}}
                        <h2 class="mt-5 text-mat-dark-blue text-2xl uppercase">
                            Mathieu Pellet
                        </h2>
                        <p class="text-mat-dark-blue text-sm">
                            Gérant & Technicien informatique
                        </p>
                    </div>
                    <p class="mt-auto text-mat-dark-blue text-sm">
                        Passionné d'informatique, j'ai une double mission : accompagner les particuliers au
                        quotidien et
                        structurer les infrastructures des professionnels. Qu'il s'agisse de dépanner votre
                        ordinateur
                        personnel ou de concevoir un réseau d'entreprise complet avec configuration de serveurs NAS
                        sécurisés, je mets la même rigueur à vous garantir des solutions fiables, performantes et
                        adaptées à
                        vos besoins.
                    </p>
                </div>
                <div
                    class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg w-full max-w-96 aspect-3/4">
                    <div class="flex flex-col">
                        <div
                            class="flex flex-row justify-center items-center bg-mat-light-blue rounded-lg w-fit h-26 object-center object-cover aspect-square text-mat-dark-blue text-4xl">
                            JF
                        </div>
                        {{-- <img  loading="lazy" class="grayscale rounded-lg w-fit h-26 object-center object-cover aspect-square"
                            src="./images/team.jpg" alt=""> --}}
                        <h2 class="mt-5 text-mat-dark-blue text-2xl uppercase">
                            Joel Ferreira
                        </h2>
                        <p class="text-mat-dark-blue text-sm">
                            Technicien informatique
                        </p>
                    </div>
                    <p class="mt-auto text-mat-dark-blue text-sm">
                        Spécialiste de l'écosystème Apple et de la restauration système, j'interviens sur les pannes
                        logicielles et matérielles les plus complexes. Qu'il s'agisse de redonner vie à votre Mac,
                        de
                        prendre en charge vos réparations ou de récupérer vos données perdues sur des supports
                        endommagés,
                        je mets mon expertise au service de vos équipements et de vos fichiers précieux.
                    </p>
                </div>
                <div
                    class="flex flex-col justify-start items-start gap-5 bg-white p-7.5 rounded-lg w-full max-w-96 aspect-3/4">
                    <div class="flex flex-col">
                        <div
                            class="flex flex-row justify-center items-center bg-mat-light-blue rounded-lg w-fit h-26 object-center object-cover aspect-square text-mat-dark-blue text-4xl">
                            SL
                        </div>
                        {{-- <img  loading="lazy" class="grayscale rounded-lg w-fit h-26 object-center object-cover aspect-square"
                            src="./images/team.jpg" alt=""> --}}
                        <h2 class="mt-5 text-mat-dark-blue text-2xl uppercase">
                            Stéfan Lancelot
                        </h2>
                        <p class="text-mat-dark-blue text-sm">
                            Technicien informatique
                        </p>
                    </div>
                    <p class="mt-auto text-mat-dark-blue text-sm">
                        Spécialisé dans les services web et la gestion de messageries, j'assure la configuration de
                        vos
                        espaces mails et de vos hébergements au quotidien. Je prends également en charge
                        l'installation,
                        la
                        maintenance et la sécurisation de vos environnements Linux, qu'il s'agisse de postes de
                        travail
                        ou
                        de serveurs. Mon objectif est de vous garantir des solutions stables, libres et parfaitement
                        adaptées à vos besoins.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="vos-avis" class="bg-mat-dark-blue py-30 w-full overflow-hidden">
        <div class="flex flex-row justify-between items-center gap-5 mx-auto px-4 container">
            <div class="flex flex-col gap-5 w-1/2">
                <p class="text-mat-light-blue text-sm uppercase">
                    ● Vos avis
                </p>
            </div>
        </div>
        <div class="flex gap-8 md:gap-20 mt-10 w-full overflow-hidden select-none mask-linear">
            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0">
                @foreach ($reviews as $review)
                    @if ($review['rating'] >= 4)
                        <div class="flex flex-col justify-start items-start gap-3 px-4 py-1 w-70 overflow-hidden">
                            <div class="flex flex-row text-white">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <x-star></x-star>
                                @endfor
                            </div>
                            <p class="text-white text-sm line-clamp-7">
                                “{{ $review['text'] === '' ? "L'utilisateur a laissé une note de " . $review['rating'] . ' étoiles' : $review['text'] }}”
                            </p>
                            <div class="flex flex-col text-mat-light-blue text-sm">
                                <span class="uppercase">{{ $review['author_name'] }}</span>
                                <span class="">{{ $review['relative_time_description'] }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0" aria-hidden="true">
                @foreach ($reviews as $review)
                    @if ($review['rating'] >= 4)
                        <div class="flex flex-col justify-start items-start gap-3 px-4 py-1 w-70 overflow-hidden">
                            <div class="flex flex-row text-white">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <x-star></x-star>
                                @endfor
                            </div>
                            <p class="text-white text-sm line-clamp-7">
                                “{{ $review['text'] === '' ? "L'utilisateur a laissé une note de " . $review['rating'] . ' étoiles' : $review['text'] }}”

                            </p>
                            <div class="flex flex-col text-mat-light-blue text-sm">
                                <span class="uppercase">{{ $review['author_name'] }}</span>
                                <span class="">{{ $review['relative_time_description'] }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="flex flex-row flex-nowrap gap-8 md:gap-20 animate-marquee shrink-0" aria-hidden="true">
                @foreach ($reviews as $review)
                    @if ($review['rating'] >= 4)
                        <div class="flex flex-col justify-start items-start gap-3 px-4 py-1 w-70 overflow-hidden">
                            <div class="flex flex-row text-white">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <x-star></x-star>
                                @endfor
                            </div>
                            <p class="text-white text-sm line-clamp-7">
                                “{{ $review['text'] === '' ? "L'utilisateur a laissé une note de " . $review['rating'] . ' étoiles' : $review['text'] }}”

                            </p>
                            <div class="flex flex-col text-mat-light-blue text-sm">
                                <span class="uppercase">{{ $review['author_name'] }}</span>
                                <span class="">{{ $review['relative_time_description'] }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div id="contact-form" class="relative bg-mat-gradient-light py-30 w-full">
        <img loading="lazy" class="bottom-0 left-0 z-0 absolute w-80" src="./images/illustrations/angle-gauche.png"
            alt="">
        <div class="z-1 relative flex flex-col gap-10 mx-auto px-4 pb-40 md:pb-0 w-full container">
            <div class="flex flex-col gap-10 mx-auto w-full container">
                <div class="flex flex-row w-full">
                    <div class="flex flex-col gap-4 w-full">
                        <p class="text-mat-mid-blue text-sm uppercase">
                            ● Contact
                        </p>
                        <div class="flex flex-col gap-5 mb-12.5 md:w-3/4">
                            <h1 class="max-w-3xl text-mat-dark-blue text-4xl md:text-5xl">
                                Besoin <span class="text-mat-mid-blue">d'aide ?</span>
                            </h1>
                            <p class="max-w-3xl text-mat-dark-blue text-sm">
                                Que ce soit pour une réparation urgente ou juste un conseil, on est là.
                                <br>Appelez-nous,
                                passez
                                à l'atelier, ou envoyez-nous un message. On s'occupe du reste.
                            </p>
                        </div>
                        <div class="flex lg:flex-row flex-col gap-32 w-full">
                            <div class="flex flex-col gap-5 w-full">
                                <form class="flex flex-col gap-2.5 w-full"
                                    action="{{ route('contact.submit') }}#contact-form" method="POST">
                                    @csrf

                                    @if (session('success'))
                                        <div style="color: green; margin: 15px;">{{ session('success') }}</div>
                                    @endif

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-mat-dark-blue text-sm uppercase" for="name">Nom</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            required placeholder="John Smith"
                                            class="bg-white p-2.5 rounded-lg text-mat-dark-blue text-sm">
                                        @error('name')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-mat-dark-blue text-sm uppercase" for="phone">Téléphone
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="06 01 02 03 04"
                                            class="bg-white p-2.5 rounded-lg text-mat-dark-blue text-sm">
                                        @error('phone')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-mat-dark-blue text-sm uppercase" for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            required placeholder="john@example.com"
                                            class="bg-white p-2.5 rounded-lg text-mat-dark-blue text-sm">
                                        @error('email')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-mat-dark-blue text-sm uppercase" for="message">Message
                                        </label>
                                        <textarea id="message" name="message" required class="bg-white p-2.5 rounded-lg h-30 text-mat-dark-blue text-sm">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5 my-2">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        @error('g-recaptcha-response')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button
                                        class="bg-mat-dark-blue hover:bg-mat-mid-blue px-2.5 py-2 rounded-lg text-white text-sm transition-colors duration-300 cursor-pointer"
                                        type="submit">Envoyer</button>
                                </form>
                            </div>
                            <div class="flex flex-col gap-5 w-full">
                                <div>
                                    <span class="text-mat-mid-blue text-sm uppercase">Téléphone</span> <br>
                                    <a href="tel:0614341709" class="text-mat-dark-blue text-2xl">06 14 34 17
                                        09</a>
                                </div>
                                <div>
                                    <span class="text-mat-mid-blue text-sm uppercase">Email</span> <br>
                                    <div class="text-mat-dark-blue text-2xl">contact@matformatique.com</div>
                                </div>
                                <div>
                                    <span class="text-mat-mid-blue text-sm uppercase">Adresse</span> <br>
                                    <div class="text-mat-dark-blue text-2xl">
                                        3 rue de Livron, <br>
                                        64000 Pau
                                    </div>
                                </div>
                                <a href="{{ $mapsUrl }}" target="_blank"
                                    class="relative rounded-lg w-full aspect-20/9 overflow-hidden">
                                    <img loading="lazy" class="w-full object-center object-cover aspect-20/9"
                                        src="./images/photos/plan-matformatique.png" alt="">
                                </a>

                                <div class="text-mat-mid-blue text-sm">
                                    Notre zone primaire d'intervention est de 20 Kms autour de l'atelier et de 50
                                    Kms
                                    pour
                                    la secondaire.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
