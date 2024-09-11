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
        Schema::create('news_and_events', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable(false);
            $table->enum('type',['news','event'])->nullable(false);
            $table->text('thumbnail')->nullable();
            $table->text('description');
            $table->longText('news_and_event_body')->nullable(false);
            $table->date('published_date')->nullable(false);
            $table->date('event_start_date')->nullable();
            $table->date('event_end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_and_events');
    }
};
