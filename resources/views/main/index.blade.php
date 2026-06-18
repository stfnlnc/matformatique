@extends('base')

@section('content')
    <div class="w-full h-lvh relative min-h-200 bg-linear-to-r from-mat-gradient-light to-mat-gradient-dark px-12 py-8">
        <div class="container mx-auto flex flex-row w-full h-full">
            <div class="relative w-full h-full flex flex-col items-start justify-center gap-5">
                <h1 class="text-5xl text-mat-dark-blue max-w-3xl">
                    Bienvenue chez M@tformatique, <br>
                    à votre service <span class="text-mat-mid-blue">depuis 2010</span>
                </h1>
                <p class="text-sm text-mat-dark-blue max-w-md">
                    Notre but ? Vous rendre l'informatique plus facile
                    par le biais de conseils, de dépannages, de ventes
                    et d'accompagnement dans vos projets.
                </p>
                <div class="flex flex-row gap-1">
                    <x-button-dark href="#contact-form">Nous contacter</x-button-dark>
                    <x-button-light href="tel:0614341709">06.14.34.17.09</x-button-light>
                </div>
                <p class="absolute bottom-0 left-0 text-sm text-mat-dark-blue uppercase">
                    ● OUVERT AUJOURD’HUI DE 8H30 À 18H00
                </p>
            </div>
            <div class="w-full h-full flex flex-row items-center justify-center">
                <img class="max-w-xl" src="./images/bot-2.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-full bg-mat-dark-blue px-15 py-10">
        <div class="container mx-auto flex flex-row items-center justify-between gap-5 px-15">
            <div class="flex flex-col gap-2 text-center">
                <div class="text-5xl text-mat-light-blue">
                    +15 ans
                </div>
                <div class="text-sm text-white">
                    ans d'expérience
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-5xl text-mat-light-blue">
                    00
                </div>
                <div class="text-sm text-white">
                    xxxx xxxx
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-5xl text-mat-light-blue">
                    +380
                </div>
                <div class="text-sm text-white">
                    avis Google
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-5xl text-mat-light-blue">
                    00
                </div>
                <div class="text-sm text-white">
                    xxxx xxxx
                </div>
            </div>
            <div class="flex flex-col gap-2 text-center">
                <div class="text-5xl text-mat-light-blue">
                    ~48h
                </div>
                <div class="text-sm text-white">
                    pour un diagnostic
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-mat-gradient-light px-12 py-30">
        <div class="w-full container mx-auto flex flex-col gap-10">
            <div class="w-full flex flex-row">
                <div class="w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase">
                        ● Nos services
                    </p>
                </div>
                <div class="w-3/4 flex flex-col gap-5">
                    <h1 class="text-5xl text-mat-dark-blue max-w-3xl">
                        Découvrez tous <span class="text-mat-mid-blue">nos services</span>
                    </h1>
                    <p class="text-sm text-mat-dark-blue max-w-md">
                        Nos prises en charge ainsi que nos devis sont gratuits.
                        En cas de résolution lors de l’élaboration de ce dernier, un forfait de 61€ (89€ pour le matériel
                        Apple) peut être facturé.
                    </p>
                </div>
            </div>
            <div class="flex flex-row gap-5 items-stretch justify-between">
                <div class="p-7.5 rounded-lg bg-white w-full flex flex-col items-start justify-start gap-5">
                    <img class="h-25 max-w-25 object-center object-contain w-fit" src="./images/logo-bot-full.png"
                        alt="">
                    <h2 class="text-2xl text-mat-dark-blue uppercase">
                        Pour les professionnels
                    </h2>
                    <p class="text-sm text-mat-dark-blue">
                        • Assistance informatique <br>
                        • Contrat de maintenance <br>
                        • Vente et installation de matériel <br>
                        • Audit informatique <br>
                        • Mise en place de sauvegarde <br>
                        • Déplacement sur site
                    </p>
                </div>
                <div class="p-7.5 rounded-lg bg-white w-full flex flex-col items-start justify-start gap-5">
                    <img class="h-25 max-w-25 object-center object-contain w-fit" src="./images/bot-6.png" alt="">
                    <h2 class="text-2xl text-mat-dark-blue uppercase">
                        Pour les particuliers
                    </h2>
                    <p class="text-sm text-mat-dark-blue">
                        • Assistance informatique <br>
                        • Dépannage informatique <br>
                        • Accompagnement personnalisé à domicile <br>
                        • Vente et installation de matériel
                    </p>
                </div>
                <div class="p-7.5 rounded-lg bg-white w-full flex flex-col items-start justify-start gap-5">
                    <img class="h-25 max-w-25 object-center object-contain w-fit" src="./images/bot-7-rev.png"
                        alt="">
                    <h2 class="text-2xl text-mat-dark-blue uppercase">
                        Notre atelier
                    </h2>
                    <p class="text-sm text-mat-dark-blue">
                        • Vente et configuration de matériel <br>
                        • Dépannage informatique <br>
                        • Numérisation de données (photos, diapos, vidéos, ...) <br>
                        • Service d'impression et de photocopie
                    </p>
                </div>
                <div class="p-7.5 rounded-lg bg-white w-full flex flex-col items-start justify-start gap-5">
                    <img class="h-25 max-w-25 object-center object-contain w-fit" src="./images/salp.png" alt="">
                    <h2 class="text-2xl text-mat-dark-blue uppercase">
                        Service à la personne
                    </h2>
                    <p class="text-sm text-mat-dark-blue">
                        Possibilité de prestation à domicile sous couvert du service à la personne par notre seconde
                        structure Matformatique Service
                    </p>
                    <x-button-light :href="route('main.home')">En savoir plus</x-button-light>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-mat-gradient-light px-12 py-10">
        <div class="w-full container mx-auto">
            <img class="w-full rounded-lg aspect-13/6 object-cover object-center" src="./images/mat-photo.png"
                alt="">
        </div>
    </div>
    <div class="w-full relative bg-mat-gradient-light px-12 py-30">
        <img class="w-80 absolute bottom-0 right-0" src="./images/angle-droit.png" alt="">
        <div class="w-full container mx-auto flex flex-col gap-10">
            <div class="w-full flex flex-row">
                <div class="w-1/2 flex flex-col gap-5">
                    <p class="text-sm text-mat-mid-blue uppercase">
                        ● Nos étapes
                    </p>
                    <div class="w-3/4 flex flex-col gap-5">
                        <h1 class="text-5xl text-mat-dark-blue max-w-3xl">
                            Comment <br> <span class="text-mat-mid-blue">ça marche ?</span>
                        </h1>
                        <p class="text-sm text-mat-dark-blue max-w-md">
                            Notre guide étape par étape pour la réparation
                            de votre matériel informatique.
                        </p>
                    </div>
                </div>
                <div class="w-1/2 flex flex-col gap-2.5">
                    <div class="px-7.5 py-2.5 rounded-lg bg-white w-full flex flex-col items-start justify-start">
                        <div class="toggle-title w-full cursor-pointer flex flex-row items-center justify-start gap-5">
                            <div class="text-5xl text-mat-light-blue">01</div>
                            <h2 class="text-2xl text-mat-dark-blue uppercase">
                                Prise de contact
                            </h2>
                            <div
                                class="w-8 h-8 p-1 aspect-square bg-mat-light-blue rounded-full flex flex-row items-center justify-center leading-0 text-xl ml-auto">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="toggle-minus hidden" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="text-sm text-mat-dark-blue toggle-paragraph h-full max-h-0 overflow-hidden transition-[max-height] duration-700">
                            <div class="h-5"></div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit
                            urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                        </div>
                    </div>
                    <div class="px-7.5 py-2.5 rounded-lg bg-white w-full flex flex-col items-start justify-start">
                        <div class="toggle-title w-full cursor-pointer flex flex-row items-center justify-start gap-5">
                            <div class="text-5xl text-mat-light-blue">02</div>
                            <h2 class="text-2xl text-mat-dark-blue uppercase">
                                Diagnostic
                            </h2>
                            <div
                                class="w-8 h-8 p-1 aspect-square bg-mat-light-blue rounded-full flex flex-row items-center justify-center leading-0 text-xl ml-auto">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="toggle-minus hidden" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="text-sm text-mat-dark-blue toggle-paragraph h-full max-h-0 overflow-hidden transition-[max-height] duration-700">
                            <div class="h-5"></div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit
                            urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh. Maecenas vitae mattis tellus. Nullam
                            quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                        </div>
                    </div>
                    <div class="px-7.5 py-2.5 rounded-lg bg-white w-full flex flex-col items-start justify-start">
                        <div class="toggle-title w-full cursor-pointer flex flex-row items-center justify-start gap-5">
                            <div class="text-5xl text-mat-light-blue">03</div>
                            <h2 class="text-2xl text-mat-dark-blue uppercase">
                                Devis
                            </h2>
                            <div
                                class="w-8 h-8 p-1 aspect-square bg-mat-light-blue rounded-full flex flex-row items-center justify-center leading-0 text-xl ml-auto">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="toggle-minus hidden" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="text-sm text-mat-dark-blue toggle-paragraph h-full max-h-0 overflow-hidden transition-[max-height] duration-700">
                            <div class="h-5"></div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit
                            urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                        </div>
                    </div>
                    <div class="px-7.5 py-2.5 rounded-lg bg-white w-full flex flex-col items-start justify-start">
                        <div class="toggle-title w-full cursor-pointer flex flex-row items-center justify-start gap-5">
                            <div class="text-5xl text-mat-light-blue">04</div>
                            <h2 class="text-2xl text-mat-dark-blue uppercase">
                                Réparation
                            </h2>
                            <div
                                class="w-8 h-8 p-1 aspect-square bg-mat-light-blue rounded-full flex flex-row items-center justify-center leading-0 text-xl ml-auto">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="toggle-minus hidden" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="text-sm text-mat-dark-blue toggle-paragraph h-full max-h-0 overflow-hidden transition-[max-height] duration-700">
                            <div class="h-5"></div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit
                            urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                        </div>
                    </div>
                    <div class="px-7.5 py-2.5 rounded-lg bg-white w-full flex flex-col items-start justify-start">
                        <div class="toggle-title w-full cursor-pointer flex flex-row items-center justify-start gap-5">
                            <div class="text-5xl text-mat-light-blue">05</div>
                            <h2 class="text-2xl text-mat-dark-blue uppercase">
                                Remise du matériel
                            </h2>
                            <div
                                class="w-8 h-8 p-1 aspect-square bg-mat-light-blue rounded-full flex flex-row items-center justify-center leading-0 text-xl ml-auto">
                                <svg class="toggle-plus" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="round" />
                                </svg>
                                <svg class="toggle-minus hidden" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap=""
                                        stroke-linejoin="" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="text-sm text-mat-dark-blue toggle-paragraph h-full max-h-0 overflow-hidden transition-[max-height] duration-700">
                            <div class="h-5"></div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit
                            urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris.
                            Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non
                            suscipit magna interdum eu. Curabitur pellentesque nibh.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-mat-dark-blue px-15 py-10 overflow-hidden">
        <div class="container mx-auto flex flex-row items-center justify-between gap-5 px-15">
            <div class="w-1/2 flex flex-col gap-5">
                <p class="text-sm text-mat-light-blue uppercase">
                    ● Nos partenaires
                </p>
            </div>
        </div>

        <div class="w-full mt-10 flex overflow-hidden select-none gap-20">
            <div class="flex flex-row gap-20 flex-nowrap shrink-0 animate-marquee">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
            </div>

            <div class="flex flex-row gap-20 flex-nowrap shrink-0 animate-marquee" aria-hidden="true">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="Logo" class="h-5 w-auto object-contain">
            </div>
        </div>
    </div>
    <div class="relative w-full bg-mat-gradient-light px-12 py-30">
        <div class="w-full container mx-auto flex flex-col gap-10">
            <div class="w-full flex flex-row">
                <div class="w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase">
                        ● Notre équipe
                    </p>
                </div>
                <div class="w-3/4 flex flex-col gap-5">
                    <h1 class="text-5xl text-mat-dark-blue max-w-3xl">
                        Venez à la rencontre de <br> <span class="text-mat-mid-blue">notre équipe</span>
                    </h1>
                    <p class="text-sm text-mat-dark-blue max-w-md">
                        Derrière chaque réparation, il y a une personne à l’écoute et passionnée. Nous prenons soin de votre
                        matériel avec attention, en privilégiant la confiance et le contact humain.
                    </p>
                </div>
            </div>
            <div class="flex flex-row gap-5 items-stretch justify-center">
                <div
                    class="p-7.5 rounded-lg bg-white w-full max-w-96 aspect-3/4 flex flex-col items-start justify-start gap-5">
                    <div class="flex flex-col">
                        <img class="h-26 aspect-square rounded-lg object-center object-cover w-fit grayscale"
                            src="./images/team.jpg" alt="">
                        <h2 class="text-2xl text-mat-dark-blue uppercase mt-5">
                            John Smith
                        </h2>
                        <p class="text-sm text-mat-dark-blue">
                            Fondateur
                        </p>
                    </div>
                    <p class="text-sm text-mat-dark-blue mt-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
                        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                        mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna
                        interdum eu. Curabitur pellentesque nibh.
                    </p>
                </div>
                <div
                    class="p-7.5 rounded-lg bg-white w-full max-w-96 aspect-3/4 flex flex-col items-start justify-start gap-5">
                    <div class="flex flex-col">
                        <img class="h-26 aspect-square rounded-lg object-center object-cover w-fit grayscale"
                            src="./images/team.jpg" alt="">
                        <h2 class="text-2xl text-mat-dark-blue uppercase mt-5">
                            John Smith
                        </h2>
                        <p class="text-sm text-mat-dark-blue">
                            Fondateur
                        </p>
                    </div>
                    <p class="text-sm text-mat-dark-blue mt-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
                        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                        mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna
                        interdum eu. Curabitur pellentesque nibh.
                    </p>
                </div>
                <div
                    class="p-7.5 rounded-lg bg-white w-full max-w-96 aspect-3/4 flex flex-col items-start justify-start gap-5">
                    <div class="flex flex-col">
                        <img class="h-26 aspect-square rounded-lg object-center object-cover w-fit grayscale"
                            src="./images/team.jpg" alt="">
                        <h2 class="text-2xl text-mat-dark-blue uppercase mt-5">
                            John Smith
                        </h2>
                        <p class="text-sm text-mat-dark-blue">
                            Fondateur
                        </p>
                    </div>
                    <p class="text-sm text-mat-dark-blue mt-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
                        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                        mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna
                        interdum eu. Curabitur pellentesque nibh.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-mat-dark-blue px-15 py-30 overflow-hidden">
        <div class="container mx-auto flex flex-col items-start justify-between gap-10 px-15">
            <div class="w-1/2 flex flex-col gap-5">
                <p class="text-sm text-mat-light-blue uppercase">
                    ● Vos avis
                </p>
            </div>
            <div class="flex flex-row gap-34 flex-nowrap min-w-full text-white text-sm">
                <div class="flex flex-col gap-2.5 max-w-72">
                    <div class="flex flex-row">
                        @for ($i = 0; $i <= 4; $i++)
                            <svg class="w-4" width="100%" height="100%" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2827 3.45332C11.5131 2.98638 11.6284 2.75291 11.7848 2.67831C11.9209 2.61341 12.0791 2.61341 12.2152 2.67831C12.3717 2.75291 12.4869 2.98638 12.7174 3.45332L14.9041 7.88328C14.9721 8.02113 15.0061 8.09006 15.0558 8.14358C15.0999 8.19096 15.1527 8.22935 15.2113 8.25662C15.2776 8.28742 15.3536 8.29854 15.5057 8.32077L20.397 9.03571C20.9121 9.11099 21.1696 9.14863 21.2888 9.27444C21.3925 9.38389 21.4412 9.5343 21.4215 9.68377C21.3988 9.85558 21.2124 10.0372 20.8395 10.4004L17.3014 13.8464C17.1912 13.9538 17.136 14.0076 17.1004 14.0715C17.0689 14.128 17.0487 14.1902 17.0409 14.2545C17.0321 14.3271 17.0451 14.403 17.0711 14.5547L17.906 19.4221C17.994 19.9355 18.038 20.1922 17.9553 20.3445C17.8833 20.477 17.7554 20.57 17.6071 20.5975C17.4366 20.6291 17.2061 20.5078 16.7451 20.2654L12.3724 17.9658C12.2361 17.8942 12.168 17.8584 12.0962 17.8443C12.0327 17.8318 11.9673 17.8318 11.9038 17.8443C11.832 17.8584 11.7639 17.8942 11.6277 17.9658L7.25492 20.2654C6.79392 20.5078 6.56341 20.6291 6.39297 20.5975C6.24468 20.57 6.11672 20.477 6.04474 20.3445C5.962 20.1922 6.00603 19.9355 6.09407 19.4221L6.92889 14.5547C6.95491 14.403 6.96793 14.3271 6.95912 14.2545C6.95132 14.1902 6.93111 14.128 6.89961 14.0715C6.86402 14.0076 6.80888 13.9538 6.69859 13.8464L3.16056 10.4004C2.78766 10.0372 2.60121 9.85558 2.57853 9.68377C2.55879 9.5343 2.60755 9.38389 2.71125 9.27444C2.83044 9.14863 3.08797 9.11099 3.60304 9.03571L8.49431 8.32077C8.64642 8.29854 8.72248 8.28742 8.78872 8.25662C8.84736 8.22935 8.90016 8.19096 8.94419 8.14358C8.99391 8.09006 9.02793 8.02113 9.09597 7.88328L11.2827 3.45332Z"
                                    stroke="currentColor" stroke-width="1" stroke-linecap="" stroke-linejoin="" />
                            </svg>
                        @endfor
                    </div>
                    <p>
                        “Vraiment super rapidité, efficacité, sourire. De plus ne vous facture que ce qui est nécessaire
                        avec un rapport qualité prix vraiment au top. Si vous avez un problème informatique allez y les yeux
                        fermés ce sont des pros.”
                    </p>
                    <p class="text-mat-light-blue">
                        <span class="uppercase">Catherine Bouillon</span> <br>
                        Il y a 2 mois
                    </p>
                </div>
                <div class="flex flex-col gap-2.5 max-w-72">
                    <div class="flex flex-row">
                        @for ($i = 0; $i <= 4; $i++)
                            <svg class="w-4" width="100%" height="100%" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.2827 3.45332C11.5131 2.98638 11.6284 2.75291 11.7848 2.67831C11.9209 2.61341 12.0791 2.61341 12.2152 2.67831C12.3717 2.75291 12.4869 2.98638 12.7174 3.45332L14.9041 7.88328C14.9721 8.02113 15.0061 8.09006 15.0558 8.14358C15.0999 8.19096 15.1527 8.22935 15.2113 8.25662C15.2776 8.28742 15.3536 8.29854 15.5057 8.32077L20.397 9.03571C20.9121 9.11099 21.1696 9.14863 21.2888 9.27444C21.3925 9.38389 21.4412 9.5343 21.4215 9.68377C21.3988 9.85558 21.2124 10.0372 20.8395 10.4004L17.3014 13.8464C17.1912 13.9538 17.136 14.0076 17.1004 14.0715C17.0689 14.128 17.0487 14.1902 17.0409 14.2545C17.0321 14.3271 17.0451 14.403 17.0711 14.5547L17.906 19.4221C17.994 19.9355 18.038 20.1922 17.9553 20.3445C17.8833 20.477 17.7554 20.57 17.6071 20.5975C17.4366 20.6291 17.2061 20.5078 16.7451 20.2654L12.3724 17.9658C12.2361 17.8942 12.168 17.8584 12.0962 17.8443C12.0327 17.8318 11.9673 17.8318 11.9038 17.8443C11.832 17.8584 11.7639 17.8942 11.6277 17.9658L7.25492 20.2654C6.79392 20.5078 6.56341 20.6291 6.39297 20.5975C6.24468 20.57 6.11672 20.477 6.04474 20.3445C5.962 20.1922 6.00603 19.9355 6.09407 19.4221L6.92889 14.5547C6.95491 14.403 6.96793 14.3271 6.95912 14.2545C6.95132 14.1902 6.93111 14.128 6.89961 14.0715C6.86402 14.0076 6.80888 13.9538 6.69859 13.8464L3.16056 10.4004C2.78766 10.0372 2.60121 9.85558 2.57853 9.68377C2.55879 9.5343 2.60755 9.38389 2.71125 9.27444C2.83044 9.14863 3.08797 9.11099 3.60304 9.03571L8.49431 8.32077C8.64642 8.29854 8.72248 8.28742 8.78872 8.25662C8.84736 8.22935 8.90016 8.19096 8.94419 8.14358C8.99391 8.09006 9.02793 8.02113 9.09597 7.88328L11.2827 3.45332Z"
                                    stroke="currentColor" stroke-width="1" stroke-linecap="" stroke-linejoin="" />
                            </svg>
                        @endfor
                    </div>
                    <p>
                        “Vraiment super rapidité, efficacité, sourire. De plus ne vous facture que ce qui est nécessaire
                        avec un rapport qualité prix vraiment au top. Si vous avez un problème informatique allez y les yeux
                        fermés ce sont des pros.”
                    </p>
                    <p class="text-mat-light-blue">
                        <span class="uppercase">Catherine Bouillon</span> <br>
                        Il y a 2 mois
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-form" class="relative w-full bg-mat-gradient-light px-12 py-30">
        <img class="w-80 absolute bottom-0 left-0" src="./images/angle-gauche.png" alt="">
        <div class="w-full container mx-auto flex flex-col gap-10">
            <div class="w-full container mx-auto flex flex-col gap-10">
                <div class="w-full flex flex-row">
                    <div class="w-full flex flex-col gap-5">
                        <p class="text-sm text-mat-mid-blue uppercase">
                            ● Contact
                        </p>
                        <div class="w-3/4 flex flex-col gap-5 mb-12.5">
                            <h1 class="text-5xl text-mat-dark-blue max-w-3xl">
                                Besoin <span class="text-mat-mid-blue">d'aide ?</span>
                            </h1>
                            <p class="text-sm text-mat-dark-blue max-w-md">
                                Que ce soit pour une réparation urgente ou juste un conseil, on est là. Appelez-nous, passez
                                à l'atelier, ou envoyez-nous un message. On s'occupe du reste.
                            </p>
                        </div>
                        <div class="flex flex-row gap-32 w-full">
                            <div class="flex flex-col gap-5 w-full">
                                <form class="w-full flex flex-col gap-2.5"
                                    action="{{ route('contact.submit') }}#contact-form" method="POST">
                                    @csrf

                                    @if (session('success'))
                                        <div style="color: green; margin-bottom: 15px;">{{ session('success') }}</div>
                                    @endif

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-sm uppercase text-mat-dark-blue" for="name">Nom</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            required placeholder="John Smith"
                                            class="p-2.5 bg-white rounded-lg text-sm text-mat-dark-blue">
                                        @error('name')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-sm uppercase text-mat-dark-blue" for="phone">Téléphone
                                        </label>
                                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                            placeholder="06 01 02 03 04"
                                            class="p-2.5 bg-white rounded-lg text-sm text-mat-dark-blue">
                                        @error('phone')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-sm uppercase text-mat-dark-blue" for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                                            required placeholder="john@example.com"
                                            class="p-2.5 bg-white rounded-lg text-sm text-mat-dark-blue">
                                        @error('email')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex flex-col gap-2.5">
                                        <label class="text-sm uppercase text-mat-dark-blue" for="message">Message
                                        </label>
                                        <textarea id="message" name="message" required class="p-2.5 h-30 bg-white rounded-lg text-sm text-mat-dark-blue">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button
                                        class="cursor-pointer hover:bg-mat-mid-blue transition-colors duration-300 bg-mat-dark-blue text-white text-sm px-2.5 py-2 rounded-lg"
                                        type="submit">Envoyer</button>
                                </form>
                            </div>
                            <div class="flex flex-col gap-5 w-full">
                                <div>
                                    <span class="text-sm text-mat-mid-blue uppercase">Téléphone</span> <br>
                                    <a href="tel:0614341709" class="text-mat-dark-blue text-2xl">06 14 34 17 09</a>
                                </div>
                                <div>
                                    <span class="text-sm text-mat-mid-blue uppercase">Email</span> <br>
                                    <a href="mailto:contact@matformatique.com"
                                        class="text-mat-dark-blue text-2xl">contact@matformatique.com</a>
                                </div>
                                <div>
                                    <span class="text-sm text-mat-mid-blue uppercase">Adresse</span> <br>
                                    <div class="text-mat-dark-blue text-2xl">
                                        3 rue de Livron, <br>
                                        64000 Pau
                                    </div>
                                </div>
                                <img class="w-full aspect-20/9 rounded-lg object-cover object-center"
                                    src="./images/plan-matformatique.png" alt="">
                                <div class="text-sm text-mat-mid-blue">
                                    Notre zone primaire d'intervention est de 20 Kms autour de l'atelier et de 50 Kms pour
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
