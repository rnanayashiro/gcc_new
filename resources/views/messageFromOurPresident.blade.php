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
                    <p class="article-category">{{ __('message.company_overview_category') }}</p>
                    <h1 class="main-title">{{ __('message.president_message') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac03.jpg" alt=""></div>
                <div class="">
                    <div class="">{{ __('message.ceo_greeting_title') }}</div>
                    <div class="">
                        {!! nl2br(e(__('message.ceo_greeting_text'))) !!}
                        <div class="txt-right">
                            {!! __('message.ceo_name') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
