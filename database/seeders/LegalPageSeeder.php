<?php

namespace Database\Seeders;

use App\Models\LegalPage;
use Illuminate\Database\Seeder;

class LegalPageSeeder extends Seeder
{
    public function run(): void
    {
        LegalPage::current()->update([
            'mentions_legales' => $this->mentions(
                nom: ['Nom de l\'atelier', 'Matformatique'],
                statut: 'SARL',
                siret: '522 474 881 00037',
                credits: [
                    ['Crédits photographiques', 'Onze Digital', 'https://onzedigital.fr/'],
                    ['Crédits illustrations', 'Sylvain Brosset', 'https://latelierdessine.fr/'],
                    ['Crédits illustrations', 'Ddou', 'https://couturedelphine.wixsite.com/ddou'],
                    ['Développement web', 'Stéfan Lancelot', 'https://stefanlancelot.com'],
                ],
            ),
            'mentions_legales_service' => $this->mentions(
                nom: ['Nom de l\'entreprise', 'Matformatique Service'],
                statut: 'EI',
                siret: '522 472 794 00042',
                credits: [
                    ['Crédits illustrations', 'Sylvain Brosset', 'https://latelierdessine.fr/'],
                    ['Développement web', 'Stéfan Lancelot', 'https://stefanlancelot.com'],
                ],
            ),
            'politique_confidentialite' => $this->politique(),
        ]);
    }

    private function champ(string $label, string $value, ?string $url = null): array
    {
        return ['type' => 'champ', 'data' => compact('label', 'value', 'url')];
    }

    private function p(string $html): array
    {
        return ['type' => 'paragraphe', 'data' => ['content' => "<p>{$html}</p>"]];
    }

    private function liste(array $items): array
    {
        return ['type' => 'liste', 'data' => ['items' => array_map(
            fn($i) => ['label' => $i[0], 'value' => $i[1]],
            $items
        )]];
    }

    private function section(string $label, string $title, string $accent, array $blocks): array
    {
        return ['label' => $label, 'title' => $title, 'title_accent' => $accent, 'blocks' => $blocks];
    }

    private function mentions(array $nom, string $statut, string $siret, array $credits): array
    {
        return [
            'intro' => "Conformément aux dispositions de l'article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'Économie Numérique (LCEN).",
            'sections' => [
                $this->section('Éditeur du site', "Identité de l'", 'entreprise', [
                    $this->champ($nom[0], $nom[1]),
                    $this->champ('Statut juridique', $statut),
                    $this->champ('Siège social', '3 rue de Livron, 64000 Pau'),
                    $this->champ('Numéro SIRET', $siret),
                    $this->champ('Directeur de la publication', 'Mathieu Pellet'),
                ]),
                $this->section('Contact', 'Nous', 'joindre', [
                    $this->champ('Téléphone', '06 14 34 17 09'),
                    $this->champ('E-mail', 'contact@matformatique.com'),
                    $this->champ('Horaires', "Se référer aux horaires mis à jour en temps réel visibles sur la page d'accueil."),
                ]),
                $this->section('Hébergement', 'Infrastructures', 'web', [
                    $this->champ('Hébergeur', 'OVH Cloud'),
                    $this->champ('Raison sociale', 'OVH SAS'),
                    $this->champ('Adresse', '2 rue Kellermann - 59100 Roubaix - France'),
                    $this->champ("Site de l'hébergeur", 'www.ovhcloud.com'),
                    ['type' => 'separateur', 'data' => []],
                    $this->champ('Nom de domaine', 'Ionos'),
                    $this->champ('Raison sociale', 'Ionos SARL'),
                    $this->champ('Adresse', '7 place de la Gare - 57200 Sarreguemines - France'),
                    $this->champ("Site de l'hébergeur", 'www.ionos.fr'),
                ]),
                $this->section("Droits d'auteur", 'Propriété', 'intellectuelle', [
                    $this->p("L'intégralité des contenus présents sur ce site (textes, arborescence, charte graphique, logos, icônes) est la propriété exclusive de <strong>Matformatique</strong>, à l'exception notable des données dynamiques provenant de tiers (avis clients, notes de satisfaction et états d'ouverture synchronisés via l'API Google Places)."),
                    ['type' => 'credits', 'data' => ['items' => array_map(
                        fn($c) => ['label' => $c[0], 'value' => $c[1], 'url' => $c[2]],
                        $credits
                    )]],
                    $this->p('Toute extraction, modification ou reproduction totale ou partielle de ces éléments sans accord écrit préalable de leurs auteurs respectifs est strictement interdite et expose le contrevenant à des poursuites.'),
                ]),
            ],
        ];
    }

    private function politique(): array
    {
        return [
            'intro' => 'Vos données sont précieuses. Cette page vous explique comment nous collectons, traitons et protégeons vos informations personnelles.',
            'sections' => [
                $this->section('Responsable', 'Gestion des', 'données', [
                    $this->p('Le responsable du traitement des données personnelles collectées sur ce site est <strong>Matformatique</strong>, représenté par Mathieu Pellet.'),
                    $this->p('Pour toute question relative à la protection de vos données, vous pouvez nous écrire à : <strong>contact@matformatique.com</strong>.'),
                ]),
                $this->section('Collecte', 'Données collectées et', 'finalités', [
                    $this->p("Nous collectons uniquement les données strictement nécessaires aux services de l'atelier, notamment via notre formulaire de contact ou lors de vos demandes de devis :"),
                    $this->liste([
                        ['Identité', 'Nom, prénom (pour savoir à qui nous nous adressons).'],
                        ['Coordonnées', 'Adresse e-mail, numéro de téléphone (pour vous recontacter concernant vos réparations).'],
                        ['Informations techniques', 'Description de la panne de votre matériel informatique.'],
                    ]),
                    $this->p('Ces données ne sont jamais utilisées à des fins commerciales non consenties, ni revendues à des tiers.'),
                ]),
                $this->section('Services tiers', 'Transmission et', 'outils tiers', [
                    $this->p('Notre site utilise des services externes pour enrichir votre expérience utilisateur :'),
                    $this->liste([
                        ['Google Places API', "Utilisé pour afficher nos horaires d'ouverture, notre note et nos avis clients en temps réel. Google peut collecter des données anonymisées de navigation (comme votre adresse IP) lors du chargement de ces éléments."],
                        ['Ionos / Hébergement Web', 'Vos e-mails de contact transitent et sont stockés de manière sécurisée sur nos serveurs de messagerie.'],
                    ]),
                ]),
                $this->section('Cookies', 'Enregistrement des', 'cookies', [
                    $this->p('Nous utilisons des cookies strictement nécessaires au fonctionnement du site :'),
                    $this->liste([
                        ['matformatique_session', 'Permet de maintenir votre session active et de sécuriser votre navigation. (Expire à la fermeture du navigateur).'],
                        ['XSRF-TOKEN', 'Utilisé pour protéger le site contre les attaques de type Cross-Site Request Forgery (CSRF). (Expire à la fermeture du navigateur).'],
                    ]),
                ]),
                $this->section('Sécurité', 'Durée de conservation et', 'protection', [
                    $this->p('Vos données de contact sont conservées en base de données pour une durée maximale de <strong>3 ans</strong> après le dernier échange ou la clôture de votre dossier de réparation, sauf obligation légale de conservation comptable (facturation).'),
                    $this->p('Les flux de notre site sont entièrement sécurisés par un protocole de chiffrement <strong>SSL (HTTPS)</strong>, garantissant que les informations transmises via nos formulaires ne peuvent pas être interceptées.'),
                ]),
                $this->section('Vos droits', 'Application du', 'RGPD', [
                    $this->p('Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d’un droit d’accès, de rectification, de portabilité et d’effacement de vos données personnelles. Vous pouvez également demander la limitation du traitement de ces données.'),
                    $this->p("Pour exercer ces droits, il vous suffit de nous envoyer un e-mail à <strong>contact@matformatique.com</strong> en indiquant l'objet de votre demande. Nous y répondrons dans les meilleurs délais."),
                ]),
            ],
        ];
    }
}
