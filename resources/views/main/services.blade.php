@extends('base')

@section('title', 'Assistance à domicile')

@section('content')
    <div id="services-personne" class="w-full bg-mat-dark-blue py-30">
        <div class="w-full container px-4 mx-auto flex flex-col gap-16">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                </div>
                <div class="md:w-3/4 flex flex-col gap-5">
                    <h1 class="text-4xl md:text-5xl text-white max-w-3xl font-bold">
                        Matformatique <span class="text-mat-light-blue">Service</span>
                    </h1>
                    <p class="text-sm text-white/80 max-w-xl font-medium py-1">
                        Déclaré pour les services à la personne par arrêté préfectoral N° SAP522472794
                    </p>
                </div>
            </div>

            <hr class="border-white/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-light-blue uppercase font-semibold">
                        ● Avantages fiscaux
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-4 text-sm text-white/90">
                    <h2 class="text-2xl font-bold text-white">
                        Crédit d'impôt de <span class="text-mat-light-blue">50%</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed">
                        Matformatique Service est une entreprise dédiée aux prestations à domicile en lien avec les services
                        à la personne.
                    </p>
                    <p class="max-w-2xl leading-relaxed">
                        Les services informatiques à domicile entrent dans le cadre de la loi du 26 juillet 2006 relative au
                        développement des services à la personne. De ce fait, ils ouvrent droit à une <strong>déduction ou
                            un crédit d'impôt de 50%</strong> des sommes dépensées pour ces prestations.
                    </p>

                    <!-- Liens utiles -->
                    <div class="mt-2 flex flex-col gap-2 text-xs text-white/70">
                        <p class="uppercase text-mat-light-blue tracking-wider font-semibold">Plus d'informations :</p>
                        <p>• Les réductions ou crédits d'impôts : <a href="https://www.impots.gouv.fr" target="_blank"
                                class="text-white hover:text-mat-light-blue underline transition-colors">www.impots.gouv.fr</a>
                        </p>
                        <p>• Le service à la personne : <a href="https://www.servicesalapersonne.gouv.fr" target="_blank"
                                class="text-white hover:text-mat-light-blue underline transition-colors">www.servicesalapersonne.gouv.fr</a>
                        </p>
                    </div>
                </div>
            </div>

            <hr class="border-white/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-light-blue uppercase font-semibold">
                        ● Prestations
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-5 text-sm text-white/90">
                    <h2 class="text-2xl font-bold text-white">
                        Assistance et <span class="text-mat-light-blue">Accompagnement</span>
                    </h2>

                    <!-- Liste des services techniques -->
                    <ul class="list-disc list-inside flex flex-col gap-2 pl-2 max-w-2xl text-white/80">
                        <li>Installation de votre ordinateur et de vos périphériques.</li>
                        <li>Configuration de votre connexion internet : <span class="text-white">Wi-Fi, CPL,
                                Ethernet</span>.</li>
                        <li>Installation et mise à jour de vos logiciels et matériels.</li>
                        <li>Installation de votre Box (<span class="text-white">Livebox, Freebox, Révolution, etc.</span>).
                        </li>
                        <li>Maintenance complète de votre système informatique.</li>
                    </ul>
                </div>
            </div>

            <hr class="border-white/10">

            <div class="w-full flex md:flex-row flex-col gap-4">
                <div class="md:w-1/4">
                    <p class="text-sm text-mat-light-blue uppercase font-semibold">
                        ● Formation
                    </p>
                </div>
                <div class="md:w-3/4 flex flex-col gap-4 text-sm text-white/90">
                    <h2 class="text-2xl font-bold text-white">
                        Initiation & <span class="text-mat-light-blue">perfectionnement</span>
                    </h2>
                    <p class="max-w-2xl leading-relaxed text-white/70">
                        Nous vous accompagnons pas à pas pour maîtriser vos outils du quotidien :
                    </p>

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 max-w-2xl mt-2 text-white/80 border-l border-white/10 pl-4">
                        <p><strong class="font-medium text-mat-light-blue">Systèmes :</strong> Windows, macOS</p>
                        <p><strong class="font-medium text-mat-light-blue">Bureautique :</strong> Excel, Word, OpenOffice,
                            LibreOffice</p>
                        <p><strong class="font-medium text-mat-light-blue">Navigation :</strong> Google Chrome, Mozilla
                            Firefox</p>
                        <p><strong class="font-medium text-mat-light-blue">Messagerie :</strong> Outlook, Thunderbird,
                            webmails</p>
                        <p><strong class="font-medium text-mat-light-blue">Réseaux :</strong> Communication, réseaux sociaux
                            (Facebook...)</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
