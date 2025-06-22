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
                    <p class="article-category">{{ __('message.contact_us') }}</p>
                    <h1 class="main-title">{{ __('message.contact') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac05.jpg" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        {!! __('message.contact_description') !!}
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
                </div>
                <div class="form-container">
                    <div class="">
                        {{ __('message.contact_form_title') }}
                    </div>
                    <div class="">
                        {!! __('message.contact_form_description') !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <form action="{{ route('confirm') }}" method="POST">
                    @csrf

                    <!-- 会社名 -->
                    <div class="sub-container">
                        <div class="sub-container-litem160">
                            {{ __('message.company_name') }}<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="company-name" name="company-name" required>
                        </div>
                    </div>

                    <!-- 業種 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.industry') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="industry" name="industry">
                        </div>
                    </div>

                    <!-- 部署名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.department') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="department" name="department">
                        </div>
                    </div>

                    <!-- 役職名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.position') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="position" name="position">
                        </div>
                    </div>

                    <!-- 担当者名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.contact_name') }}<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="contact-name" name="contact-name" required>
                        </div>
                    </div>

                    <!-- 担当者名(かな) -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.contact_name_kana') }}<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="contact-name-kana" name="contact-name-kana"
                                required>
                        </div>
                    </div>

                    <!-- ご住所 -->
                    <div class="m-top30 font-w700">{{ __('message.address') }}</div>
                    <div class="sub-container">
                        <div class="sub-container-litem160">
                            {{ __('message.prefecture') }}
                        </div>
                        <div class="sub-container-ritem">
                            <select id="prefecture" class="form-group-input" name="prefecture">
                                <option value="">{{ __('message.select_prefecture') }}</option>
                                @foreach (__('message.prefecture_options') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.city') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="city" name="city">
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.street') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="street" name="street">
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.building') }}
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="building" name="building">
                        </div>
                    </div>

                    <!-- 電話番号 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.phone') }}<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="phone" name="phone" required>
                            @error('phone')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            E-mail<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="email" name="email">
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- 国・地域 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.country_region') }}
                        </div>
                        <div class="sub-container-ritem width100per">
                            @foreach (__('message.countries') as $value => $label)
                                <label class="width210">
                                    <input type="checkbox" name="country[]" value="{{ $value }}">
                                    {{ $label }}
                                </label>
                                @if ($loop->iteration % 3 === 0)
                                    <br>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- お問い合わせ内容 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            {{ __('message.inquiry_content') }}<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem width100per">
                            @foreach (__('message.inquiry_items') as $value => $label)
                                <label class="width210">
                                    <input type="checkbox" name="inquiry-item[]" value="{{ $value }}">
                                    {{ $label }}
                                </label>
                                @if ($loop->iteration % 3 === 0)
                                    <br>
                                @endif
                            @endforeach
                            <br>
                            <textarea id="other-info" class="form-group-txtarea" name="inquiry" rows="4" cols="50"
                                placeholder="{{ __('message.inquiry_placeholder') }}" required></textarea>
                        </div>
                    </div>


                    <div class="form-container-center">
                        <button type="submit" class="submit">{{ __('message.proceed_to_confirmation') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
