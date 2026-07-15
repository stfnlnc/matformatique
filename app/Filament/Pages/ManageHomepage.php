<?php

namespace App\Filament\Pages;

use App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks\HeroBlock;
use App\Models\Homepage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

/**
 * @property-read Schema $form
 */
class ManageHomepage extends Page
{
    protected string $view = 'filament.pages.manage-homepage';

    protected static ?string $modelLabel = 'accueil';

    protected static ?string $title = "Page d'accueil";

    protected static ?string $navigationLabel = 'Accueil';

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-tv';

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Section::make('Section Hero')
                        ->description('Gérez les éléments principaux de la page d\'accueil.')
                        ->icon('heroicon-o-home')
                        ->collapsible()
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    Grid::make(1)
                                        ->columnSpan(1)
                                        ->schema([
                                            TextInput::make('hero_title')
                                                ->label('Titre principal')
                                                ->placeholder('Ex: Bienvenue sur notre site')
                                                ->required(),

                                            Textarea::make('hero_paragraph')
                                                ->label('Paragraphe de description')
                                                ->placeholder('Écrivez une courte description...')
                                                ->rows(4),
                                        ]),
                                    FileUpload::make('hero_image')
                                        ->label('Image de fond / Illustration')
                                        ->disk('public')
                                        ->directory('illustrations')
                                        ->image()
                                        ->imageEditor()
                                        ->columnSpan(1),
                                ]),
                        ]),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('Sauvegarder')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $record = $this->getRecord();

        if (! $record) {
            $record = new Homepage();
            $record->is_homepage = true;
        }

        $record->fill($data);
        $record->save();

        if ($record->wasRecentlyCreated) {
            $this->form->record($record)->saveRelationships();
        }

        Notification::make()
            ->success()
            ->title('Sauvegardé')
            ->send();
    }

    public function getRecord(): ?Homepage
    {
        return Homepage::query()
            ->where('is_homepage', true)
            ->first();
    }
}
