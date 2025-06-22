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
                    <h1 class="main-title">{{ __('message.service_list') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac12.jpg" alt=""></div>
                <div class="">
                    <div class="">
                        {{ __('message.accounting_consulting') }}
                    </div>
                    <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                        data-category="showcase">
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('accountingConsulting') }}" target="_self" class="card -horizontal -center">
                                <div class="card-pict"><img src="/images/ser_top_img1.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">
                                        {{ __('message.accounting_consulting') }}</h3>
                                    <p class="card-description">
                                        {{ __('message.accounting_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.consulting_1') }}</li>
                                        <li>■　{{ __('message.consulting_2') }}</li>
                                        <li>■　{{ __('message.consulting_3') }}</li>
                                        <li>■　{{ __('message.consulting_4') }}</li>
                                        <li>■　{{ __('message.consulting_5') }}</li>
                                        <li>■　{{ __('message.consulting_6') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('mergersandAcquisitionsConsulting') }}" target="_self"
                                class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img2.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">{{ __('message.ma_consulting') }}
                                    </h3>
                                    <p class="card-description">
                                        {{ __('message.ma_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.ma_service_1') }}</li>
                                        <li>■　{{ __('message.ma_service_2') }}</li>
                                        <li>■　{{ __('message.ma_service_3') }}</li>
                                        <li>■　{{ __('message.ma_service_4') }}</li>
                                        <li>■　{{ __('message.ma_service_5') }}</li>
                                        <li>■　{{ __('message.ma_service_6') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('initialPublicOfferingConsulting') }}" target="_self"
                                class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img4.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">{{ __('message.ipo_support_title') }}
                                    </h3>
                                    <p class="card-description">
                                        {{ __('message.ipo_support_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.ipo_service_1') }}</li>
                                        <li>■　{{ __('message.ipo_service_2') }}</li>
                                        <li>■　{{ __('message.ipo_service_3') }}</li>
                                        <li>■　{{ __('message.ipo_service_4') }}</li>
                                        <li>■　{{ __('message.ipo_service_5') }}</li>
                                        <li>■　{{ __('message.ipo_service_6') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('systemConsulting') }}" target="_self" class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img5.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">
                                        {{ __('message.system_consulting') }}</h3>
                                    <p class="card-description">
                                        {{ __('message.system_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.system_service_1') }}</li>
                                        <li>■　{{ __('message.system_service_2') }}</li>
                                    </ul>
                                </div>

                            </a>
                        </li>
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('humanResourcesConsulting') }}" target="_self"
                                class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img7.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">{{ __('message.hr_consulting') }}
                                    </h3>
                                    <p class="card-description">
                                        {{ __('message.hr_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.hr_service_1') }}</li>
                                        <li>■　{{ __('message.hr_service_2') }}</li>
                                        <li>■　{{ __('message.hr_service_3') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.tax_consulting') }}
                    </div>
                    <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                        data-category="showcase">
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('taxConsulting') }}" target="_self" class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img1_2.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">{{ __('message.tax_consulting') }}</h3>
                                    <p class="card-description">
                                        {{ __('message.tax_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.tax_service_1') }}</li>
                                        <li>■　{{ __('message.tax_service_2') }}</li>
                                        <li>■　{{ __('message.tax_service_3') }}</li>
                                        <li>■　{{ __('message.tax_service_4') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="{{ route('internationalTaxConsulting') }}" target="_self"
                                class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img3.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">
                                        {{ __('message.international_tax_consulting') }}</h3>
                                    <p class="card-description">
                                        {{ __('message.intl_tax_consulting_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.intl_tax_service_1') }}</li>
                                        <li>■　{{ __('message.intl_tax_service_2') }}</li>
                                        <li>■　{{ __('message.intl_tax_service_3') }}</li>
                                        <li>■　{{ __('message.intl_tax_service_4') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <div>
                        {{ __('message.clinic_support_title') }}
                    </div>
                    <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                        data-category="showcase">
                        <li class="card-list-item is-visible is-act" style="">
                            <a href="https://dmsupport.jp" target="_self" class="card -horizontal -center">
                                <div class="card-pict"><img src="images/ser_top_img6.jpg" alt=""></div>
                                <div class="card-content">
                                    <h3 class="card-heading" data-file-capacity="">
                                        {{ __('message.clinic_support_heading') }}</h3>
                                    <p class="card-description">
                                        {{ __('message.clinic_support_description') }}
                                    </p>
                                    <ul>
                                        <li>■　{{ __('message.clinic_support_service_1') }}</li>
                                        <li>■　{{ __('message.clinic_support_service_2') }}</li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
