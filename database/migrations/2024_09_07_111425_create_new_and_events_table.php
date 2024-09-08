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
            $table->unique('title');
            $table->text('description')->nullable();
            $table->enum('type',['news','event'])->nullable(false);
            $table->string('banner_img',255)->nullable(false);
            $table->string('original_file_name',255)->nullable(false);
            $table->string('file',255)->nullable(false);
            $table->string('file_size',255)->nullable(false);
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
