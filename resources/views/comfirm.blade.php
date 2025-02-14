@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Contact</h1>
            <h1 class="main-title">お問い合わせ</h1>
            <div class="contents-box">
                <div class="">
                    お問い合わせ
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Contact
                    </div>
                </div>

                <div class="">
                    各サービスに関する質問はお問い合わせ内容を下記のフォームからお気軽にお寄せください。<br>
                    折り返しお返事させていただきます。<br>
                    また、メール・お電話等でも受け付けていますのでお気軽にどうぞ。
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        TEL
                    </div>
                    <div class="sub-container-ritem">
                        06-6264-5177
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        MAIL
                    </div>
                    <div class="sub-container-ritem">
                        <a href="mailto:gcc-info@g-c-c.jp">gcc-info@g-c-c.jp</a>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    お問い合わせフォーム<br>
                    <span class="red-symbol">※</span>は記入必須項目ですので、必ずご記入ください。<br>
                    メールアドレスは正しくご入力下さい。（弊社より返信メールが届きません。）<br>
                    半角カナ入力は文字化けの原因となりますのでご注意ください。
                </div>

            </div>

            <div class="form-container">
                <div class="">
                    お問い合わせフォーム
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Contact Form
                    </div>
                </div>
                <form action="{{ route('submit') }}" method="POST">
                    @csrf

                    <!-- 会社名 -->
                    <div>
                        <label for="company-name">会社名</label>
                        <p>{{ session('company-name') }}</p>
                        <input type="hidden" id="company-name" name="company-name" value="{{ session('company-name') }}">
                    </div>

                    <!-- 業種 -->
                    <div>
                        <label for="industry">業種</label>
                        <p>{{ session('industry') }}</p>
                        <input type="hidden" id="industry" name="industry" value="{{ session('industry') }}">
                    </div>

                    <!-- 部署名 -->
                    <div>
                        <label for="department">部署名</label>
                        <p>{{ session('department') }}</p>
                        <input type="hidden" id="department" name="department" value="{{ session('department') }}">
                    </div>

                    <!-- その他の項目も同様に表示 -->
                    <div>
                        <label for="position">役職名</label>
                        <p>{{ session('position') }}</p>
                        <input type="hidden" id="position" name="position" value="{{ session('position') }}">
                    </div>

                    <div>
                        <label for="contact-name">担当者名</label>
                        <p>{{ session('contact-name') }}</p>
                        <input type="hidden" id="contact-name" name="contact-name" value="{{ session('contact-name') }}">
                    </div>

                    <div>
                        <label for="contact-name-kana">担当者名(かな)</label>
                        <p>{{ session('contact-name-kana') }}</p>
                        <input type="hidden" id="contact-name-kana" name="contact-name-kana"
                            value="{{ session('contact-name-kana') }}">
                    </div>

                    <!-- その他の項目も表示します -->
                    <div>
                        <label for="phone">電話番号</label>
                        <p>{{ session('phone') }}</p>
                        <input type="hidden" id="phone" name="phone" value="{{ session('phone') }}">
                    </div>

                    <div>
                        <label for="email">E-mail</label>
                        <p>{{ session('email') }}</p>
                        <input type="hidden" id="email" name="email" value="{{ session('email') }}">
                    </div>

                    <div>
                        <label for="country">国・地域</label>
                        <p>{{ implode(', ', session('country') ?? []) }}</p>
                        <input type="hidden" name="country" value="{{ implode(', ', session('country') ?? []) }}">
                    </div>

                    <div>
                        <label for="inquiry">お問い合わせ内容</label>
                        <p>{{ implode(', ', session('inquiry') ?? []) }}</p>
                        <input type="hidden" name="inquiry" value="{{ implode(', ', session('inquiry') ?? []) }}">
                    </div>

                    <div>
                        <label for="other-info">その他の内容</label>
                        <p>{{ session('other-info') }}</p>
                        <input type="hidden" id="other-info" name="other-info" value="{{ session('other-info') }}">
                    </div>

                    <button type="submit">送信</button>
                    <a href="{{ route('form') }}">戻る</a>
                </form>
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
