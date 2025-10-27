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
                    <p class="article-category">{{ __('message.service_concept_category') }}</p>
                    <h1 class="main-title">{{ __('message.service_concept') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac04.jpg" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        {!! nl2br(e(__('message.company_group_description'))) !!}
                    </div>
                </div>
                <div class="">
                    <div>{{ __('message.service_form_title') }}</div>
                    <div>{{ __('message.service_form_description') }}</div>
                </div>
                <div class="">
                    <div>{{ __('message.continuous_support_title') }}</div>
                    <div>{{ __('message.continuous_support_description') }}</div>
                    <div class="support-cases">
                        <h3>{{ __('message.examples') }}</h3>
                        <ul>
                            <li>{{ __('message.example_1') }}</li>
                            <li>{{ __('message.example_2') }}</li>
                            <li>{{ __('message.example_3') }}</li>
                            <li>{{ __('message.example_4') }}</li>
                            <li>{{ __('message.example_5') }}</li>
                            <li>{{ __('message.example_6') }}</li>
                            <li>{{ __('message.example_7') }}</li>
                            <li>{{ __('message.example_8') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/flow_1.jpg" alt="img_center">
                </div>
                <div class="">
                    <div>{{ __('message.spot_support_title') }}</div>
                    <div>{{ __('message.spot_support_description') }}</div>
                    <div class="support-cases">
                        <h3>{{ __('message.examples') }}</h3>
                        <ul>
                            <li>{{ __('message.spot_example_1') }}</li>
                            <li>{{ __('message.spot_example_2') }}</li>
                            <li>{{ __('message.spot_example_3') }}</li>
                            <li>{{ __('message.spot_example_4') }}</li>
                            <li>{{ __('message.spot_example_5') }}</li>
                            <li>{{ __('message.spot_example_6') }}</li>
                            <li>{{ __('message.spot_example_7') }}</li>
                            <li>{{ __('message.spot_example_8') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/flow_2.jpg" alt="img_center">
                </div>
                <div class="m-top30">
                    {{ __('message.spot_support_note') }}
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
