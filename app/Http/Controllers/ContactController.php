<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    // フォーム画面表示
    public function showForm()
    {
        return view('contact');
    }

    public function showConfirm(Request $request)
    {
        date_default_timezone_set('Asia/Tokyo');

        $input = $request->all();

        // 電話番号からハイフンを取り除く
        if (isset($input['phone'])) {
            $input['phone'] = str_replace('-', '', $input['phone']);
        }

        // バリデーションルール
        $rules = [
            'phone' => 'required|regex:/^\d{10,11}$/', // 電話番号（10～11桁の数字）
            'email' => 'required|email|max:255',
        ];

        // バリデーションメッセージ
        $messages = [
            'regex' => '電話番号は半角数字で10桁または11桁で入力してください。',
            'email' => '有効なメールアドレスを入力してください。',
        ];

        // バリデーションの実行
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            // エラーメッセージと入力データをビューに渡す
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        // バリデーション済みデータと入力データをまとめて渡す
        $data = array_merge($validatedData, $input);

        // 確認画面に遷移し、すべてのデータを渡す
        return view('comfirm', compact('data'));
    }

    // フォーム送信処理
    public function submit(Request $request)
    {
        // 送信されたデータを処理（例：データベースに保存）

        // 送信後にセッションデータを削除
        $request->session()->flush();

        return "送信が完了しました";
    }
}
