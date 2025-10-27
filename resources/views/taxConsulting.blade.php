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
                    <h1 class="main-title">{{ __('message.tax_consulting') }}</h1>
                </div>
                <div class="image-block"><img src="images/gccblue.webp" alt=""></div>
                <div class="image-text-block">
                    <img src="images/gcctax.webp" alt="{{ __('message.tax_staff_location') }}" class="image-block-flex">
                    <div class="text-block-flex">
                        {!! nl2br(e(__('message.tax_service_intro'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.corporate_restructuring_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.corporate_restructuring_text'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.business_succession_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.business_succession_text'))) !!}
                    </div>
                </div>

                <div class="transition-button-container">
                    <a href="{{ route('bussinessSuccession') }}" class="transition-button">
                        {{ __('message.business_succession_detail_btn') }}
                    </a>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.accounting_services_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.accounting_services_text'))) !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
