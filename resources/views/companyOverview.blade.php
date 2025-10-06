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
                    <p class="article-category">{{ __('message.company_overview_category') }}</p>
                    <h1 class="main-title">{{ __('message.company_overview_title') }}</h1>
                </div>
                <div class="image-block"><img src="images/gccyellow.webp" alt=""></div>
                <div class="">
                    <div>{{ __('message.company_name') }}</div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.head_office') }}</div>
                        <div class="sub-container-ritem">
                            {{ __('message.tax_corp_address') }}
                        </div>
                    </div>

                    <div class="border-gray"></div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.representative_director') }}</div>
                        <div class="sub-container-ritem">{{ __('message.rep_name') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.chairman_board') }}</div>
                        <div class="sub-container-ritem">{{ __('message.chairman') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.director') }}</div>
                        <div class="sub-container-ritem">{{ __('message.director_1') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.director') }}</div>
                        <div class="sub-container-ritem">{{ __('message.director_2') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.director') }}</div>
                        <div class="sub-container-ritem">{{ __('message.director_3') }}</div>
                    </div>

                    <div class="border-gray"></div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.business_content') }}</div>
                        <div class="sub-container-ritem">{{ __('message.business_description') }}</div>
                    </div>
                </div>
                <div class="">
                    <div>{{ __('message.tax_corp_name') }}</div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.office_location') }}</div>
                        <div class="sub-container-ritem">{{ __('message.tax_corp_address') }}</div>
                    </div>

                    <div class="border-gray"></div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.representative_partner') }}</div>
                        <div class="sub-container-ritem">{{ __('message.tax_rep_1') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.representative_partner') }}</div>
                        <div class="sub-container-ritem">{{ __('message.tax_rep_2') }}</div>
                    </div>

                    <div class="border-gray"></div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.business_content') }}</div>
                        <div class="sub-container-ritem">{{ __('message.tax_business_description') }}</div>
                    </div>
                </div>
                <div class="">
                    <div>{{ __('message.total_personnel') }}</div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.cpa') }}</div>
                        <div class="sub-container-ritem">9{{ __('message.people') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.tax_accountant') }}</div>
                        <div class="sub-container-ritem">6{{ __('message.people') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.social_insurance_labor_consultant') }}</div>
                        <div class="sub-container-ritem">2{{ __('message.people') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.real_estate_appraiser') }}</div>
                        <div class="sub-container-ritem">1{{ __('message.people') }}</div>
                    </div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.consulting_staff') }}</div>
                        <div class="sub-container-ritem">45{{ __('message.people') }}</div>
                    </div>

                    <div class="border-gray"></div>

                    <div class="sub-container">
                        <div class="sub-container-litem">{{ __('message.total') }}</div>
                        <div class="sub-container-ritem">63{{ __('message.people') }}</div>
                        <div class="sub-container-date">{{ __('message.as_of_date') }}</div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        {{ __('message.location') }}
                    </div>
                    <div class="image-container-flex m-top30">
                        <img src="images/com_building.png" alt="{{ __('message.map_alt_right') }}">
                        <img src="images/gccmap202209.png" alt="{{ __('message.map_alt_left') }}">
                    </div>
                    <div class="m-top30">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6561.683237563995!2d135.50251197554547!3d34.68394657292569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e71f0cb09e4b%3A0xde3a39341ab96145!2z77yI5qCq77yJ44Kw44Ot44O844OQ44Or44O744Kz44O844Od44Os44O844OI44O744Kz44Oz44K144Or44OG44Kj44Oz44KwL--8iOeoju-8iUdDQw!5e0!3m2!1sja!2sjp!4v1737285527816!5m2!1sja!2sjp"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
