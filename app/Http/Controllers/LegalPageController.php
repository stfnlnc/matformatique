<?php

namespace App\Http\Controllers;

use App\Models\LegalPage;

class LegalPageController extends Controller
{
    private const PAGES = [
        'mentions_legales' => [
            'id' => 'mentions-legales',
            'title' => 'Mentions légales',
            'h1' => ['Mentions', 'légales'],
        ],
        'mentions_legales_service' => [
            'id' => 'mentions-legales-service',
            'title' => 'Mentions légales',
            'h1' => ['Mentions', 'légales'],
        ],
        'politique_confidentialite' => [
            'id' => 'politique-confidentialite',
            'title' => 'Politique de confidentialité',
            'h1' => ['Politique de', 'confidentialité'],
        ],
    ];

    public function __invoke(string $key)
    {
        abort_unless(isset(self::PAGES[$key]), 404);

        $data = LegalPage::current()->{$key} ?? [];

        return view('main.legal', [
            'meta' => self::PAGES[$key],
            'intro' => $data['intro'] ?? null,
            'sections' => $data['sections'] ?? [],
        ]);
    }
}
