<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id()->comment('主キー');
            $table->string('category_ja')->comment('カテゴリー（日本語）');
            $table->string('category_en')->comment('カテゴリー（英語）');
            $table->string('title_ja')->comment('タイトル（日本語）');
            $table->string('title_en')->comment('タイトル（英語）');
            $table->text('body_ja')->comment('本文（日本語）');
            $table->text('body_en')->comment('本文（英語）');
            $table->string('link_text_ja')->nullable()->comment('リンクテキスト（日本語）');
            $table->string('link_text_en')->nullable()->comment('リンクテキスト（英語）');
            $table->string('link')->nullable()->comment('関連リンク');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
