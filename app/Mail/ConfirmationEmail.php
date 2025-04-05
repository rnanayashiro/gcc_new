<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $input;

    // コンストラクタでフォームデータを受け取る
    public function __construct($input)
    {
        $this->input = $input;
    }

    public function build()
    {
        // メール内容を組み立て
        return $this->subject('新しいフォーム送信がありました')
            ->from('no-reply@example.com')  // 送信元
            ->view('emails.confirmation')  // メール本文のビュー
            ->with([
                'company_name' => $this->input['company-name'] ?? '',
                'industry' => $this->input['industry'] ?? '',
                'department' => $this->input['department'] ?? '',
                'position' => $this->input['position'] ?? '',
                'contact_name' => $this->input['contact-name'] ?? '',
                'contact_name_kana' => $this->input['contact-name-kana'] ?? '',
                'prefecture' => $this->input['prefecture'] ?? '',
                'city' => $this->input['city'] ?? '',
                'street' => $this->input['street'] ?? '',
                'building' => $this->input['building'] ?? '',
                'phone' => $this->input['phone'] ?? '',
                'email' => $this->input['email'] ?? '',
                'country' => $this->input['country'] ?? [],
                'inquiry_item' => $this->input['inquiry-item'] ?? [],
                'inquiry' => $this->input['inquiry'] ?? '',
            ]);
    }
}
