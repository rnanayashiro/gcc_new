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
                <p class="article-category">会社案内　Corporate Overview</p>
                <h1 class="main-title">グループ紹介</h1>
            </div>
            <div class="image-block"><img src="images/ac03.jpg" alt=""></div>
            <div class="">
                <div class="">
                    グローバルグループ
                </div>
                <div class="image-text-block">
                    <img src="/images/group_1.jpg" alt="（株）グローバル・コーポレート・コンサルティング" class="image-block-flex">
                    <div class="text-block-flex">
                        弊社を中心としてAccounting ＆Taxation Professional Groupを構築しており、
                        グローバルグループ各社においても以下のような様々なサービスを提供しております。
                    </div>
                </div>
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_group">
                <img src="/images/gcct.svg" alt="GCC SERVICES (THAILAND) CO., LTD. Logo" class="image-block-flex">
                <div class="text-block-group">
                    <table>
                        <tr>
                            <th>会社名</th>
                            <td><a href="https://asia.g-c-c.jp/jp/" target="_blank" rel="noopener">GCC SERVICES
                                    (THAILAND) CO., LTD.</a></td>
                        </tr>
                        <tr>
                            <th>Managing Director</th>
                            <td>今野&nbsp;貴史&nbsp;（日本国公認会計士）</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>タイでの現地法人等設立支援、会計・税務・法務支援、コンサルティング業務、マーケティングリサーチ</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>952 Ramaland Building, 13 floor, Room No.47, Rama 4 Road, Suriyawong, Bangrak,
                                Bangkok 10500 Thailand</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="">
                <div class="m-top30">
                    タイのJPAC Group ジャパンデスクのお知らせ
                </div>
                <div class="">
                    弊社メンバーファームのタイ法人GCC SERVICES (THAILAND) CO., LTD.は、<br>
                    タイ国バンコク都にあるJPAC Groupと共同で2017年よりJPAC Groupジャパンデスクを開設しております。<br>
                    ジャパンデスクでは、メンバーに大手監査法人出身のタイ人会計士やタイ人弁護士がチームとなり、日系クライアント様が抱える会計・税務・法務に関する問題から、親会社への財務報告プロセス効率化、国際税務、国際M&Aのフィナンシャルアドバイザリー、デューデリジェンスなど、総合的なコンサルティングのニーズまでワンストップでソリューションをご提供いたします。<br>
                    日本人コーディネーターが常勤し、弊社水準でのコンサルティング、日本語でのご相談・レポーティングに対応いたします。<br>
                    <br>
                    詳しい内容は下記までお問い合わせください。
                </div>
                <div class="support-cases">
                    <h3>JPAC Group Japan Desk</h3>
                    <ul>
                        <li>電話（日本語）　+66-86-987-8277</li>
                        <li>Eメール　takahashi@jpac.co.th</li>
                        <li>住所　 36 Soi Thakam 4st, Rama 2 Road Samaedum, Bangkhuntian, Bangkok 10150 Thailand</li>
                    </ul>
                </div>
            </div>
            <div class="image-container-center m-top30">
                <img src="images/JPAC06112017.jpg" alt="JPAC Group Japan Desk">
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_group">
                <img src="/images/AGS-Group_translate.png" alt="AGS(A.I.Global Sun Partners Joint Stock Company)"
                    class="image-block-flex">
                <div class="text-block-group">
                    <table>
                        <tr>
                            <th>会社名</th>
                            <td><a href="http://ags-vn.com/?lang=ja">ＡＧＳ&nbsp;(A.I.Global Sun Partners Joint Stock
                                    Company)</a></td>
                        </tr>
                        <tr>
                            <th>代表</th>
                            <td>石川　幸</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>ベトナム現地での会計・現地法人等設立支援・コンサルティング業務</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>ハノイ事務所：6F Hoang Sam Building, 260-262 Ba Trieu Str.,<br>
                                Hai Ba Trung Dist., Hanoi</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_flex">
                <img src="images/group_5.jpg" alt="株式会社グローバル･ヒューマン･コミュニケーションズ" class="image-block-flex">
                <div class="text-block-flex">
                    <div class="group-title">
                        株式会社グローバル･ヒューマン･コミュニケーションズ
                    </div>
                    <table>
                        <tr>
                            <th>代表取締役</th>
                            <td>佐野 信行 （公認会計士）</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>
                                経理、会計、財務、労務の業務支援・補助<br>
                                人事コンサルティング・人材育成・紹介
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_flex">
                <img src="images/group_2.jpg" alt="株式会社グローバル･マネジメント･コンサルティング" class="image-block-flex">
                <div class="text-block-flex">
                    <div class="group-title">
                        株式会社グローバル･マネジメント･コンサルティング
                    </div>
                    <table>
                        <tr>
                            <th>代表取締役</th>
                            <td>今野 貴史 （公認会計士）</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>
                                海外進出コンサルティング、事業再生、Ｍ＆Ａコンサルティング
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_flex">
                <img src="images/group_3.jpg" alt="株式会社グローバル･システム･コンサルティング" class="image-block-flex">
                <div class="text-block-flex">
                    <div class="group-title">
                        株式会社グローバル･システム･コンサルティング
                    </div>
                    <table>
                        <tr>
                            <th>代表取締役</th>
                            <td>佐野 信行 （公認会計士）</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>
                                会計・財務システムコンサルティング
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="border-gray"></div>
            <div class="image-text-block_flex">
                <img src="images/group_4.jpg" alt="株式会社グローバル･アシスト･コンサルティング" class="image-block-flex">
                <div class="text-block-flex">
                    <div class="group-title">
                        株式会社グローバル･アシスト･コンサルティング
                    </div>
                    <table>
                        <tr>
                            <th>代表取締役</th>
                            <td>野村 光 （公認会計士）</td>
                        </tr>
                        <tr>
                            <th>事業内容</th>
                            <td>
                                Ｍ＆Ａ・組織再編コンサルティング、事業計画策定
                            </td>
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
