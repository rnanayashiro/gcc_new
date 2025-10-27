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
                    <h1 class="main-title">{{ __('message.ma_consulting') }}</h1>
                </div>
                <div class="">
                    <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img2.jpg" alt="f_left" class="image-block-flex">
                        <div class="text-block-flex">
                            {{ __('message.m_and_a_intro') }}<br>
                            {{ __('message.m_and_a_detail') }}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.ma_consulting') }}
                    </div>
                    <div class="">
                        {{ __('message.m_and_a_services') }}<br>
                        {{ __('message.m_and_a_support') }}
                    </div>
                    <div class="support-cases">
                        <ul>
                            <li>{!! __('message.m_and_a_schemes.integration') !!}</li>
                            <li>{!! __('message.m_and_a_schemes.stock_acquisition') !!}</li>
                            <li>{!! __('message.m_and_a_schemes.division') !!}</li>
                        </ul>
                    </div>
                </div>
                <div class="transition-button-container">
                    <a href="{{ route('duediligence') }}" class="transition-button">
                        {{ __('message.transition_button_text') }}
                    </a>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.m_and_a_brokerage_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.m_and_a_brokerage_content'))) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.due_diligence_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.due_diligence_content'))) !!}
                    </div>
                </div>
                <div class="transition-button-container">
                    <a href="{{ route('duediligence') }}" class="transition-button">
                        {{ __('message.transition_button_text') }}
                    </a>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.valuation_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.valuation_content'))) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.restructuring_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.restructuring_content'))) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.recovery_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.recovery_content'))) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
