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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('content');
            $table->timestamp('created_at');
            $table->index('title', 'idx_title');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name_tags', 100)->unique();
            $table->index('name_tags', 'idx_name_tags');
        });

        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
            $table->unique(['post_id', 'tag_id'], 'unique_post_tag');
            $table->index('post_id', 'idx_post_id');
            $table->index('tag_id', 'idx_tag_id');
        });

        Schema::create('chat_logs', function (Blueprint $table) {
            $table->id();
            $table->text('user_message');
            $table->text('bot_response');
            $table->enum('matched_source', ['faq', 'blog', 'internet', 'fallback']);
            $table->decimal('confidence_score', 5, 2)->default(0.0);
            $table->string('intent', 50)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->index('created_at', 'idx_created_at');
            $table->index('matched_source', 'idx_source');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_tags');
        Schema::dropIfExists('chat_logs');
    }
};
