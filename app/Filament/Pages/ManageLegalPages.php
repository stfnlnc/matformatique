<?php

namespace App\Filament\Pages;

use App\Models\LegalPage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageLegalPages extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedScale;

    protected static ?string $navigationLabel = 'Pages légales';

    protected static ?string $title = 'Pages légales';

    protected static ?string $slug = 'pages-legales';

    /** @var array<string, mixed> */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(LegalPage::current()->only(LegalPage::KEYS));
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('pages')
                    ->persistTabInQueryString()
                    ->columnSpanFull()
                    ->tabs([
                        $this->pageTab('mentions_legales', 'Mentions légales'),
                        $this->pageTab('mentions_legales_service', 'Mentions légales (Service)'),
                        $this->pageTab('politique_confidentialite', 'Politique de confidentialité'),
                    ]),
            ])
            ->statePath('data');
    }

    public function content(Schema $schema): Schema
    {
        return $schema->components([
            Form::make([EmbeddedSchema::make('form')])
                ->id('form')
                ->livewireSubmitHandler('save')
                ->footer([
                    Actions::make($this->getFormActions())->sticky(),
                ]),
        ]);
    }

    /** @return array<Action> */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Enregistrer')
                ->submit('save')
                ->keyBindings(['mod+s']),
        ];
    }

    public function save(): void
    {
        $state = $this->form->getState();

        $payload = [];
        foreach (LegalPage::KEYS as $key) {
            $payload[$key] = $this->normalize($state[$key] ?? []);
        }

        LegalPage::current()->update($payload);

        Notification::make()
            ->title('Pages légales enregistrées')
            ->success()
            ->send();
    }

    /** Un onglet = une page : intro + repeater de sections réordonnables. */
    protected function pageTab(string $key, string $label): Tab
    {
        return Tab::make($label)->schema([
            Textarea::make("{$key}.intro")
                ->label("Texte d'introduction")
                ->rows(3),

            Repeater::make("{$key}.sections")
                ->label('Sections')
                ->schema([
                    Grid::make(['default' => 1, 'md' => 3])->schema([
                        TextInput::make('label')
                            ->label('Rubrique (colonne de gauche)')
                            ->placeholder('Éditeur du site')
                            ->required(),
                        TextInput::make('title')
                            ->label('Titre')
                            ->placeholder("Identité de l'")
                            ->required(),
                        TextInput::make('title_accent')
                            ->label('Fin du titre (en couleur)')
                            ->placeholder('entreprise'),
                    ]),

                    Builder::make('blocks')
                        ->label('Contenu')
                        ->addActionLabel('Ajouter un bloc')
                        ->blocks($this->blocks())
                        ->blockNumbers(false)
                        ->collapsible()
                        ->reorderableWithButtons()
                        ->cloneable(),
                ])
                ->itemLabel(fn(array $state): string => $state['label'] ?? 'Nouvelle section')
                ->addActionLabel('Ajouter une section')
                ->collapsible()
                ->collapsed()
                ->reorderable()
                ->reorderableWithButtons()
                ->cloneable(),
        ]);
    }

    /** @return array<Block> */
    protected function blocks(): array
    {
        return [
            Block::make('champ')
                ->label(fn(?array $state): string => filled($state['label'] ?? null)
                    ? "{$state['label']} : " . ($state['value'] ?? '')
                    : 'Champ (libellé : valeur)')
                ->schema([
                    Grid::make(['default' => 1, 'md' => 3])->schema([
                        TextInput::make('label')->label('Libellé')->required(),
                        TextInput::make('value')->label('Valeur')->required(),
                        TextInput::make('url')->label('Lien (optionnel)')->url(),
                    ]),
                ]),

            Block::make('paragraphe')
                ->label('Paragraphe')
                ->schema([
                    RichEditor::make('content')
                        ->label('Texte')
                        ->toolbarButtons(['bold', 'italic', 'link', 'bulletList', 'undo', 'redo'])
                        ->required(),
                ]),

            Block::make('liste')
                ->label('Liste à puces (libellé + texte)')
                ->schema([
                    Repeater::make('items')
                        ->label('Éléments')
                        ->schema([
                            TextInput::make('label')->label('Libellé')->required(),
                            Textarea::make('value')->label('Texte')->rows(2)->required(),
                        ])
                        ->itemLabel(fn(array $state): ?string => $state['label'] ?? null)
                        ->reorderableWithButtons()
                        ->collapsible()
                        ->defaultItems(1),
                ]),

            Block::make('credits')
                ->label('Crédits (encadré avec liens)')
                ->schema([
                    Repeater::make('items')
                        ->label('Crédits')
                        ->schema([
                            Grid::make(['default' => 1, 'md' => 3])->schema([
                                TextInput::make('label')->label('Rôle')->placeholder('Crédits illustrations')->required(),
                                TextInput::make('value')->label('Nom')->required(),
                                TextInput::make('url')->label('Lien')->url(),
                            ]),
                        ])
                        ->itemLabel(fn(array $state): ?string => isset($state['label'])
                            ? "{$state['label']} : " . ($state['value'] ?? '')
                            : null)
                        ->reorderableWithButtons()
                        ->defaultItems(1),
                ]),

            Block::make('separateur')
                ->label('Séparateur')
                ->schema([]),
        ];
    }

    /**
     * Les clés des repeaters sont des UUID : on les remplace par des index
     * pour que l'ordre soit conservé en base (MySQL réordonne les clés JSON).
     */
    protected function normalize(array $page): array
    {
        $page['sections'] = collect($page['sections'] ?? [])
            ->values()
            ->map(function (array $section): array {
                $section['blocks'] = collect($section['blocks'] ?? [])
                    ->values()
                    ->map(function (array $block): array {
                        if (isset($block['data']['items'])) {
                            $block['data']['items'] = array_values($block['data']['items']);
                        }

                        return $block;
                    })
                    ->all();

                return $section;
            })
            ->all();

        return $page;
    }
}
