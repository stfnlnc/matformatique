<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $columns = [
        'contact_phone',
        'contact_phone_display',
        'contact_email',
        'contact_address',
        'contact_zone_text',
        'social_facebook',
        'social_instagram',
        'social_linkedin',
    ];

    public function up(): void
    {
        $old = DB::table('home_pages')->first();

        if ($old && ! DB::table('informations')->exists()) {
            DB::table('informations')->insert([
                'phone' => $old->contact_phone,
                'phone_display' => $old->contact_phone_display,
                'email' => $old->contact_email,
                'address' => $old->contact_address,
                'zone_text' => $old->contact_zone_text,
                'facebook_url' => $old->social_facebook,
                'instagram_url' => $old->social_instagram,
                'linkedin_url' => $old->social_linkedin,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Schema::table('home_pages', function (Blueprint $table) {
            $table->dropColumn($this->columns);
        });
    }

    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            foreach ($this->columns as $column) {
                $table->text($column)->nullable();
            }
        });
    }
};
