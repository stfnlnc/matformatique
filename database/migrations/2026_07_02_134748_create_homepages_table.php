<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            // Hero
            $table->string('hero_title_line1')->nullable();
            $table->string('hero_title_line2')->nullable();
            $table->string('hero_title_highlight')->nullable();
            $table->text('hero_text')->nullable();

            // Coordonnées & réseaux
            $table->string('contact_phone')->nullable();          // 0614341709
            $table->string('contact_phone_display')->nullable();  // 06 14 34 17 09
            $table->string('contact_email')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('contact_zone_text')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_linkedin')->nullable();

            // Bandeau chiffres
            $table->string('stat_diagnostic_value')->nullable();
            $table->string('stat_diagnostic_label')->nullable();

            // Services
            $table->string('services_title')->nullable();
            $table->string('services_title_highlight')->nullable();
            $table->text('services_intro')->nullable();
            $table->json('services')->nullable();
            $table->text('qualirepar_text')->nullable();

            // Étapes
            $table->string('steps_title')->nullable();
            $table->string('steps_title_highlight')->nullable();
            $table->text('steps_intro')->nullable();
            $table->json('steps')->nullable();

            // Marques
            $table->json('brands')->nullable();

            // Équipe
            $table->string('team_title')->nullable();
            $table->string('team_title_highlight')->nullable();
            $table->text('team_intro')->nullable();
            $table->json('team')->nullable();

            // Contact
            $table->string('contact_title')->nullable();
            $table->string('contact_title_highlight')->nullable();
            $table->text('contact_intro')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
