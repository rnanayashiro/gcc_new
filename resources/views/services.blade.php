@extends('layouts.app')
@section('styles')
@parent
<!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
<main id="main" class="contents">
    <div class="main-cover">
        <div class="main-contents">
            <div class="article-header">
                <p class="article-category">サービス　Services</p>
                <h1 class="main-title">サービス一覧</h1>
            </div>
            <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
            <div class="">
                <div class="">
                    会計コンサルティング
                </div>
                <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                    data-category="showcase">
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="/images/ser_top_img1.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">会計コンサルティング</h3>
                                <p class="card-description">
                                    公認会計士・税理士による専門的な観点から会計に関するコンサルティングを行います。
                                </p>
                                <ul>
                                    <li>■　会計処理・開示コンサルティング</li>
                                    <li>■　原価計算・利益管理体制構築コンサルティング</li>
                                    <li>■　グループ経営コンサルティング</li>
                                    <li>■　連結親会社における連結財務諸表作成支援</li>
                                    <li>■　連結子会社側での連結パッケージ入力支援業務</li>
                                    <li>■　任意監査</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img2.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">M&Aコンサルティング</h3>
                                <p class="card-description">
                                    M&A等の検討・提案・実行支援を経営・会計・財務・税務の観点から行います。
                                </p>
                                <ul>
                                    <li>■　M&Aコンサルティング</li>
                                    <li>■　M&A仲介・アドバイザリー</li>
                                    <li>■　企業再編・組織再編コンサルティング</li>
                                    <li>■　事業再生コンサルティング</li>
                                    <li>■　デューデリジェンス</li>
                                    <li>■　バリュエーション(株価算定)</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img4.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">株式公開支援</h3>
                                <p class="card-description">
                                    株式公開(IPO)へ向けて上場に耐えうる会計処理の指導、内部管理体制の強化等の支援を行います。
                                </p>
                                <ul>
                                    <li>■　ショートレビュー</li>
                                    <li>■　IPO準備会社の課題解決に向けたコンサルティング</li>
                                    <li>■　J-SOXコンサルティング</li>
                                    <li>■　事業計画策定支援</li>
                                    <li>■　資本政策策定支援</li>
                                    <li>■　申請書類作成指導・支援</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img5.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">システムコンサルティング</h3>
                                <p class="card-description">
                                    ベンダー任せのシステム構築にならないように、業務・会計に熟知した公認会計士が構築支援を行います。
                                </p>
                                <ul>
                                    <li>■　システム構築支援（ベンダーとの打合せへの参加含む）</li>
                                    <li>■　RFI（情報提供依頼書）・RFP（提案依頼書）の作成支援</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img7.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">人事コンサルティング</h3>
                                <p class="card-description">
                                    経営の根幹である人事・組織・人財に関するコンサルティングを行います。
                                </p>
                                <ul>
                                    <li>■　人事制度（報酬制度・評価制度）に関するコンサルティング</li>
                                    <li>■　労務関係調査</li>
                                    <li>■　経理業務アウトソーシング</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="">
                    税務コンサルティング
                </div>
                <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                    data-category="showcase">
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img1_2.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">税務コンサルティング</h3>
                                <p class="card-description">
                                    税務申告代理に加え、事業承継や組織再編成時の税務コンサルティングを行います。
                                </p>
                                <ul>
                                    <li>■　組織再編税制コンサルティング</li>
                                    <li>■　事業承継コンサルティング</li>
                                    <li>■　税務申告</li>
                                    <li>■　決算業務・記帳代行業務</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img3.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">国際税務コンサルティング</h3>
                                <p class="card-description">
                                    アジアを中心とした各国にアライアンス先を持ち、語学の堪能な専門スタッフが国際税務コンサルティングを実行いたします。
                                </p>
                                <ul>
                                    <li>■　国際税務に関するショートレビュー</li>
                                    <li>■　CFC（Controlled Foreign Company）税制コンサルティング</li>
                                    <li>■　移転価格税制コンサルティング</li>
                                    <li>■　海外子会社・財務レビューコンサルティング</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="">
                    クリニック開業支援
                </div>
                <ul class="card-list js-request-api js-filtering-area js-first-wide" data-effect-list="slide-up"
                    data-category="showcase">
                    <li class="card-list-item is-visible is-act" style="">
                        <a href="/showcase/yasashii.html" target="_self" class="card -horizontal -center">
                            <div class="card-pict"><img src="images/ser_top_img6.jpg" alt=""></div>
                            <div class="card-content">

                                <h3 class="card-heading" data-file-capacity="">DMS（クリニック開業支援ポータルサイト）運営</h3>
                                <p class="card-description">
                                    主に医療機関向け物件の情報掲載、クリニック継承のサポートなど、クリニック開業支援ポータルサイトの運営を行います。
                                </p>
                                <ul>
                                    <li>■　クリニック開業向け物件の掲載</li>
                                    <li>■　クリニック継承支援</li>
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
@endsection
