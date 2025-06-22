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
                    <p class="article-category">{{ __('message.service_category') }}</p>
                    <h1 class="main-title">{{ __('message.accounting_consulting') }}</h1>
                </div>
                <div class="image-block"><img src="images/gccred.webp" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/gccinc.webp" alt="{{ __('message.image_alt') }}" class="image-block-flex">
                        <div class="text-block-flex">
                            {{ __('message.description') }}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.section_title') }}
                    </div>
                    <div class="">
                        {!! __('message.section_content') !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.group_consulting_title') }}
                    </div>
                    <div class="">
                        {!! __('message.group_consulting_content') !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.accounting_support_title') }}
                    </div>
                    <div class="">
                        {!! __('message.accounting_support_content') !!}
                    </div>
                    <div class="support-cases">
                        <h3>{{ __('message.support_cases_title') }}</h3>
                        <ul>
                            @foreach (__('message.support_cases') as $case)
                                <li>{{ $case }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.voluntary_audit_title') }}
                    </div>
                    <div class="">
                        {!! __('message.voluntary_audit_content') !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
