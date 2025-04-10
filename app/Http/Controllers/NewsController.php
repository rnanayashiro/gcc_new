<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // フォーム画面表示
    public function showForm()
    {
        return view('newsForm');
    }


    // フォーム送信時に実行されるメソッド
    public function submit(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'title' => 'required|string|max:255',  // タイトルは必須、文字列、最大255文字
            'date' => 'required|date',  // 日付は必須、date形式
            'category' => 'required|string|max:255',  // カテゴリは必須、文字列、最大255文字
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:2048', // 画像バリデーション
            'content' => 'required|string',  // 本文は必須、文字列
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
        }

        // バリデーションが成功した場合にデータを保存
        News::create([
            'title' => $validated['title'],
            'date' => $validated['date'],
            'category' => $validated['category'],
            'image_path' => $imagePath,
            'content' => $validated['content'],
        ]);

        // 登録後にフォームをリダイレクトして成功メッセージを表示
        return redirect()->route('news')->with('success', 'ニュース記事が登録されました。');
    }
}
