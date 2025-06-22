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
                    <p class="article-category">{{ __('message.privacy_policy_category') }}</p>
                    <h1 class="main-title">{{ __('message.privacy_policy') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac10.jpg" alt=""></div>
                <div class="">
                    <div class="">
                        {{ __('message.privacy_policy_title') }}
                    </div>
                    <div class="">
                        {!! nl2br(e(__('message.privacy_policy_description'))) !!}
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.personal_information_initiative') }}
                    </div>
                    <div class="">
                        {{ __('message.personal_information_protection_policy') }}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.purpose_of_personal_information_use') }}
                        </div>
                        {!! __('message.purpose_of_personal_information_details') !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.shared_use_of_personal_information') }}
                        </div>
                        {!! nl2br(e(__('message.shared_use_description'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.third_party_provision') }}
                        </div>
                        <p>{!! nl2br(e(__('message.third_party_provision_description'))) !!}</p>
                    </div>

                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.personal_information_management_title') }}
                        </div>
                        <div>
                            {{ __('message.personal_information_management_desc') }}
                        </div>
                    </div>

                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.procedure_for_personal_data_requests_title') }}
                        </div>
                        <div>
                            {!! nl2br(e(__('message.procedure_for_personal_data_requests_desc'))) !!}
                        </div>
                    </div>

                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.complaints_and_inquiries_title') }}
                        </div>
                        <div>
                            {!! nl2br(e(__('message.complaints_and_inquiries_desc'))) !!}
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.online_privacy_policy_title') }}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_1_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_1_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_2_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_2_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_3_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_3_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_4_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_4_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_5_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_5_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_6_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_6_text'))) !!}
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_google_privacy_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_google_privacy_text'))) !!}
                        <br>
                        <a
                            href="https://policies.google.com/technologies/partner-sites">{{ __('message.online_privacy_policy_google_partner_link_text') }}</a><br>
                        <a
                            href="http://www.google.com/intl/ja/policies/privacy/">{{ __('message.online_privacy_policy_google_privacy_link_text') }}</a>
                    </div>
                    <div class="">
                        <div class="font-w700 font-navy m-top30">
                            {{ __('message.online_privacy_policy_7_title') }}
                        </div>
                        {!! nl2br(e(__('message.online_privacy_policy_7_text'))) !!}
                        <br><br>
                        {{ __('message.online_privacy_policy_last_updated') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
