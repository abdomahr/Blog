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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
	        $table->unsignedBigInteger('sort')->default(0);
            $table->uuid('uuid')->nullable()->unique();
            $table->json('slug')->nullable();
            $table->json('title')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('body')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('featured')->default(false);
            $table->nullableMorphs('morphable');
            $table->string('category_id')->nullable();
            $table->string('admin_id')->nullable();
            // $table->foreignId(column: 'category_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('admin_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamp('published_at');
            $table->unsignedBigInteger('visits_count')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
