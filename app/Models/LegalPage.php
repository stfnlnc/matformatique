<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalPage extends Model
{
    /** Clés des 3 pages = noms des colonnes JSON. */
    public const KEYS = [
        'mentions_legales',
        'mentions_legales_service',
        'politique_confidentialite',
    ];

    protected $fillable = self::KEYS;

    protected function casts(): array
    {
        return array_fill_keys(self::KEYS, 'array');
    }

    /** Enregistrement unique (créé à la volée s'il n'existe pas). */
    public static function current(): static
    {
        return static::query()->first() ?? static::create([]);
    }
}
