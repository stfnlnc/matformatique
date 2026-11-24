@props(['page', 'info'])

@php
    $tabs = [
        [
            'id' => 'reparation-apple',
            'label' => 'Apple',
            'title' => $page->apple_title ?? 'Votre matériel Apple',
            'highlight' => $page->apple_title_highlight ?? 'entre de bonnes mains',
            'text' =>
                $page->apple_text ??
                'MacBook Air, Pro, Neo ou iMac : nous diagnostiquons la panne et établissons un devis gratuitement.',
            'items' => [
                "Écran, batterie, remplacement d'un composant (hors micro-soudure)",
                'Récupération et sauvegarde de vos données',
                'Devis annoncé avant toute intervention',
            ],
            'image' => 'images/photos/apple.jpg',
            'alt' => "Réparation d'appareils Apple",
            'cta' => 'Demander un devis',
        ],
        [
            'id' => 'reparation-windows',
            'label' => 'Windows',
            'title' => $page->windows_title ?? 'Votre PC Windows',
            'highlight' => $page->windows_title_highlight ?? 'de nouveau rapide et fiable',
            'text' =>
                $page->windows_text ??
                'Ordinateur lent, qui ne démarre plus ou infecté : nous trouvons la cause et vous annonçons le prix avant d’intervenir.',
            'items' => [
                'Diagnostic, nettoyage des virus et des lenteurs',
                'Remplacement écran, clavier, batterie, SSD ou barrette de mémoire',
                'Réinstallation de Windows avec conservation de vos données',
            ],
            'image' => 'images/photos/windows.jpg',
            'alt' => 'Réparation de PC Windows',
            'cta' => 'Demander un devis',
        ],
        [
            'id' => 'installation-linux',
            'label' => 'Linux',
            'title' => $page->linux_title ?? 'Une seconde vie',
            'highlight' => $page->linux_title_highlight ?? 'pour votre ordinateur avec Linux',
            'text' =>
                $page->linux_text ??
                'Un système libre, rapide et sans abonnement, qui redonne un coup de jeune à un ordinateur ancien.',
            'items' => [
                'Installation de Linux, seul ou en double démarrage avec Windows',
                'Transfert de vos fichiers et de vos réglages',
                'Prise en main et conseils pour bien démarrer',
            ],
            'image' => 'images/photos/linux.jpg',
            'alt' => 'Installation de Linux',
            'cta' => 'Nous contacter',
        ],
    ];
@endphp

<div id="reparations" class="bg-neutral-50 py-30 w-full">
    <div class="relative flex flex-col gap-5 mx-auto px-4 w-full container">

        <div role="tablist" aria-label="Types de réparation et d'installation"
            class="flex flex-row gap-2 p-1 overflow-x-auto bg-neutral-200 w-fit rounded-lg">
            @foreach ($tabs as $tab)
                <button type="button" role="tab" id="tab-{{ $tab['id'] }}" aria-controls="{{ $tab['id'] }}"
                    aria-selected="{{ $loop->first ? 'true' : 'false' }}" tabindex="{{ $loop->first ? '0' : '-1' }}"
                    class="bg-card dark:ring-1 dark:ring-white/10 hover:bg-mat-light-blue px-4 py-2 rounded-lg text-ink text-sm whitespace-nowrap transition-colors duration-300 cursor-pointer
                           hover:bg-ink/10
                           aria-selected:bg-mat-dark-blue aria-selected:text-white
                           dark:aria-selected:bg-mat-light-blue dark:aria-selected:text-mat-dark-blue">
                    {{ $tab['label'] }}
                </button>
            @endforeach
        </div>

        @foreach ($tabs as $tab)
            <div role="tabpanel" id="{{ $tab['id'] }}" aria-labelledby="tab-{{ $tab['id'] }}"
                @if (!$loop->first) hidden @endif
                class="relative flex flex-col items-center lg:flex-row gap-4 rounded-lg w-full min-h-125 lg:min-h-0 lg:aspect-video overflow-hidden">

                <img loading="lazy" class="lg:absolute inset-0 rounded-lg w-full h-full object-center object-cover"
                    src="{{ asset($tab['image']) }}" alt="{{ $tab['alt'] }}">

                <div class="top-0 -left-1 absolute lg:bg-white/80 w-full lg:w-2/5 h-full pointer-events-none"></div>

                <div class="relative z-10 flex flex-col items-start gap-5 p-2 md:p-4 lg:p-8 xl:p-16 w-full lg:w-2/5">
                    <h2 class="max-w-3xl text-ink text-xl md:text-4xl xl:text-5xl">
                        {{ $tab['title'] }} <span class="text-accent">{{ $tab['highlight'] }}</span>
                    </h2>
                    <p class="max-w-prose text-ink text-sm">{{ $tab['text'] }}</p>
                    <p class="text-ink text-sm">
                        @foreach ($tab['items'] as $item)
                            • {{ $item }} @if (!$loop->last)
                                <br>
                            @endif
                        @endforeach
                    </p>

                    <div class="flex flex-row gap-1">
                        <x-button-dark href="#contact-form">{{ $tab['cta'] }}</x-button-dark>
                        <x-button-light href="tel:{{ $info->phone }}">{{ $info->phone_display }}</x-button-light>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@once
    <script>
        (() => {
            const root = document.getElementById('reparations');
            const tabs = [...root.querySelectorAll('[role="tab"]')];
            const panels = tabs.map((t) => document.getElementById(t.getAttribute('aria-controls')));

            const select = (index, focus = false) => {
                tabs.forEach((tab, i) => {
                    const on = i === index;
                    tab.setAttribute('aria-selected', on);
                    tab.tabIndex = on ? 0 : -1;
                    panels[i].hidden = !on;
                });
                if (focus) tabs[index].focus();
            };

            tabs.forEach((tab, i) => {
                tab.addEventListener('click', () => select(i));

                // Navigation au clavier : flèches, Début, Fin
                tab.addEventListener('keydown', (e) => {
                    const last = tabs.length - 1;
                    const next = {
                        ArrowRight: i === last ? 0 : i + 1,
                        ArrowLeft: i === 0 ? last : i - 1,
                        Home: 0,
                        End: last
                    } [e.key];
                    if (next === undefined) return;
                    e.preventDefault();
                    select(next, true);
                });
            });

            const fromHash = () => {
                const i = panels.findIndex((p) => '#' + p.id === location.hash);
                if (i === -1) return;
                select(i);
                root.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            };
            fromHash();
            window.addEventListener('hashchange', fromHash);
        })
        ();
    </script>
@endonce
