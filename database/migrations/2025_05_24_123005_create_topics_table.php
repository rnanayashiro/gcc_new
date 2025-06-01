<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id()->comment('主キー');
            $table->string('category')->comment('カテゴリー');
            $table->string('title')->comment('タイトル');
            $table->text('body')->comment('本文');
            $table->string('link_text')->nullable()->comment('リンクテキスト');
            $table->string('link')->nullable()->comment('関連リンク');
            $table->timestamps(); // created_at, updated_at は自動的に付加されます
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
