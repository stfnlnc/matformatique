<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();

            $table->string('company_name')->nullable();

            // Coordonnées
            $table->string('phone')->nullable();
            $table->string('phone_display')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('maps_url')->nullable();
            $table->text('zone_text')->nullable();

            // Réseaux sociaux
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
