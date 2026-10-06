<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';

    protected $guarded = [];

    private static ?self $instance = null;

    protected static function booted(): void
    {
        static::saved(fn() => self::$instance = null);
    }

    public static function current(): static
    {
        return self::$instance ??= static::query()->first()
            ?? static::create(static::defaults());
    }

    protected function phoneDotted(): Attribute
    {
        return Attribute::get(fn() => str_replace(' ', '.', (string) $this->phone_display));
    }

    protected function addressInline(): Attribute
    {
        return Attribute::get(fn() => preg_replace('/\s*\R\s*/', ' ', trim((string) $this->address)));
    }

    public static function defaults(): array
    {
        return [
            'company_name' => 'Matformatique',
            'meta_title' => 'Matformatique | Assistance & Réparation Informatique',
            'meta_description' => 'Matformatique : Assistance informatique à domicile et en entreprise. Réparation Mac (Apple) et PC (Windows), réseaux, serveurs NAS.',
            'og_image' => 'images/illustrations/bot-2.png',
            'atelier_hours' => "Du lundi au vendredi - de 8h30 à 18h00\nLe samedi - de 10h à 12h30",
            'onsite_hours' => "Du lundi au vendredi\nUniquement sur rendez-vous",
            'cgv_path' => 'Conditions_Generales_MatFormatique_SARL.pdf',
            'phone' => '0614341709',
            'phone_display' => '06 14 34 17 09',
            'email' => 'contact@matformatique.com',
            'address' => "3 rue de Livron,\n64000 Pau",
            'maps_url' => null,
            'zone_text' => "Notre zone primaire d'intervention est de 20 Kms autour de l'atelier et de 50 Kms pour la secondaire.",
            'facebook_url' => 'https://www.facebook.com/Matformatique',
            'instagram_url' => 'https://www.instagram.com/matformatique/',
            'linkedin_url' => 'https://www.linkedin.com/company/matformatique',
        ];
    }
}
