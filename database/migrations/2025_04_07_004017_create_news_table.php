<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * マイグレーションを実行するメソッド
     *
     * @return void
     */
    public function up()
    {
        // news テーブルを作成
        Schema::create('news', function (Blueprint $table) {
            // 自動インクリメントする主キーのカラムを作成
            $table->id()->comment('自動インクリメントのID');
            // 記事のタイトルを格納するカラムを作成
            $table->string('title')->comment('タイトル');
            // 記事の日付を格納するカラムを作成
            $table->dateTime('date')->comment('日付');
            // カテゴリを格納するカラムを作成
            $table->string('category')->comment('カテゴリ');
            // 画像パスのカラムを追加
            $table->string('image_path')->nullable()->comment('画像パス');
            // 記事の内容を格納するカラムを作成
            $table->text('content')->comment('本文');
            // created_at と updated_at のカラムを自動で作成
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを元に戻すメソッド
     *
     * @return void
     */
    public function down()
    {
        // news テーブルを削除
        Schema::dropIfExists('news');
    }
}
