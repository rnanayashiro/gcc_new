@extends('layouts.app')
@section('styles')
    @parent
    @vite(['resources/css/pagesetting.css', 'resources/css/modal.css', 'resources/css/common.css'])
@endsection
@include('includes.header')
@section('content')
    <main id="main" class="contents">

        {{-- ========== ヒーローセクション ========== --}}
        <section class="hero-section">
            <div class="carousel-visual js-carousel-visual -dx mb-0">
                <div class="carousel-visual-item">
                    <div class="home-mainvisual">
                        <div class="home-mainvisual-item">
                            <div class="home-mainvisual-pict">
                                <img src="{{ asset('images/TOP-PAGE.gif') }}" alt="" class="pc-content" />
                                <img src="../images/GCC TOP3.jpg" alt="" class="sp-content" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-container">
                <div class="home-mainvisual-button">
                    <a href="{{ route('services') }}" class="button -outline -light">{{ __('message.read_more') }}</a>
                </div>
            </div>
        </section>

        {{-- ========== 領域バナー群 ========== --}}
        <section class="area-bnr-section">
            <div class="l-container">
                <div class="area-bnr">
                    <ul class="area-bnr-list">
                        <li class="area-bnr-list-item area-bnr-list-item-01">
                            <a href="{{ route('accountingConsulting') }}">
                                <img src="images/gccred.webp" alt="{{ __('message.accounting_consulting') }}">
                                <span>{{ __('message.accounting_consulting') }}</span>
                            </a>
                        </li>
                        <li class="area-bnr-list-item area-bnr-list-item-02">
                            <a href="{{ route('taxConsulting') }}">
                                <img src="images/gccblue.webp" alt="{{ __('message.tax_consulting') }}">
                                <span>{{ __('message.tax_consulting') }}</span>
                            </a>
                        </li>
                        <li class="area-bnr-list-item area-bnr-list-item-03">
                            <a href="{{ route('companyOverview') }}">
                                <img src="images/gccyellow.webp" alt="{{ __('message.company_profile') }}">
                                <span>{{ __('message.company_profile') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ========== サービス紹介セクション ========== --}}
        <section class="l-section service-section">
            <div class="l-container">
                <div class="home-content home-service">
                    <div class="content-inner">
                        <p class="home-content-lead">
                            {{ __('message.group_intro') }}
                        </p>
                        <div class="button-block">
                            <a href="{{ route('flow') }}" class="button">{{ __('message.read_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ========== News Releases セクション ========== --}}
        <section class="l-section home-content home-newsreleases" id="news-section">
            <div class="l-container">
                <div class="content-inner">
                    <h2 class="home-content-heading">News Releases</h2>
                    <ul class="column -center js-request-api" data-omit="36" data-omit-sp="27"
                        data-effect-list="slide-up" data-category="release,business,topics" data-limit="4">
                        @foreach ($news as $item)
                            <li class="column-col-4 column-col-1-sp is-visible">
                                <a href="#" class="card -media">
                                    <div class="card-pict">
                                        @if ($item->image_path)
                                            <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->title }}">
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
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="button-block"><a href="{{ route('news') }}" class="button">News Releases 一覧</a></div>
                </div>
            </div>
        </section>

        {{-- ========== Topics セクション ========== --}}
        <section class="l-section topics-section" id="topics-section">
            <div class="l-container">
                <h2 class="home-content-heading">Topics</h2>
                <div class="slider-arrows js-slider-arrows"></div>
                <div class="card-slider-list js-card-slider js-adjust-height-slider js-home-request-api -areaD1"
                    data-omit="36" data-omit-sp="36" data-slider-col="4" data-effect="slide-up" data-category="topics"
                    data-limit="10">

                    @php $locale = app()->getLocale(); @endphp

                    @foreach ($topics as $topic)
                        <div class="card-slider-list-item">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-category">
                                        {{ $locale === 'en' ? $topic->category_en : $topic->category_ja }}
                                    </div>
                                    <p class="card-title">
                                        {{ $locale === 'en' ? $topic->title_en : $topic->title_ja }}
                                    </p>
                                    <p class="card-description">
                                        {{ $locale === 'en' ? $topic->body_en : $topic->body_ja }}
                                    </p>

                                    {{-- 関連リンク表示 --}}
                                    <p>
                                        <a href="{{ $topic->category_ja === '国内関係' ? route($topic->link) : $topic->link }}"
                                            target="_blank" class="related-link">
                                            {{ $locale === 'en' ? $topic->link_text_en : $topic->link_text_ja }}
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
        {{-- <div class="group">
            <div class="content-inner">
                <ul class="group-list">
                    <li class="group-list-item">
                        <a href="{{ route('services') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('message.service') }}
                        </a>
                    </li>
                    <li class="group-list-item">
                        <a href="{{ route('flow') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('message.service_concept') }}
                        </a>
                    </li>
                    <li class="group-list-item">
                        <a href="{{ route('companyOverview') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('message.company_profile') }}
                        </a>
                    </li>
                    <li class="group-list-item">
                        <a href="{{ route('contact') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('message.contact') }}
                        </a>
                    </li>
                    <li class="group-list-item">
                        <a href="{{ route('news') }}" target="_blank" rel="noopener noreferrer">
                            {{ __('message.news') }}
                        </a>
            </div>
        </div> --}}
    </main>
    <!-- /.main -->
    @include('includes.footer')

    @include('includes.modal')
@endsection