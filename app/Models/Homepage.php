<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['is_homepage', 'hero_title', 'hero_paragraph', 'hero_image'])]
class Homepage extends Model
{
    protected static function booted()
    {
        static::updating(function ($homepage) {
            if ($homepage->isDirty('hero_image')) {
                $oldImage = $homepage->getOriginal('hero_image');

                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleted(function ($homepage) {
            if ($homepage->hero_image) {
                Storage::disk('public')->delete($homepage->hero_image);
            }
        });
    }
}
