@extends('layouts.app')
@section('styles')
    @parent
    <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/modal.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@include('includes.header')
@section('content')
    <main id="main" class="contents">
        <div class="carousel-visual js-carousel-visual -dx mb-0">
            <div class="carousel-visual-item">
                <div class="home-mainvisual">
                    <div class="home-mainvisual-item">
                        <div class="home-mainvisual-pict"><img src="../images/GCC TOP3.jpg" alt=""
                                class="pc-content" /><img src="../images/mainvisual_img01_sp_202311.jpg" alt=""
                                class="sp-content" /></div>
                        <p class="home-mainvisual-lead">
                            <i>GSSは、公認会計士・税理士をブレーンとして活動している経営・会計・税務の総合コンサルティングファームです。</i>
                        </p>
                        <div class="home-mainvisual-button"><a href="{{ route('services') }}"
                                class="button -outline -light">詳しくみる</a></div>
                    </div>
                </div>
            </div>

            <div class="area-bnr">
                <ul class="area-bnr-list">
                    <li class="area-bnr-list-item area-bnr-list-item-01">
                        <a href="{{ route('accountingConsulting') }}">
                            <img src="images/gccred.webp" alt="会計コンサルティング">
                            <span>会計コンサルティング</span>
                        </a>
                    </li>
                    <li class="area-bnr-list-item area-bnr-list-item-02">
                        <a href="{{ route('taxConsulting') }}">
                            <img src="images/gccblue.webp" alt="税務コンサルティング">
                            <span>税務コンサルティング</span>
                        </a>
                    </li>
                    <li class="area-bnr-list-item area-bnr-list-item-03">
                        <a href="{{ route('companyOverview') }}">
                            <img src="images/gccyellow.webp" alt="会社案内">
                            <span>会社案内</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="home-content home-service">
                <div class="content-inner">
                    <p class="home-content-lead">
                        弊社グループでは、公認会計士、税理士、社会保険労務士等のほか、アライアンス先に弁護士事務所・司法書士事務所・不動産鑑定士事務所等があり、あらゆるサービスをひとつの窓口で提供しております。 </p>
                    </p>
                    <div class="button-block"><a href="{{ route('flow') }}" class="button">詳しくみる</a></div>
                </div>
            </div>
            <div class="home-filtering">

                <section class="home-content home-newsreleases">
                    <div class="content-inner">
                        <h2 class="home-content-heading">News Releases</h2>
                        <ul class="column -center js-request-api" data-omit="36" data-omit-sp="27"
                            data-effect-list="slide-up" data-category="release,business,topics" data-limit="4">
                            @foreach ($news as $item)
                                <li class="column-col-4 column-col-1-sp is-visible">
                                    <a href="#" class="card -media">
                                        <div class="card-pict">
                                            @if ($item->image_path)
                                                <img src="{{ asset('storage/' . $item->image_path) }}"
                                                    alt="{{ $item->title }}">
                                            @else
                                                <img src="path/to/placeholder-image.jpg" alt="Placeholder Image">
                                            @endif
                                        </div>
                                        <div class="card-content">
                                            <div class="card-data">
                                                {{ \Carbon\Carbon::parse($item->date)->format('Y.m.d') }}
                                            </div>
                                            <div class="card-category">{{ ucfirst($item->category) }}</div>
                                            <p class="card-title -sm">{{ $item->title }}</p>
                                            <!-- ###TAGAREA### ここにタグなどを追加可能 -->
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="button-block"><a href="/news/" class="button">News Releases 一覧</a></div>
                    </div>
                </section>

                <section class="home-content bg-base-dark">
                    <div class="content-inner">
                        <h2 class="home-content-heading">Topics</h2>
                        <div class="slider-arrows js-slider-arrows"></div>
                        <div class="card-slider-list js-card-slider js-adjust-height-slider js-home-request-api -areaD1"
                            data-omit="36" data-omit-sp="36" data-slider-col="4" data-effect="slide-up"
                            data-category="topics" data-limit="10">

                            @foreach ($topics as $topic)
                                <div class="card-slider-list-item">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-category">{{ $topic->category }}</div>
                                            <p class="card-title">{{ $topic->title }}</p>
                                            <p class="card-description">{{ $topic->body }}</p>

                                            {{-- 関連リンク表示 --}}
                                            <p>
                                                <a href="{{ $topic->category === '国内関係' ? route($topic->link) : $topic->link }}"
                                                    target="_blank" class="related-link">
                                                    {{ $topic->link_text }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <p class="text-center is-empty" style="display: none;">該当するコンテンツがありません</p>
                    </div>
                </section>

                <div class="group">
                    <div class="content-inner">
                        <ul class="group-list">
                            <li class="group-list-item">
                                <a href="{{ route('services') }}" target="_blank" rel="noopener noreferrer">
                                    サービス
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="{{ route('flow') }}" target="_blank" rel="noopener noreferrer">
                                    サービスコンセプト
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="{{ route('companyOverview') }}" target="_blank" 　rel="noopener noreferrer">
                                    会社案内
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="{{ route('recruit') }}"target="_blank" rel="noopener noreferrer">
                                    お問い合わせ
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="{{ route('recruit') }}"target="_blank" rel="noopener noreferrer">
                                    お知らせ
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="{{ route('recruit') }}" target="_blank" 　rel="noopener noreferrer">
                                    採用情報
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </main>
    <!-- /.main -->
    @include('includes.footer')

    @include('includes.modal')
@endsection
