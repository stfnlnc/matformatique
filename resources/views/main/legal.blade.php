@extends('base')

@section('content')
    <div id="mentions-legales" class="w-full bg-mat-gradient-light py-30">
        <div class="w-full container px-4 mx-auto flex flex-col gap-16">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">

                </div>
                <div class="md:w-3/4 flex flex-col gap-5">
                    <h1 class="text-4xl md:text-5xl text-mat-dark-blue max-w-3xl">
                        Mentions <span class="text-mat-mid-blue">légales</span>
                    </h1>
                    <p class="text-sm text-mat-dark-blue max-w-md">
                        Conformément aux dispositions de l'article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance
                        dans l'Économie Numérique (LCEN).
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Éditeur du site
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Identité de l'<span class="text-mat-mid-blue">entreprise</span>
                    </h2>
                    <p><strong class="font-medium text-mat-mid-blue">Nom de l'atelier :</strong> Matformatique</p>
                    <p><strong class="font-medium text-mat-mid-blue">Statut juridique :</strong> SARL</p>
                    <p><strong class="font-medium text-mat-mid-blue">Siège social :</strong> 3 rue de Livron, 64000 Pau
                    </p>
                    <p><strong class="font-medium text-mat-mid-blue">Numéro SIRET :</strong> 522 474 881 00037</p>
                    <p><strong class="font-medium text-mat-mid-blue">Directeur de la publication :</strong> Mathieu Pellet
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Contact
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Nous <span class="text-mat-mid-blue">joindre</span>
                    </h2>
                    <p><strong class="font-medium text-mat-mid-blue">Téléphone :</strong> 06 14 34 17 09</p>
                    <p><strong class="font-medium text-mat-mid-blue">E-mail :</strong> contact@matformatique.com</p>
                    <p><strong class="font-medium text-mat-mid-blue">Horaires :</strong> Se référer aux horaires mis à jour
                        en temps réel visibles sur la page d'accueil.</p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Hébergement
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
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

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Droits d'auteur
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Propriété <span class="text-mat-mid-blue">intellectuelle</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        L'intégralité des contenus présents sur ce site (textes, arborescence, charte graphique, logos,
                        icônes) est la propriété exclusive de <strong>Matformatique</strong>, à l'exception
                        notable des données dynamiques provenant de tiers (avis clients, notes de satisfaction et états
                        d'ouverture synchronisés via l'API Google Places).
                    </p>

                    <div class="mt-2 flex flex-col gap-2 border-l-2 border-mat-mid-blue/30 pl-4 py-1">
                        <p><strong class="font-medium text-mat-mid-blue">Crédits photographiques :</strong> Onze Digital</p>
                        <p><strong class="font-medium text-mat-mid-blue">Crédits illustrations :</strong> Sylvain Brosset
                        </p>
                    </div>

                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90 mt-2">
                        Toute extraction, modification ou reproduction totale ou partielle de ces éléments sans accord écrit
                        préalable de leurs auteurs respectifs est strictement interdite et expose le contrevenant à des
                        poursuites.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
