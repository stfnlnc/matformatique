<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['file_windows', 'file_macos', 'file_macos_instructions', 'file_matcleaner', 'file_matcleaner_ver'])]
class Supremo extends Model
{

    protected const FILE_FIELDS = [
        'file_windows',
        'file_macos',
        'file_macos_instructions',
        'file_matcleaner',
    ];

    protected static function booted(): void
    {
        static::updated(function (Supremo $software) {
            foreach (self::FILE_FIELDS as $field) {
                if (! $software->wasChanged($field)) {
                    continue;
                }

                $oldFile = $software->getOriginal($field);

                if (filled($oldFile) && $oldFile !== $software->{$field}) {
                    Storage::disk('public_folder')->delete($oldFile);
                }
            }
        });

        static::deleted(function (Supremo $software) {
            foreach (self::FILE_FIELDS as $field) {
                if (filled($software->{$field})) {
                    Storage::disk('public_folder')->delete($software->{$field});
                }
            }
        });
    }
}
