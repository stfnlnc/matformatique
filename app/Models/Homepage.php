<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'services' => 'array',
            'steps' => 'array',
            'brands' => 'array',
            'team' => 'array',
        ];
    }

    public static function current(): static
    {
        return static::query()->first() ?? static::create(static::defaults());
    }

    public static function defaults(): array
    {
        return [
            'hero_title_line1' => 'Bienvenue chez M@tformatique,',
            'hero_title_line2' => 'à votre service',
            'hero_title_highlight' => 'depuis 2010',
            'hero_text' => "Notre but ? Vous rendre l'informatique plus facile par le biais de conseils, de dépannages, de ventes et d'accompagnement dans vos projets.",

            'stat_diagnostic_value' => '~48h',
            'stat_diagnostic_label' => 'pour un diagnostic',

            'services_title' => 'Découvrez tous',
            'services_title_highlight' => 'nos services',
            'services_intro' => "Nos prises en charge ainsi que nos devis sont gratuits. En cas de résolution lors de l’élaboration de ce dernier, un forfait de 63€ (91€ pour le matériel Apple) peut être facturé.",
            'services' => [
                [
                    'title' => 'Pour les professionnels',
                    'image' => 'images/illustrations/logo-bot-full.png',
                    'items' => ['Assistance informatique', 'Contrat de maintenance', 'Vente et installation de matériel', 'Audit informatique', 'Mise en place de sauvegarde', 'Déplacement sur site'],
                    'text' => null,
                    'link_label' => null,
                    'link_url' => null,
                ],
                [
                    'title' => 'Pour les particuliers',
                    'image' => 'images/illustrations/bot-6.png',
                    'items' => ['Assistance informatique', 'Dépannage informatique', 'Accompagnement personnalisé à domicile', 'Mise en place de sauvegarde', 'Vente et installation de matériel'],
                    'text' => null,
                    'link_label' => null,
                    'link_url' => null,
                ],
                [
                    'title' => 'Notre atelier',
                    'image' => 'images/illustrations/bot-7-rev.png',
                    'items' => ['Vente et configuration de matériel', 'Dépannage informatique', 'Numérisation de données (photos, diapos, vidéos, ...)', "Service d'impression et de photocopie"],
                    'text' => null,
                    'link_label' => null,
                    'link_url' => null,
                ],
                [
                    'title' => 'Service à la personne',
                    'image' => 'images/logos/salp.png',
                    'items' => [],
                    'text' => 'Possibilité de prestation à domicile sous couvert du service à la personne par notre seconde structure Matformatique Service',
                    'link_label' => 'En savoir plus',
                    'link_url' => route('services.home'),
                ],
            ],
            'qualirepar_text' => "En tant que professionnel labellisé QualiRépar, nous vous permettons de bénéficier du Bonus Réparation sur certaines réparations de vos équipements électroniques et informatiques éligibles. Ce label, soutenu par l'État, garantit des réparations réalisées par un professionnel qualifié tout en vous aidant à réduire le coût de la réparation et à prolonger la durée de vie de vos appareils.",

            'steps_title' => 'Comment',
            'steps_title_highlight' => 'ça marche ?',
            'steps_intro' => 'Notre guide étape par étape pour la réparation de votre matériel informatique.',
            'steps' => [
                ['title' => 'Prise de contact', 'content' => "Nous vous accueillons en atelier ou prenons en charge votre demande par téléphone et formulaire en ligne. Lors de cette première étape, nous écoutons attentivement vos besoins et les symptômes de votre machine (lenteurs, panne matérielle, virus, écran cassé...). Nous enregistrons votre matériel en toute sécurité et créons votre dossier client personnalisé."],
                ['title' => 'Diagnostic', 'content' => "Nos techniciens qualifiés procèdent à une série de tests approfondis sur votre équipement. Nous analysons les composants matériels (disque dur, mémoire RAM, carte mère...) et l'état du système d'exploitation afin d'identifier précisément l'origine de la panne ou des dysfonctionnements. Ce check-up complet nous permet de vous proposer la solution de réparation ou d'optimisation la plus adaptée et la plus durable pour votre ordinateur."],
                ['title' => 'Devis', 'content' => "À la suite du diagnostic, nous vous transmettons un devis clair, détaillé et transparent, comprenant le coût de la main-d'œuvre et des éventuelles pièces de rechange. Aucun frais supplémentaire n'est engagé sans votre accord. Nous vous expliquons les différentes options possibles pour que vous puissiez prendre votre décision en toute sérénité."],
                ['title' => 'Réparation', 'content' => "Une fois le devis validé, nos techniciens interviennent sur votre matériel dans les plus brefs délais. Qu'il s'agisse d'un remplacement de composant, d'une suppression de logiciels malveillants, d'une réinstallation de système ou d'une récupération de données, nous travaillons avec soin et minutie. Avant de clore l'intervention, nous effectuons une batterie de tests de contrôle pour nous assurer du parfait fonctionnement de votre appareil."],
                ['title' => 'Remise du matériel', 'content' => "Votre ordinateur est prêt ! Nous vous contactons pour convenir de sa restitution. Lors de la remise, nous prenons le temps de vous montrer le résultat, de vous expliquer les réparations effectuées et de vous donner des conseils personnalisés pour prolonger la durée de vie de votre machine. Vous repartez avec un matériel fonctionnel, garanti et prêt à l'emploi."],
            ],

            'brands' => [
                ['name' => 'Eset', 'logo' => 'images/logos/eset_logo.png'],
                ['name' => 'Synology', 'logo' => 'images/logos/synology_logo.png'],
                ['name' => 'Asus', 'logo' => 'images/logos/asus_logo.png'],
                ['name' => 'Msi', 'logo' => 'images/logos/msi_logo.png'],
                ['name' => 'Lenovo', 'logo' => 'images/logos/lenovo_logo.png'],
                ['name' => 'Canon', 'logo' => 'images/logos/canon_logo.png'],
                ['name' => 'HP', 'logo' => 'images/logos/hp_logo.png'],
            ],

            'team_title' => 'Venez à la rencontre de',
            'team_title_highlight' => 'notre équipe',
            'team_intro' => 'Derrière chaque réparation, il y a une personne à l’écoute et passionnée. Nous traitons votre matériel avec la plus grande attention, en privilégiant la confiance et le contact humain.',
            'team' => [
                ['initials' => 'MP', 'name' => 'Mathieu Pellet', 'role' => 'Gérant & Technicien informatique', 'bio' => "Passionné d'informatique, j'ai une double mission : accompagner les particuliers au quotidien et structurer les infrastructures des professionnels. Qu'il s'agisse de dépanner votre ordinateur personnel ou de concevoir un réseau d'entreprise complet avec configuration de serveurs NAS sécurisés, je mets la même rigueur à vous garantir des solutions fiables, performantes et adaptées à vos besoins."],
                ['initials' => 'JF', 'name' => 'Joel Ferreira', 'role' => 'Technicien informatique', 'bio' => "Spécialiste de l'écosystème Apple et de la restauration système, j'interviens sur les pannes logicielles et matérielles les plus complexes. Qu'il s'agisse de redonner vie à votre Mac, de prendre en charge vos réparations ou de récupérer vos données perdues sur des supports endommagés, je mets mon expertise au service de vos équipements et de vos fichiers précieux."],
                ['initials' => 'SL', 'name' => 'Stéfan Lancelot', 'role' => 'Technicien informatique', 'bio' => "Spécialisé dans les services web et la gestion de messageries, j'assure la configuration de vos espaces mails et de vos hébergements au quotidien. Je prends également en charge l'installation, la maintenance et la sécurisation de vos environnements Linux, qu'il s'agisse de postes de travail ou de serveurs. Mon objectif est de vous garantir des solutions stables, libres et parfaitement adaptées à vos besoins."],
            ],

            'contact_title' => 'Besoin',
            'contact_title_highlight' => "d'aide ?",
            'contact_intro' => "Que ce soit pour une réparation urgente ou juste un conseil, on est là.\nAppelez-nous, passez à l'atelier, ou envoyez-nous un message. On s'occupe du reste.",
        ];
    }
}
