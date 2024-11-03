@extends('layouts.app')
@section('content')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/top.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection

<main id="main" class="contents">
    <div class="carousel-visual js-carousel-visual -dx mb-0">
        <div class="carousel-visual-item">
            <div class="home-mainvisual">
                <div class="home-mainvisual-item">
                    <div class="home-mainvisual-pict"><img src="/images/mainvisual_img01_202311.jpg" alt=""
                            class="pc-content" /><img src="/images/mainvisual_img01_sp_202311.jpg" alt=""
                            class="sp-content" /></div>
                    <p class="home-mainvisual-lead"><i>電通は、顧客企業と社会の持続的成長にコミットする<br class="sp-content">パートナーをめざしています。</i>
                    </p>
                    <div class="home-mainvisual-button"><a href="/capabilities/"
                            class="button -outline -light">詳しくみる</a></div>
                </div>
            </div>
        </div>

        <div class="carousel-visual-item">
            <div class="home-mainvisual">
                <div class="home-mainvisual-item -ad">
                    <div class="home-mainvisual-pict"><img src="/images/mainvisual_img01_240801.jpg" alt=""
                            class="pc-content" /><img src="/images/mainvisual_img01_sp_240801.jpg" alt=""
                            class="sp-content" /></div>
                    <div class="home-mainvisual-button -ai"><a href="/labo/ai_for_growth/"
                            class="button -outline">詳しくみる</a></div>
                </div>
            </div>
        </div>
        <div class="area-bnr">
            <ul class="area-bnr-list">
                <li class="area-bnr-list-item area-bnr-list-item-01">
                    <a href="./feature/philosophy.html"><span>選ばれる理由</span></a>
                </li>
                <li class="area-bnr-list-item area-bnr-list-item-02">
                    <a href="./seminar/"><span>セミナー情報</span></a>
                </li>
                <li class="area-bnr-list-item area-bnr-list-item-03">
                    <a href="./faq/"><span>よくある質問</span></a>
                </li>
                <li class="area-bnr-list-item area-bnr-list-item-04">
                    <a href="./recruit/"><span>採用情報</span></a>
                </li>
                <li class="area-bnr-list-item area-bnr-list-item-05">
                    <a href="./character/"><span>しのびちゃん紹介</span></a>
                </li>
            </ul>
        </div>
        <div class="carousel-visual-item">
            <div class="home-mainvisual">
                <div class="home-mainvisual-item -ad">
                    <div class="home-mainvisual-pict"><img src="/images/mainvisual_img01_240806.jpg" alt="日本の広告費2023"
                            class="pc-content" /><img src="/images/mainvisual_img01_sp_240806.jpg" alt="日本の広告費2023"
                            class="sp-content" /></div>
                    <div class="home-mainvisual-button -ai"><a href="/knowledge/ad_cost/2023/"
                            class="button -outline">詳しくみる</a></div>
                    <p class="home-mainvisual-lead -ad">
                        「日本の広告費」は、日本国内で１年間（1〜12月）に使われた広告費（広告媒体料と広告制作費）の統計です。<br>1947年に推定を開始し、毎年発表しています。</p>
                </div>
            </div>
        </div>
    </div>


    <div class="home-content home-service">
        <div class="content-inner">
            <p class="home-content-lead">電通は４つのTransformationでビジネスを支援します</p>
            <figure class="home-service-pict"><img src="/images/service_img.png"
                    alt="高度化された広告コミュニケーション マーケティング基盤の変革 お客様体験の変革" class="pc-content" /><img
                    src="/images/service_img_sp.png" alt="高度化された広告コミュニケーション マーケティング基盤の変革 お客様体験の変革" class="sp-content" />
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
        <div class="home-content home-topics bg-base-gradient" id="home-topics">
            <div class="content-inner">
                <div class="home-filtering-header">
                    <p class="home-filtering-lead">トップページの編集を、タグを選ぶことによって自由に変えることができます</p>
                    <div class="home-filtering-header-row">
                        <div class="home-filtering-title"><img class="va-middle" src="/common/images/logo_tag.png"
                                alt="dentsu tokyo/osaka/nagoya"></div>
                        <div class="home-filtering-box">
                            <div class="filtering filtering-selectbox-group js-filtering-group">
                                <p class="filtering-label js-filtering-label">#タグを選ぶ</p>
                                <div class="filtering-content js-filtering-content">
                                    <div class="filtering-selectbox">
                                        <ul class="filtering-selectbox-options">


                                            <li class="filtering-selectbox-option is-selected" data-option="209"><span
                                                    class="filtering-selectbox-option-inner">#DX
                                                    （デジタル・トランスフォーメーション）</span></li>


                                            <li class="filtering-selectbox-option" data-option="206"><span
                                                    class="filtering-selectbox-option-inner">#AX
                                                    （アドバタイジング・トランスフォーメーション）</span></li>


                                            <li class="filtering-selectbox-option" data-option="240"><span
                                                    class="filtering-selectbox-option-inner">#SDGs</span></li>


                                            <li class="filtering-selectbox-option" data-option="253"><span
                                                    class="filtering-selectbox-option-inner">#ビジネスデザイン</span></li>


                                            <li class="filtering-selectbox-option" data-option="239"><span
                                                    class="filtering-selectbox-option-inner">#LGBTQ+</span></li>


                                            <li class="filtering-selectbox-option" data-option="229"><span
                                                    class="filtering-selectbox-option-inner">#日本の広告費</span></li>


                                            <li class="filtering-selectbox-option" data-option="262"><span
                                                    class="filtering-selectbox-option-inner">#調査レポート</span></li>


                                            <li class="filtering-selectbox-option" data-option="234"><span
                                                    class="filtering-selectbox-option-inner">#PDM（ピープルドリブンマーケティング）</span>
                                            </li>


                                            <li class="filtering-selectbox-option" data-option="256"><span
                                                    class="filtering-selectbox-option-inner">#広告賞</span></li>


                                            <li class="filtering-selectbox-option" data-option="235"><span
                                                    class="filtering-selectbox-option-inner">#AI</span></li>

                                            <li class="filtering-selectbox-option" data-option="all"><span
                                                    class="filtering-selectbox-option-inner">すべて（時系列）</span></li>
                                        </ul>
                                        <div class="filtering-link-block"><a href="/tag/">タグ一覧</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="home-topics-list-main js-home-request-api -areaB" data-omit="25" data-omit-sp="32"
                    data-id="2769,N10773,2820" data-limit="3" data-flg="1">
                    <li class="home-topics-list-main-item" data-effect="slide-left">
                        <a href="###LINK###" target="###TARGET###" class="card -horizontal -center">
                            <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                            <div class="card-content">
                                <div class="card-data">###DATE###</div>
                                <div class="card-category">###CATEGORYNAME###</div>
                                <h3 class="card-heading" data-file-capacity="###FILESIZE###">###TITLE###</h3>
                                <p class="card-description">###SUMMARY###</p>
                                ###TAGAREA###
                            </div>
                        </a>
                    </li>
                </ul>
                <p class="text-center is-empty" style="display: none;">該当するコンテンツがありません</p>

                <div class="slider-arrows js-slider-arrows"></div>
                <div class="js-home-request-api -areaC home-topics-list-sub-wrap -unslick" data-omit="21"
                    data-omit-sp="57" data-effect-list=slide-up data-exclude="2769,N10773,2820" data-limit="12"
                    data-flg="1">
                    <div class="home-topics-list-sub-item">
                        <a href="###LINK###" target="###TARGET###" class="card">
                            <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                            <div class="card-content">
                                <div class="card-data">###DATE###</div>
                                <div class="card-category">###CATEGORYNAME###</div>
                                <p class="card-title" data-file-capacity="###FILESIZE###">###TITLE###</p>
                                <p class="card-description">###SUMMARY###</p>
                                ###TAGAREA###
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="home-content bg-base-dark">
            <div class="content-inner">
                <h2 class="home-content-heading">Showcase</h2>
                <div class="slider-arrows js-slider-arrows"></div>
                <div class="card-slider-list js-card-slider js-adjust-height-slider js-home-request-api -areaD1"
                    data-omit="36" data-omit-sp="36" data-slider-col="4" data-effect="slide-up"
                    data-category="showcase" data-limit="10">
                    <div class="card-slider-list-item">
                        <a href="###LINK###" target="###TARGET###" class="card">
                            <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                            <div class="card-content">
                                <div class="card-category">###CATEGORYNAME###</div>
                                <p class="card-title" data-file-capacity="###FILESIZE###">###TITLE###</p>
                                <p class="card-description">###SUMMARY###</p>
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
                    <li class="column-col-4 column-col-1-sp">
                        <a href="###LINK###" target="###TARGET###" class="card -media">
                            <div class="card-pict"><img src="###THUMBNAIL###" alt=""></div>
                            <div class="card-content">
                                <div class="card-data">###DATE###</div>
                                <div class="card-category">###CATEGORYNAME###</div>
                                <p class="card-title -sm" data-file-capacity="###FILESIZE###">###TITLE###</p>
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
                    <li class="group-list-item"><a href="https://dentsu-ho.com/" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_dentsu_ho.png"
                                alt="電通報" /></a></li>
                    <li class="group-list-item"><a href="https://www.d-sol.jp/" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_d_sol.png"
                                alt="Do! SOLUTIONS" /></a></li>
                    <li class="group-list-item"><a href="https://transformation-showcase.com/" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_tsc.png"
                                alt="Transformation SHOWCASE" /></a></li>
                    <li class="group-list-item"><a href="https://www.japan.dentsu.com/jp/" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_japan_dentsu_230101.png"
                                alt="dentsu Japan" /></a></li>
                    <li class="group-list-item"><a href="https://www.dentsusoken.com/thinktank" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_institute_dentsu.png"
                                alt="電通総研" /></a></li>
                    <li class="group-list-item"><a href="https://www.group.dentsu.com/" target="_blank"
                            rel="noopener noreferrer"><img src="/common/images/logo_dentsu.png" alt="dentsu" /></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</main>
<!-- /.main -->@endsection
