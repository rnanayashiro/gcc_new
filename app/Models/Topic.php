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
        'category_ja',
        'category_en',
        'title_ja',
        'title_en',
        'body_ja',
        'body_en',
        'link_text_ja',
        'link_text_en',
        'link',
    ];
}
