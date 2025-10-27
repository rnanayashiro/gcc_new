@extends('layouts.app')
@section('styles')
    @parent
    @vite([
        'resources/css/pagesetting.css',
        'resources/css/common.css',
    ])
@endsection
@include('includes.header')
@section('content')
    <main id="main" class="contents">
        <div class="main-cover">
            <div class="main-contents">
                <div class="article-header">
                    <p class="article-category">{{ __('message.service_category') }}</p>
                    <h1 class="main-title">{{ __('message.system_consulting') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img5.jpg" alt="f_left" class="image-block-flex">
                        <div class="text-block-flex">
                            {!! nl2br(e(__('message.it_system_advice_text'))) !!}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.continuous_support_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.continuous_support_text'))) !!}
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_4.jpg" alt="img_center">
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_3.jpg" alt="img_center">
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
