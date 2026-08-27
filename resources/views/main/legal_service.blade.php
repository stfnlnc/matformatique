@extends('base')

@section('title', 'Mentions légales')

@section('content')
    <div id="mentions-legales" class="bg-mat-gradient-light py-30 w-full">
        <div class="flex flex-col gap-16 mx-auto px-4 w-full container">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">

                </div>
                <div class="flex flex-col gap-5 md:w-3/4">
                    <h1 class="max-w-3xl text-mat-dark-blue text-4xl md:text-5xl">
                        Mentions <span class="text-mat-mid-blue">légales</span>
                    </h1>
                    <p class="max-w-md text-mat-dark-blue text-sm">
                        Conformément aux dispositions de l'article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance
                        dans l'Économie Numérique (LCEN).
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="font-semibold text-mat-mid-blue text-sm uppercase">
                        ● Éditeur du site
                    </p>
                </div>
                <div class="flex flex-col gap-3 md:w-3/4 text-mat-dark-blue text-sm">
                    <h2 class="mb-2 font-bold text-mat-dark-blue text-2xl">
                        Identité de l'<span class="text-mat-mid-blue">entreprise</span>
                    </h2>
                    <p><strong class="font-medium text-mat-mid-blue">Nom de l'entreprise :</strong> Matformatique Service
                    </p>
                    <p><strong class="font-medium text-mat-mid-blue">Statut juridique :</strong> EI</p>
                    <p><strong class="font-medium text-mat-mid-blue">Siège social :</strong> 3 rue de Livron, 64000 Pau
                    </p>
                    <p><strong class="font-medium text-mat-mid-blue">Numéro SIRET :</strong> 522 472 794 00042</p>
                    <p><strong class="font-medium text-mat-mid-blue">Directeur de la publication :</strong> Mathieu Pellet
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="font-semibold text-mat-mid-blue text-sm uppercase">
                        ● Contact
                    </p>
                </div>
                <div class="flex flex-col gap-3 md:w-3/4 text-mat-dark-blue text-sm">
                    <h2 class="mb-2 font-bold text-mat-dark-blue text-2xl">
                        Nous <span class="text-mat-mid-blue">joindre</span>
                    </h2>
                    <p><strong class="font-medium text-mat-mid-blue">Téléphone :</strong> 06 14 34 17 09</p>
                    <p><strong class="font-medium text-mat-mid-blue">E-mail :</strong> contact@matformatique.com</p>
                    <p><strong class="font-medium text-mat-mid-blue">Horaires :</strong> Se référer aux horaires mis à jour
                        en temps réel visibles sur la page d'accueil.</p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="font-semibold text-mat-mid-blue text-sm uppercase">
                        ● Hébergement
                    </p>
                </div>
                <div class="flex flex-col gap-3 md:w-3/4 text-mat-dark-blue text-sm">
                    <h2 class="mb-2 font-bold text-mat-dark-blue text-2xl">
                        Infrastructures <span class="text-mat-mid-blue">web</span>
                    </h2>
                    <p><strong class="font-medium text-mat-mid-blue">Hébergeur :</strong> OVH Cloud</p>
                    <p><strong class="font-medium text-mat-mid-blue">Raison sociale :</strong> OVH SAS</p>
                    <p><strong class="font-medium text-mat-mid-blue">Adresse :</strong> 2 rue Kellermann - 59100 Roubaix -
                        France</p>
                    <p><strong class="font-medium text-mat-mid-blue">Site de l'hébergeur :</strong> www.ovhcloud.com</p>
                    <p class="mb-3"><strong class="font-medium text-mat-mid-blue">_____</strong>
                    <p><strong class="font-medium text-mat-mid-blue">Nom de domaine :</strong> Ionos</p>
                    <p><strong class="font-medium text-mat-mid-blue">Raison sociale :</strong> Ionos SARL</p>
                    <p><strong class="font-medium text-mat-mid-blue">Adresse :</strong> 7 place de la Gare - 57200
                        Sarreguemines -
                        France</p>
                    <p><strong class="font-medium text-mat-mid-blue">Site de l'hébergeur :</strong> www.ionos.fr</p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="flex md:flex-row flex-col gap-4 w-full">
                <div class="md:w-1/4">
                    <p class="font-semibold text-mat-mid-blue text-sm uppercase">
                        ● Droits d'auteur
                    </p>
                </div>
                <div class="flex flex-col gap-3 md:w-3/4 text-mat-dark-blue text-sm">
                    <h2 class="mb-2 font-bold text-mat-dark-blue text-2xl">
                        Propriété <span class="text-mat-mid-blue">intellectuelle</span>
                    </h2>
                    <p class="max-w-2xl text-mat-dark-blue/90 leading-relaxed">
                        L'intégralité des contenus présents sur ce site (textes, arborescence, charte graphique, logos,
                        icônes) est la propriété exclusive de <strong>Matformatique</strong>, à l'exception
                        notable des données dynamiques provenant de tiers (avis clients, notes de satisfaction et états
                        d'ouverture synchronisés via l'API Google Places).
                    </p>

                    <div class="flex flex-col gap-2 mt-2 py-1 pl-4 border-mat-mid-blue/30 border-l-2">
                        <p><strong class="font-medium text-mat-mid-blue">Crédits illustrations :</strong>
                            <a target="_blank" class="underline underline-offset-4"
                                href="https://latelierdessine.fr/">Sylvain Brosset</a>
                        </p>
                        <p><strong class="font-medium text-mat-mid-blue">Développement web :</strong>
                            <a target="_blank" class="underline underline-offset-4" href="https://stefanlancelot.com">Stéfan
                                Lancelot</a>
                        </p>
                    </div>

                    <p class="mt-2 max-w-2xl text-mat-dark-blue/90 leading-relaxed">
                        Toute extraction, modification ou reproduction totale ou partielle de ces éléments sans accord écrit
                        préalable de leurs auteurs respectifs est strictement interdite et expose le contrevenant à des
                        poursuites.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
