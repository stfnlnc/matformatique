<?php

namespace App\Filament\Pages;

use App\Models\HomePage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageHomePage extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHome;
    protected static ?string $navigationLabel = "Page d'accueil";
    protected static ?string $title = "Page d'accueil";
    protected static ?string $slug = 'page-accueil';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(HomePage::current()->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
                Tabs::make('Sections')
                    ->persistTabInQueryString()
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Présentation')->schema([
                            Section::make('Titre')->columns(3)->schema([
                                TextInput::make('hero_title_line1')->label('Ligne 1')->required(),
                                TextInput::make('hero_title_line2')->label('Ligne 2')->required(),
                                TextInput::make('hero_title_highlight')->label('Texte mis en avant (bleu)'),
                            ]),
                            Textarea::make('hero_text')->label("Texte d'introduction")->rows(3)->required(),
                            Section::make('Chiffre « diagnostic »')->columns(2)->schema([
                                TextInput::make('stat_diagnostic_value')->label('Valeur'),
                                TextInput::make('stat_diagnostic_label')->label('Libellé'),
                            ]),
                        ]),

                        Tab::make('Services')->schema([
                            Section::make('En-tête')->columns(2)->schema([
                                TextInput::make('services_title')->label('Titre'),
                                TextInput::make('services_title_highlight')->label('Titre (partie en bleu)'),
                                Textarea::make('services_intro')->label('Introduction (tarifs…)')->rows(3)->columnSpanFull(),
                            ]),
                            Repeater::make('services')
                                ->label('Cartes de services')
                                ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                                ->collapsible()
                                ->collapsed()
                                ->schema([
                                    TextInput::make('title')->label('Titre')->required(),
                                    FileUpload::make('image')
                                        ->label('Illustration')
                                        ->image()
                                        ->disk('public_folder')
                                        ->directory('images/illustrations')
                                        ->visibility('public'),
                                    Repeater::make('items')
                                        ->label('Liste à puces')
                                        ->simple(TextInput::make('item')->required())
                                        ->addActionLabel('Ajouter une ligne')
                                        ->default([]),
                                    Textarea::make('text')->label('Texte libre (à la place de la liste)')->rows(3),
                                    TextInput::make('link_label')->label('Bouton : libellé'),
                                    TextInput::make('link_url')->label('Bouton : URL')->url(),
                                ]),
                            Textarea::make('qualirepar_text')->label('Bandeau QualiRépar')->rows(5),
                        ]),

                        Tab::make('Étapes')->schema([
                            Section::make('En-tête')->columns(2)->schema([
                                TextInput::make('steps_title')->label('Titre'),
                                TextInput::make('steps_title_highlight')->label('Titre (partie en bleu)'),
                                Textarea::make('steps_intro')->label('Introduction')->rows(2)->columnSpanFull(),
                            ]),
                            Repeater::make('steps')
                                ->label('Étapes (numérotées automatiquement)')
                                ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                                ->collapsible()
                                ->collapsed()
                                ->schema([
                                    TextInput::make('title')->label('Titre')->required(),
                                    Textarea::make('content')->label('Description')->rows(5)->required(),
                                ]),
                        ]),

                        Tab::make('Marques')->schema([
                            Repeater::make('brands')
                                ->label('Marques')
                                ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                                ->collapsible()
                                ->columns(2)
                                ->schema([
                                    TextInput::make('name')->label('Nom')->required(),
                                    FileUpload::make('logo')
                                        ->label('Logo')
                                        ->image()
                                        ->disk('public_folder')
                                        ->directory('images/logos')
                                        ->visibility('public')
                                        ->required(),
                                ]),
                        ]),

                        Tab::make('Équipe')->schema([
                            Section::make('En-tête')->columns(2)->schema([
                                TextInput::make('team_title')->label('Titre'),
                                TextInput::make('team_title_highlight')->label('Titre (partie en bleu)'),
                                Textarea::make('team_intro')->label('Introduction')->rows(3)->columnSpanFull(),
                            ]),
                            Repeater::make('team')
                                ->label('Membres')
                                ->itemLabel(fn(array $state): ?string => $state['name'] ?? null)
                                ->collapsible()
                                ->collapsed()
                                ->columns(3)
                                ->schema([
                                    TextInput::make('initials')->label('Initiales')->maxLength(3)->required(),
                                    TextInput::make('name')->label('Nom')->required(),
                                    TextInput::make('role')->label('Poste')->required(),
                                    Textarea::make('bio')->label('Présentation')->rows(5)->columnSpanFull(),
                                ]),
                        ]),
                    ]),
            ]);
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
        HomePage::current()->update($this->form->getState());

        Notification::make()
            ->title("Page d'accueil enregistrée")
            ->success()
            ->send();
    }
}
