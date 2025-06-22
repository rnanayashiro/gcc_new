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
                    <h1 class="main-title">{{ __('message.group') }}</h1>
                </div>
                <div class="image-block"><img src="images/ac03.jpg" alt=""></div>
                <div class="">
                    <div class="">{{ __('message.global_group') }}</div>
                    <div class="image-text-block">
                        <img src="/images/group_1.jpg" alt="{{ __('message.global_corporate_consulting') }}"
                            class="image-block-flex">
                        <div class="text-block-flex">
                            {{ __('message.group_description') }}
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_group">
                    <img src="/images/gcct.svg" alt="{{ __('message.gcc_logo') }}" class="image-block-flex">
                    <div class="text-block-group">
                        <table>
                            <tr>
                                <th>{{ __('message.company_name') }}</th>
                                <td><a href="https://asia.g-c-c.jp/jp/" target="_blank"
                                        rel="noopener">{{ __('message.gcc_name') }}</a></td>
                            </tr>
                            <tr>
                                <th>{{ __('message.managing_director') }}</th>
                                <td>{{ __('message.konno_takashi') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_description') }}</th>
                                <td>{{ __('message.business_content') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.location') }}</th>
                                <td>{{ __('message.location_address') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="">
                    <div class="m-top30">
                        {{ __('message.jpac_group_notice') }}
                    </div>
                    <div class="">
                        {{ __('message.jpac_group_description') }}
                    </div>
                    <div class="support-cases">
                        <h3>{{ __('message.jpac_group_title') }}</h3>
                        <ul>
                            <li>{{ __('message.jpac_group_phone') }}</li>
                            <li>{{ __('message.jpac_group_email') }}</li>
                            <li>{{ __('message.jpac_group_address') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="images/JPAC06112017.jpg" alt="JPAC Group Japan Desk">
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_group">
                    <img src="/images/AGS-Group_translate.png" alt="{{ __('message.ags_alt') }}" class="image-block-flex">
                    <div class="text-block-group">
                        <table>
                            <tr>
                                <th>{{ __('message.company_name') }}</th>
                                <td><a href="http://ags-vn.com/?lang=ja">{{ __('message.ags_name') }}</a></td>
                            </tr>
                            <tr>
                                <th>{{ __('message.representative') }}</th>
                                <td>{{ __('message.ags_representative') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_content') }}</th>
                                <td>{{ __('message.ags_business_content') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.location') }}</th>
                                <td>{{ __('message.ags_location') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_flex">
                    <img src="images/group_5.jpg" alt="{{ __('message.ghc_alt') }}" class="image-block-flex">
                    <div class="text-block-flex">
                        <div class="group-title">
                            {{ __('message.ghc_title') }}
                        </div>
                        <table>
                            <tr>
                                <th>{{ __('message.ceo') }}</th>
                                <td>{{ __('message.ghc_ceo') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_content') }}</th>
                                <td>{{ __('message.ghc_business_content') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_flex">
                    <img src="images/group_2.jpg" alt="{{ __('message.gmc_alt') }}" class="image-block-flex">
                    <div class="text-block-flex">
                        <div class="group-title">
                            {{ __('message.gmc_title') }}
                        </div>
                        <table>
                            <tr>
                                <th>{{ __('message.ceo') }}</th>
                                <td>{{ __('message.gmc_ceo') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_content') }}</th>
                                <td>{{ __('message.gmc_business_content') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_flex">
                    <img src="images/group_3.jpg" alt="{{ __('message.gsc_alt') }}" class="image-block-flex">
                    <div class="text-block-flex">
                        <div class="group-title">
                            {{ __('message.gsc_title') }}
                        </div>
                        <table>
                            <tr>
                                <th>{{ __('message.ceo') }}</th>
                                <td>{{ __('message.gsc_ceo') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_content') }}</th>
                                <td>{{ __('message.gsc_business_content') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="border-gray"></div>
                <div class="image-text-block_flex">
                    <img src="images/group_4.jpg" alt="{{ __('message.gac_alt') }}" class="image-block-flex">
                    <div class="text-block-flex">
                        <div class="group-title">
                            {{ __('message.gac_title') }}
                        </div>
                        <table>
                            <tr>
                                <th>{{ __('message.ceo') }}</th>
                                <td>{{ __('message.gac_ceo') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('message.business_content') }}</th>
                                <td>{{ __('message.gac_business_content') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="border-gray"></div>
            </div>
        </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')
@endsection
