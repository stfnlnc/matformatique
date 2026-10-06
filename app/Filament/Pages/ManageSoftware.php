<?php

namespace App\Filament\Pages;

use App\Models\Supremo;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
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
        $this->form->fill($this->getRecord()?->attributesToArray() ?? []);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    FileUpload::make('file_windows')
                        ->label('Windows')
                        ->disk('public_folder')
                        ->visibility('public')
                        ->hint('Télécharger le fichier .exe')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->preserveFilenames(),
                    FileUpload::make('file_macos')
                        ->label('macOS')
                        ->disk('public_folder')
                        ->visibility('public')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->hint('Télécharger le fichier .dmg')
                        ->preserveFilenames(),
                    TextInput::make('file_macos_instructions')
                        ->label('Instructions Supremo macOS')
                        ->placeholder('Lien des instructions')
                        ->maxLength(150),
                    FileUpload::make('file_matcleaner')
                        ->label('MatCleaner')
                        ->disk('public_folder')
                        ->visibility('public')
                        ->hintIcon('heroicon-o-paper-clip')
                        ->hint('Télécharger MatCleaner')
                        ->preserveFilenames(),
                    TextInput::make('file_matcleaner_ver')
                        ->label('Version MatCleaner')
                        ->placeholder('1.0.0')
                        ->maxLength(50),
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

        $record = $this->getRecord() ?? new Supremo();
        $record->fill($data);
        $record->save();

        Notification::make()
            ->success()
            ->title('Sauvegardé')
            ->send();
    }

    public function getRecord(): ?Supremo
    {
        return Supremo::query()->first();
    }
}
