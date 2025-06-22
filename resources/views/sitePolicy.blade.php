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
                    <p class="article-category">{{ __('message.site_policy_category') }}</p>
                    <h1 class="main-title">{{ __('message.site_policy') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac09.jpg" alt=""></div>
                <div class="">
                    <div class="">
                        {{ __('message.exclusive_practices_title') }}
                    </div>
                    <div class="">
                        {{ __('message.exclusive_practices_description') }}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.disclaimer_title') }}
                    </div>
                    <div class="">
                        {{ __('message.disclaimer_description') }}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.privacy_policy_title') }}
                    </div>
                    <div class="">
                        {{ __('message.privacy_policy_description') }}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.links_policy_title') }}
                    </div>
                    <div class="">
                        {{ __('message.links_policy_description') }}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.copyright_title') }}
                    </div>
                    <div class="">
                        {{ __('message.copyright_description') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
