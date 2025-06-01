<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    // フォーム画面表示
    public function index()
    {
        $news = DB::table('news')->get();
        $topics = DB::table('topics')->get();

        // ビューにデータを渡す
        return view('top', [
            'news' => $news,
            'topics' => $topics,
        ]);
    }
}
