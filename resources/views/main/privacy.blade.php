@extends('base')

@section('content')
    <div id="politique-confidentialite" class="w-full bg-mat-gradient-light py-30">
        <div class="w-full container px-4 mx-auto flex flex-col gap-16">


            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">

                </div>
                <div class="md:w-3/4 flex flex-col gap-5">
                    <h1 class="text-4xl md:text-5xl text-mat-dark-blue max-w-3xl">
                        Politique de <span class="text-mat-mid-blue">confidentialité</span>
                    </h1>
                    <p class="text-sm text-mat-dark-blue max-w-md">
                        Vos données sont précieuses. Cette page vous explique comment nous collectons, traitons et
                        protégeons vos informations personnelles.
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Responsable
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Gestion des <span class="text-mat-mid-blue">données</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Le responsable du traitement des données personnelles collectées sur ce site est
                        <strong>Matformatique</strong>, représenté par Mathieu Pellet.
                    </p>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Pour toute question relative à la protection de vos données, vous pouvez nous écrire à : <strong
                            class="text-mat-mid-blue">contact@matformatique.com</strong>.
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Collecte
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Données collectées et <span class="text-mat-mid-blue">finalités</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Nous collectons uniquement les données strictement nécessaires aux services de l'atelier, notamment
                        via notre formulaire de contact ou lors de vos demandes de devis :
                    </p>
                    <ul class="list-disc list-inside mt-2 flex flex-col gap-1 text-mat-dark-blue/90 pl-2">
                        <li><strong class="font-medium text-mat-mid-blue">Identité :</strong> Nom, prénom (pour savoir à qui
                            nous nous adressons).</li>
                        <li><strong class="font-medium text-mat-mid-blue">Coordonnées :</strong> Adresse e-mail, numéro de
                            téléphone (pour vous recontacter concernant vos réparations).</li>
                        <li><strong class="font-medium text-mat-mid-blue">Informations techniques :</strong> Description de
                            la panne de votre matériel informatique.</li>
                    </ul>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90 mt-2">
                        Ces données ne sont jamais utilisées à des fins commerciales non consenties, ni revendues à des
                        tiers.
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Services tiers
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Transmission et <span class="text-mat-mid-blue">outils tiers</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Notre site utilise des services externes pour enrichir votre expérience utilisateur :
                    </p>
                    <ul class="list-disc list-inside mt-2 flex flex-col gap-1 text-mat-dark-blue/90 pl-2">
                        <li><strong class="font-medium text-mat-mid-blue">Google Places API :</strong> Utilisé pour afficher
                            nos horaires d'ouverture, notre note et nos avis clients en temps réel. Google peut collecter
                            des données anonymisées de navigation (comme votre adresse IP) lors du chargement de ces
                            éléments.</li>
                        <li><strong class="font-medium text-mat-mid-blue">Ionos / Hébergement Web :</strong>
                            Vos e-mails de contact transitent et sont stockés de manière sécurisée sur nos serveurs de
                            messagerie.</li>
                    </ul>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Sécurité
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Durée de conservation et <span class="text-mat-mid-blue">protection</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Vos données de contact sont conservées en base de données pour une durée maximale de <strong>3
                            ans</strong> après le dernier échange ou la clôture de votre dossier de réparation, sauf
                        obligation légale de conservation comptable (facturation).
                    </p>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Les flux de notre site sont entièrement sécurisés par un protocole de chiffrement <strong
                            class="font-medium text-mat-mid-blue">SSL (HTTPS)</strong>, garantissant que les informations
                        transmises via nos formulaires ne peuvent pas être interceptées.
                    </p>
                </div>
            </div>

            <hr class="border-mat-mid-blue/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-mid-blue uppercase font-semibold">
                        ● Vos droits
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-3 text-sm text-mat-dark-blue">
                    <h2 class="text-2xl font-bold text-mat-dark-blue mb-2">
                        Application du <span class="text-mat-mid-blue">RGPD</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d’un droit
                        d’accès, de rectification, de portabilité et d’effacement de vos données personnelles. Vous pouvez
                        également demander la limitation du traitement de ces données.
                    </p>
                    <p class="max-w-2xl leading-relaxed text-mat-dark-blue/90">
                        Pour exercer ces droits, il vous suffit de nous envoyer un e-mail à <strong
                            class="text-mat-mid-blue">contact@matformatique.com</strong> en indiquant l'objet de votre
                        demande. Nous y répondrons dans les meilleurs délais.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
