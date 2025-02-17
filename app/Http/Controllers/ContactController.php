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
        // バリデーションルール
        $rules = [
            'company-name' => 'required|string|max:255',
            'contact-name' => 'required|string|max:255',
            'contact-name-kana' => 'required|string|max:255',
            'phone' => 'required|regex:/^\d{10,11}$/', // 電話番号（10～11桁の数字）
            'email' => 'required|email|max:255',
            'inquiry' => 'required', // お問い合わせ内容は1つ以上選択することを確認
        ];

        $messages = [
            'required' => '入力してください。',
            'string' => '文字列を入力してください。',
            'regex' => '半角英数字で入力してください。',
            'email' => '有効なメールアドレスを入力してください。',
        ];

        // バリデーションの実行
        $validator = Validator::make($request->all(), $rules, $messages);

        // バリデーションエラーがあればフォームに戻す
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // バリデーション通過後の処理（データの保存やメール送信など）
        // ここでは確認ページにリダイレクト
        return redirect()->route('contact.confirm')->with('success', 'フォームが送信されました');
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
