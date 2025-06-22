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
                    <h1 class="main-title">{{ __('message.ipo_consulting') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img4.jpg" alt="{{ __('message.ipo_image_alt') }}" class="image-block-flex">
                        <div class="text-block-flex">
                            {!! nl2br(e(__('message.ipo_text'))) !!}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.short_review_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.short_review_content'))) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.jsox_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.jsox_content'))) !!}
                    </div>
                    <div class="support-cases">
                        <ul>
                            @foreach (__('message.jsox_tasks') as $task)
                                <li>{{ $task }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.jsox_note'))) !!}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.jsox_support'))) !!}
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_2.jpg" alt="ディスクローズ体制の整備・構築支援">
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
