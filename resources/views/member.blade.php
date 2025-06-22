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
                    <h1 class="main-title"></h1>
                </div>
                <div class="image-block"><img src="images/ac03.jpg" alt=""></div>
                <div class="">
                    <div class="">
                        {{ __('message.partner') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.shimokawa_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.shimokawa_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.shimokawa_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.sano_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.sano_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.sano_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.nomura_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.nomura_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.nomura_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.konno_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.konno_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.konno_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.goto_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.goto_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.goto_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class="">
                        {{ __('message.manager') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.sakata_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.sakata_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.sakata_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.kano_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.kano_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.kano_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class="">
                        {{ __('message.associate') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.matsumoto_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.matsumoto_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.matsumoto_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.specified_sharoushi') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.kotani_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.kotani_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.kotani_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class="">
                        {{ __('message.alliance') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.lawyer') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.takamatsu_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.takamatsu_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.takamatsu_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.judicial_scrivener') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.matsumoto_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.matsumoto_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.matsumoto_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class="">
                        {{ __('message.overseas_consultant') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.international_business_consultant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.takahashi_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.takahashi_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.takahashi_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class="">
                        {{ __('message.cpa_tax_accountant') }}
                    </div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.cpa_tax_accountant_title') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.inoue_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.inoue_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.inoue_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="">
                    <div class=""></div>
                    <div class="">
                        <div class="m-bottom10">{{ __('message.tax_accountant') }}</div>
                        <div class="sub-container mb-20">
                            <div class="sub-container-litem80">
                                {{ __('message.lee_ja') }}
                            </div>
                            <div class="sub-container-ritem">
                                {{ __('message.lee_en') }}
                            </div>
                        </div>
                        {!! nl2br(e(__('message.lee_desc'))) !!}
                    </div>
                </div>
                <div class="border-gray"></div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
