@extends('layouts.app')
@section('styles')
    @parent
    <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-cover">
            <div class="main-contents">
                <div class="article-header">
                    <p class="article-category">Contact Us</p>
                    <h1 class="main-title">お問い合わせ</h1>
                </div>
                <div class="">
                    <div class="">
                        お問い合わせ内容確認
                    </div>
                    <div class="">
                        お問い合わせフォーム<br>
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
                            <input type="hidden" id="company-name" name="company-name"
                                value="{{ session('company-name') }}">
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
                            <input type="hidden" id="contact-name" name="contact-name"
                                value="{{ session('contact-name') }}">
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
                        <div class="form-container-center">
                            <button type="submit">送信</button>
                            <a href="{{ route('form') }}">戻る</a>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <!-- /.main -->
@endsection
