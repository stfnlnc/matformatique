<?php

namespace App\Filament\Pages;

use App\Models\Supremo;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

class ManageSoftware extends Page
{
    protected string $view = 'filament.pages.manage-software';
    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    protected static ?string $modelLabel = 'logiciel';

    protected static ?string $title = "Logiciels";

    protected static ?string $navigationLabel = 'Logiciels';


    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-clip';

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    FileUpload::make('file_windows')
                        ->label('Windows')
                        ->disk('public_folder')
                        ->hint('Télécharger le fichier .exe')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->preserveFilenames(),
                    FileUpload::make('file_macos')
                        ->label('macOS')
                        ->disk('public_folder')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->hint('Télécharger le fichier .dmg')
                        ->preserveFilenames(),
                    FileUpload::make('file_macos_instructions')
                        ->label('Instructions macOS')
                        ->disk('public_folder')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->hint('Télécharger le fichier d\'instructions')
                        ->preserveFilenames(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('sauvegarder')
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
            $record = new Supremo();
            $record->file_windows = true;
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

    public function getRecord(): ?Supremo
    {
        return Supremo::query()
            ->where('file_windows', true)
            ->first();
    }
}
