<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('supremos', function (Blueprint $table) {
            $table->text('file_matcleaner')->nullable()->after('file_macos_instructions');
            $table->string('file_matcleaner_ver')->nullable()->after('file_macos_instructions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('supremos', function (Blueprint $table) {
            $table->dropColumn('file_matcleaner');
            $table->dropColumn('file_matcleaner_ver');
        });
    }
};
