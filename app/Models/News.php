<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // マスアサインメントを許可するカラム
    protected $fillable = ['title', 'date', 'category', 'content'];
}
