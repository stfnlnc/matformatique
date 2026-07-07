<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['is_homepage', 'hero_title', 'hero_paragraph'])]
class Homepage extends Model
{
    //
}
