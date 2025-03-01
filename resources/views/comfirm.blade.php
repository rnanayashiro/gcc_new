@extends('layouts.app')
@section('styles')
    @parent
    <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@include('includes.header')
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
                    <form action="{{ route('submit') }}" method="POST">
                        @csrf

                        <!-- 会社名 -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                会社名<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['company-name'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="company-name" value="{{ $data['company-name'] ?? '' }}">
                        </div>

                        <!-- 業種 -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                業種<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['industry'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="industry" value="{{ $data['industry'] ?? '' }}">
                        </div>

                        <!-- 部署名 -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                部署名
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['department'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="department" value="{{ $data['department'] ?? '' }}">
                        </div>

                        <!-- 役職名（必須） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                役職名
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['position'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="position" value="{{ $data['position'] ?? '' }}">
                        </div>

                        <!-- 担当者名（必須） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                担当者名<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['contact-name'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="contact-name" value="{{ $data['contact-name'] ?? '' }}">
                        </div>

                        <!-- 担当者名(かな) -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                担当者名(かな)<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['contact-name-kana'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="contact-name-kana" value="{{ $data['contact-name-kana'] ?? '' }}">
                        </div>

                        <!-- ご住所 -->
                        <div class="m-top30 font-w700">ご住所</div>
                        <div class="sub-container">
                            <div class="sub-container-litem160">
                                都道府県
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['prefecture'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="prefecture" value="{{ $data['prefecture'] ?? '' }}">
                        </div>
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                市区町村
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['city'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="city" value="{{ $data['city'] ?? '' }}">
                        </div>
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                町名・番地
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['street'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="street" value="{{ $data['street'] ?? '' }}">
                        </div>
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                ビル名等
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['building'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="building" value="{{ $data['building'] ?? '' }}">
                        </div>

                        <!-- 電話番号 -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                電話番号<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['phone'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="phone" value="{{ $data['phone'] ?? '' }}">
                        </div>

                        <!-- E-mail（必須） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                E-mail<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['email'] ?? '' }}</p>
                            </div>
                            <input type="hidden" name="email" value="{{ $data['email'] ?? '' }}">
                        </div>

                        <!-- 国・地域（必須） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                国・地域
                            </div>
                            <div class="sub-container-ritem">
                                <p>
                                    @if (!empty($data['country']))
                                        @foreach ($data['country'] as $inquiry)
                                            {{ $inquiry }}<br>
                                        @endforeach
                                        <input type="hidden" name="country[]"
                                            value="{{ implode(',', $data['country']) }}">
                                    @else
                                        <input type="hidden" name="country[]" value="">
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!-- お問い合わせ内容（必須） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                お問い合わせ内容<span class="red-symbol">※</span>
                            </div>
                            <div class="sub-container-ritem">
                                <p>
                                    @if (!empty($data['inquiry-item']))
                                        @foreach ($data['inquiry-item'] as $inquiry)
                                            {{ $inquiry }}<br>
                                        @endforeach
                                        <input type="hidden" name="inquiry-item[]"
                                            value="{{ implode(',', $data['inquiry-item']) }}">
                                    @else
                                        <input type="hidden" name="inquiry-item[]" value="">
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!-- その他の内容（任意） -->
                        <div class="sub-container m-top30">
                            <div class="sub-container-litem160">
                                その他の内容
                            </div>
                            <div class="sub-container-ritem">
                                <p>{{ $data['inquiry'] ?? '' }}</p>
                                <input type="hidden" name="inquiry" value="{{ $data['inquiry'] ?? '' }}">
                            </div>
                        </div>

                        <div class="form-container-center">
                            <a href="{{ route('contact') }}" class="back-button">戻る</a>
                            <button type="submit">送信</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
