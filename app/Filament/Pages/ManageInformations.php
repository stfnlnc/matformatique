<?php

namespace App\Filament\Pages;

use App\Models\Information;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageInformations extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInformationCircle;
    protected static ?string $navigationLabel = 'Informations';
    protected static ?string $title = 'Informations générales';
    protected static ?string $slug = 'informations';
    protected static ?int $navigationSort = 90;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Information::current()->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
                Section::make('Entreprise')->schema([
                    TextInput::make('company_name')->label("Nom de l'entreprise")->required(),
                ]),

                Section::make('Coordonnées')->columns(2)->schema([
                    TextInput::make('phone')
                        ->label('Téléphone (lien tel:, sans espaces)')
                        ->tel()
                        ->required(),
                    TextInput::make('phone_display')
                        ->label('Téléphone (affichage)')
                        ->required(),
                    TextInput::make('email')->label('Email')->email()->required(),
                    TextInput::make('maps_url')
                        ->label('Lien Google Maps (laisser vide = valeur par défaut)')
                        ->url(),
                    Textarea::make('address')->label('Adresse')->rows(3),
                    Textarea::make('zone_text')->label("Zone d'intervention")->rows(3),
                ]),

                Section::make('Réseaux sociaux')->columns(3)->schema([
                    TextInput::make('facebook_url')->label('Facebook')->url(),
                    TextInput::make('instagram_url')->label('Instagram')->url(),
                    TextInput::make('linkedin_url')->label('LinkedIn')->url(),
                ]),

                Section::make('Horaires')
                    ->description('Affichés dans le pied de page. Une ligne par créneau.')
                    ->columns(2)
                    ->schema([
                        Textarea::make('atelier_hours')->label('Atelier')->rows(3),
                        Textarea::make('onsite_hours')->label('À domicile ou entreprise')->rows(3),
                    ]),

                Section::make('Référencement (SEO)')->columns(2)->schema([
                    TextInput::make('meta_title')
                        ->label('Titre partagé (Open Graph / Twitter)')
                        ->maxLength(70),
                    FileUpload::make('og_image')
                        ->label('Image de partage')
                        ->image()
                        ->disk('public_folder')
                        ->directory('images/illustrations')
                        ->visibility('public'),
                    Textarea::make('meta_description')
                        ->label('Description')
                        ->helperText('160 caractères maximum recommandés.')
                        ->maxLength(255)
                        ->rows(3)
                        ->columnSpanFull(),
                ]),

                Section::make('Documents')->schema([
                    FileUpload::make('cgv_path')
                        ->label('Conditions générales de vente (PDF)')
                        ->acceptedFileTypes(['application/pdf'])
                        ->disk('public_folder')
                        ->directory('documents')
                        ->visibility('public'),
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
        Information::current()->update($this->form->getState());

        Notification::make()
            ->title('Informations enregistrées')
            ->success()
            ->send();
    }
}
