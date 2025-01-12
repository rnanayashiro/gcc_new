@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/top.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@include('includes.header')
@section('content')
    <main id="main" class="contents">
        <div class="carousel-visual js-carousel-visual -dx mb-0">
            <div class="carousel-visual-item">
                <div class="home-mainvisual">
                    <div class="home-mainvisual-item">
                        <div class="home-mainvisual-pict"><img src="../images/mainvisual_img01_202311.jpg" alt=""
                                class="pc-content" /><img src="../images/mainvisual_img01_sp_202311.jpg" alt=""
                                class="sp-content" /></div>
                        <p class="home-mainvisual-lead">
                            <i>GSSは、公認会計士・税理士をブレーンとして活動している経営・会計・税務の総合コンサルティングファームです。</i>
                        </p>
                        <div class="home-mainvisual-button"><a href="/capabilities/"
                                class="button -outline -light">詳しくみる</a></div>
                    </div>
                </div>
            </div>

            <div class="area-bnr">
                <ul class="area-bnr-list">
                    <li class="area-bnr-list-item area-bnr-list-item-01">
                        <a href="./feature/philosophy.html">
                            <img src="images/gccred.webp" alt="会計コンサルティング">
                            <span>会計コンサルティング</span>
                        </a>
                    </li>
                    <li class="area-bnr-list-item area-bnr-list-item-02">
                        <a href="./seminar/">
                            <img src="images/gccblue.webp" alt="税務コンサルティング">
                            <span>税務コンサルティング</span>
                        </a>
                    </li>
                    <li class="area-bnr-list-item area-bnr-list-item-03">
                        <a href="./faq/">
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
                    <figure class="home-service-pict"><img src="/images/service_img.png" alt=""
                            class="pc-content" /><img src="/images/service_img_sp.png" alt="" class="sp-content" />
                        <ul class="home-service-link">
                            <li class="ax"><a href="/capabilities/?tab-capabilities=ax"></a></li>
                            <li class="bx"><a href="/capabilities/?tab-capabilities=bx"></a></li>
                            <li class="cx"><a href="/capabilities/?tab-capabilities=cx"></a></li>
                            <li class="dx"><a href="/capabilities/?tab-capabilities=dx"></a></li>
                        </ul>
                    </figure>
                    <div class="button-block"><a href="/capabilities/#capabilities-tab" class="button">詳しくみる</a></div>
                </div>
            </div>
            <div class="home-filtering">
                <section class="home-content bg-base-dark">
                    <div class="content-inner">
                        <h2 class="home-content-heading">Topics</h2>
                        <div class="slider-arrows js-slider-arrows"></div>
                        <div class="card-slider-list js-card-slider js-adjust-height-slider js-home-request-api -areaD1"
                            data-omit="36" data-omit-sp="36" data-slider-col="4" data-effect="slide-up"
                            data-category="showcase" data-limit="10">

                            <div class="card-slider-list-item">
                                <a href="###LINK###" target="###TARGET###" class="card">
                                    <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                                    <div class="card-content">
                                        <div class="card-category">国内関係</div>
                                        <p class="card-title" data-file-capacity="###FILESIZE###">「事業再構築補助金」に関して</p>
                                        <p class="card-description">弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </div>

                            <!-- ここに他のカードスライダーアイテムを追加 -->
                            <div class="card-slider-list-item">
                                <a href="###LINK###" target="###TARGET###" class="card">
                                    <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                                    <div class="card-content">
                                        <div class="card-category">国内関係</div>
                                        <p class="card-title" data-file-capacity="###FILESIZE###">「事業再構築補助金」に関して</p>
                                        <p class="card-description">弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </div>

                            <div class="card-slider-list-item">
                                <a href="###LINK###" target="###TARGET###" class="card">
                                    <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                                    <div class="card-content">
                                        <div class="card-category">国内関係</div>
                                        <p class="card-title" data-file-capacity="###FILESIZE###">「事業再構築補助金」に関して</p>
                                        <p class="card-description">弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </div>

                            <div class="card-slider-list-item">
                                <a href="###LINK###" target="###TARGET###" class="card">
                                    <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                                    <div class="card-content">
                                        <div class="card-category">国内関係</div>
                                        <p class="card-title" data-file-capacity="###FILESIZE###">「事業再構築補助金」に関して</p>
                                        <p class="card-description">弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </div>
                        </div>

                        <p class="text-center is-empty" style="display: none;">該当するコンテンツがありません</p>
                        <div class="button-block"><a href="/showcase/" class="button">Showcase 一覧</a></div>
                    </div>
                </section>

                <section class="home-content home-newsreleases">
                    <div class="content-inner">
                        <h2 class="home-content-heading">News Releases</h2>
                        <ul class="column -center js-request-api" data-omit="36" data-omit-sp="27"
                            data-effect-list="slide-up" data-category="release,business,topics" data-limit="4">
                            <li class="column-col-4 column-col-1-sp is-visible">
                                <a href="#" target="" class="card -media">
                                    <div class="card-pict"><img src="path/to/placeholder-image.jpg"
                                            alt="Placeholder Image">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-data">2023.12.01</div>
                                        <div class="card-category">News Release</div>
                                        <p class="card-title -sm" data-file-capacity="">年末年始営業日のお知らせ</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </li>
                            <li class="column-col-4 column-col-1-sp is-visible">
                                <a href="#" target="" class="card -media">
                                    <div class="card-pict"><img src="path/to/placeholder-image.jpg"
                                            alt="Placeholder Image">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-data">2023.12.01</div>
                                        <div class="card-category">News Release</div>
                                        <p class="card-title -sm" data-file-capacity="">年末年始営業日のお知らせ</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </li>
                            <li class="column-col-4 column-col-1-sp is-visible">
                                <a href="#" target="" class="card -media">
                                    <div class="card-pict"><img src="path/to/placeholder-image.jpg"
                                            alt="Placeholder Image">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-data">2023.12.01</div>
                                        <div class="card-category">News Release</div>
                                        <p class="card-title -sm" data-file-capacity="">年末年始営業日のお知らせ</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </li>
                            <li class="column-col-4 column-col-1-sp is-visible">
                                <a href="#" target="" class="card -media">
                                    <div class="card-pict"><img src="path/to/placeholder-image.jpg"
                                            alt="Placeholder Image">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-data">2023.12.01</div>
                                        <div class="card-category">News Release</div>
                                        <p class="card-title -sm" data-file-capacity="">年末年始営業日のお知らせ</p>
                                        ###TAGAREA###
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="button-block"><a href="/news/" class="button">News Releases 一覧</a></div>
                    </div>
                </section>

                <div class="group">
                    <div class="content-inner">
                        <ul class="group-list">
                            <li class="group-list-item">
                                <a href="https://dentsu-ho.com/" target="_blank" rel="noopener noreferrer">
                                    SERVICE
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="https://www.d-sol.jp/" target="_blank" rel="noopener noreferrer">
                                    SERVICE CONCEPT
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="https://transformation-showcase.com/" target="_blank"　rel="noopener noreferrer">
                                    会社案内
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="https://www.japan.dentsu.com/jp/" target="_blank" rel="noopener noreferrer">
                                    お問い合わせ
                                </a>
                            </li>
                            <li class="group-list-item">
                                <a href="https://www.dentsusoken.com/thinktank"
                                    target="_blank"　rel="noopener noreferrer">
                                    採用情報
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </main>
    <!-- /.main -->
@endsection
