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
                <p class="article-category">サービスコンセプト　Service Concept</p>
                <h1 class="main-title">サービスコンセプト</h1>
            </div>
            <div class="image-block"><img src="images/ac04.jpg" alt=""></div>
            <div class="">
                <div class=""></div>
                <div class="">
                    弊社グループでは、公認会計士、税理士、社会保険労務士等のほか、アライアンス先に弁護士事務所・司法書士事務所・不動産鑑定士事務所等があり、あらゆるサービスをひとつの窓口で提供しております。<br>
                    例えば、M&A案件に係るデューデリジェンスにおいては、会計・税務のみならず、法務・労務・不動産関連に関する問題点を横断的に指摘することが可能です。<br>
                    また、弊社の特徴として、士業にありがちな一人の先生による対応ということはなく、どのような案件も複数名のチームで対応することとしております。専門家コンサルタントとコンサルティングスタッフが連携して、お客様のご要望を聞きながら、お客様にとって最もふさわしい、的確なアドバイスを行い、お客様とともに問題を解決するスタイルをとっております。<br>
                </div>
            </div>
            <div class="">
                <div class="">
                    サービス形態
                </div>
                <div class="">
                    弊社グループでは主として以下の形態でサービスを提供させていただきます。
                </div>
            </div>
            <div class="">
                <div class="">
                    継続支援サービス
                </div>
                <div class="">
                    貴社のニーズを聞きながら、じっくりと時間をかけ、継続的に助言・指導をさせていただくサービスです。
                </div>
                <div class="support-cases">
                    <h3>事例</h3>
                    <ul>
                        <li>会計処理及び内部管理体制強化に関する継続的アドバイザリー業務</li>
                        <li>連結親会社における連結財務諸表作成や連結子会社側での連結パッケージ入力支援業務</li>
                        <li>IPO実現に向けた会計処理やJ-SOXに関するアドバイザリー業務</li>
                        <li>海外進出に関するアドバイザリー業務</li>
                        <li>人事報酬制度・評価制度構築支援業務/li>
                        <li>システム構築支援業務</li>
                        <li>税務顧問業務</li>
                        <li>移転価格税制など国際税務に関するアドバイザリー業務</li>
                    </ul>
                </div>
            </div>
            <div class="image-container-center m-top30">
                <img src="/images/flow_1.jpg" alt="img_center">
            </div>
            <div class="">
                <div class="">
                    スポット支援サービス
                </div>
                <div class="">
                    短期間で、貴社の特定の課題を解決するためのサービスです。
                </div>
                <div class="support-cases">
                    <h3>事例</h3>
                    <ul>
                        <li>財務デューデリジェンス、株価算定</li>
                        <li>MBOアドバイザリー業務</li>
                        <li>M&Aスキーム構築アドバイザリー業務</li>
                        <li>M&A仲介</li>
                        <li>人事報酬制度・評価制度構築支援業務/li>
                        <li>システム構築支援業務</li>
                        <li>税務顧問業務</li>
                        <li>移転価格税制など国際税務に関するアドバイザリー業務</li>
                    </ul>
                </div>
            </div>
            <div class="image-container-center m-top30">
                <img src="/images/flow_2.jpg" alt="img_center">
            </div>
            <div class="m-top30">
                ※スポット支援の後も、継続支援という形で、引き続き貴社へのサービス提供をさせていただくことも可能です。
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
