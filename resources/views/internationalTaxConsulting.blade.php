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
                    <h1 class="main-title">{{ __('message.company_overview') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac02.jpg" alt=""></div>
                <div class="image-text-block">
                    <img src="images/gcctax.webp" alt="GCC Tax Corporation" class="image-block-flex">
                    <div class="text-block-flex">
                        {!! nl2br(e(__('message.tax_service_intro'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.international_tax_consulting_title') }}
                    </div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img3.jpg" alt="International Tax Consulting" class="image-block-flex">
                        <div class="text-block-flex">
                            {!! nl2br(e(__('message.international_tax_consulting_text'))) !!}
                        </div>
                    </div>
                </div>

                <div class="image-container-center m-top30">
                    <img src="/images/img_1.jpg" alt="{{ __('message.international_tax_consulting_title') }}">
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.international_tax_overview_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.international_tax_overview_text'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.transfer_pricing_consulting_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.transfer_pricing_consulting_text'))) !!}
                    </div>
                </div>

                <div class="image-container-center m-top30">
                    <img src="/images/image05.gif" alt="{{ __('message.international_tax_consulting_title') }}">
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.international_tax_short_review_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.international_tax_short_review_text'))) !!}
                    </div>
                    <div class="support-cases">
                        <h3>{{ __('message.international_tax_short_review_cases_title') }}</h3>
                        <ul>
                            @foreach (__('message.international_tax_short_review_cases') as $case)
                                <li>{{ $case }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.overseas_subsidiary_finance_review_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.overseas_subsidiary_finance_review_text'))) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
