<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Une seule ligne : une colonne JSON par page ({ intro, sections: [...] })
        Schema::create('legal_pages', function (Blueprint $table) {
            $table->id();
            $table->json('mentions_legales')->nullable();
            $table->json('mentions_legales_service')->nullable();
            $table->json('politique_confidentialite')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_pages');
    }
};
