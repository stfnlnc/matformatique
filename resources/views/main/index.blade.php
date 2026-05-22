@extends('base')

@section('content')
    <div class="w-full h-lvh min-h-200 bg-linear-to-r from-mat-gradient-light to-mat-gradient-dark px-12 py-8">
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
                    <a class="bg-mat-dark-blue text-white text-sm px-2.5 py-2 rounded-lg" href="">Nous
                        contacter</a>
                    <a class="bg-mat-light-blue text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg"
                        href="">06.14.34.17.09</a>
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
                    <a class="group relative bg-mat-light-blue text-mat-dark-blue text-sm px-2.5 py-2 rounded-lg overflow-hidden"
                        href="">
                        <div
                            class="group-hover:top-1/2 group-hover:left-0 group-hover:-translate-y-1/2 scale-120 transition-all duration-700 absolute top-full left-full rounded-full w-full aspect-square bg-mat-dark-blue">
                        </div>
                        <div class="relative group-hover:text-mat-light-blue transition-colors duration-600">
                            En savoir plus
                        </div>
                    </a>
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
    <div class="w-full bg-mat-gradient-light px-12 py-30">
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
        <div class="w-full mt-10">
            <div class="flex flex-row gap-20 flex-nowrap min-w-full animate-marquee">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">

                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
                <img src="./images/logo.png" alt="" class="h-5 w-auto object-contain">
            </div>
        </div>
    </div>
@endsection
