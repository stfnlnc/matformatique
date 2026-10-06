<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('og_image')->nullable();
            $table->text('atelier_hours')->nullable();
            $table->text('onsite_hours')->nullable();
            $table->string('cgv_path')->nullable();
        });

        // Remplit la ligne existante avec les valeurs actuellement en dur dans le layout
        DB::table('informations')->update([
            'company_name' => 'Matformatique',
            'meta_title' => 'Matformatique | Assistance & Réparation Informatique',
            'meta_description' => 'Matformatique : Assistance informatique à domicile et en entreprise. Réparation Mac (Apple) et PC (Windows), réseaux, serveurs NAS.',
            'og_image' => 'images/illustrations/bot-2.png',
            'atelier_hours' => "Du lundi au vendredi - de 8h30 à 18h00\nLe samedi - de 10h à 12h30",
            'onsite_hours' => "Du lundi au vendredi\nUniquement sur rendez-vous",
            'cgv_path' => 'Conditions_Generales_MatFormatique_SARL.pdf',
        ]);
    }

    public function down(): void
    {
        Schema::table('informations', function (Blueprint $table) {
            $table->dropColumn([
                'meta_title',
                'meta_description',
                'og_image',
                'atelier_hours',
                'onsite_hours',
                'cgv_path',
            ]);
        });
    }
};
