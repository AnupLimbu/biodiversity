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
        Schema::table('teams', function (Blueprint $table) {
            $table->string('linkedin_link')->nullable();
            $table->string('research_gate_link')->nullable();
            $table->string('google_scholar_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('linkedin_link');
            $table->dropColumn('research_gate_link');
            $table->dropColumn('google_scholar_link');
        });
    }
};
