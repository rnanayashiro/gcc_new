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
                    <h1 class="main-title">{{ __('message.hr_consulting') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
                <div class="">
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img7.jpg" alt="f_left" class="image-block-flex">
                        <div class="text-block-flex">
                            {!! nl2br(e(__('message.hr_consulting_intro'))) !!}
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.compensation_evaluation_consulting_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.compensation_evaluation_consulting_text'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class="">
                        {{ __('message.labor_relations_audit_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.labor_relations_audit_text'))) !!}
                    </div>
                </div>

                <div class="">
                    <div class=""></div>
                    <div class="image-text-block">
                        <img src="images/ser_top_img7_2.jpg" alt="f_left" class="image-block-flex">
                        <div class="text-block-flex">
                            {!! nl2br(e(__('message.group_company_support_text'))) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
