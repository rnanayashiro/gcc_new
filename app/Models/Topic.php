<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * 一括代入可能な属性
     */
    protected $fillable = [
        'category',   // カテゴリー
        'title',      // タイトル
        'body',       // 本文
        'link_text',       // リンクテキスト
        'link',       // 関連リンク
    ];
}
