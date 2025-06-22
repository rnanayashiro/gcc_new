<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use App\Mail\ConfirmationEmail;
use App\Mail\AdminNotificationEmail;
use Illuminate\Support\Facades\Mail;


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
            'regex' => __('validation.phone'), // ロケールに応じたメッセージ
            'email' => __('validation.email'),
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

    public function submit(Request $request)
    {
        // 送信されたデータを取得
        $input = $request->all();

        // 確認メールを送信
        Mail::to($input['email'])->send(new ConfirmationEmail($input));

        // サイト運営者にもメールを送信
        // Mail::to('admin@example.com')->send(new AdminNotificationEmail($input));

        // 送信後にセッションデータを削除
        $request->session()->flush();

        // メール送信完了後のレスポンス
        return "送信が完了しました";
    }
}
