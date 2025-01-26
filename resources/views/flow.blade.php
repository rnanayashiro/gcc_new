@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Service Concept</h1>
            <h1 class="main-title">サービスコンセプト</h1>
            <div class="contents-box">
                <div class="">
                    サービスコンセプト
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Service Concept
                    </div>
                </div>

                <div class="">
                    弊社グループでは、公認会計士、税理士、社会保険労務士等のほか、アライアンス先に弁護士事務所・司法書士事務所・不動産鑑定士事務所等があり、あらゆるサービスをひとつの窓口で提供しております。<br>
                    例えば、M&A案件に係るデューデリジェンスにおいては、会計・税務のみならず、法務・労務・不動産関連に関する問題点を横断的に指摘することが可能です。<br>
                    また、弊社の特徴として、士業にありがちな一人の先生による対応ということはなく、どのような案件も複数名のチームで対応することとしております。専門家コンサルタントとコンサルティングスタッフが連携して、お客様のご要望を聞きながら、お客様にとって最もふさわしい、的確なアドバイスを行い、お客様とともに問題を解決するスタイルをとっております。<br>
                </div>
            </div>

            <div class="contents-box">
                <div class="">
                    サービス形態
                </div>

                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Our Style
                    </div>
                </div>
                <div class="sub-container-description">
                    弊社グループでは主として以下の形態でサービスを提供させていただきます。
                </div>

                <div class="border-gray"></div>

                <div class="font-w700 font-navy">
                    継続支援サービス
                </div>
                <div class="m-top10">貴社のニーズを聞きながら、じっくりと時間をかけ、継続的に助言・指導をさせていただくサービスです。<br>
                    事例：
                </div>
                <ul class="advisory-services">
                    <li><span class="service-name">会計処理及び内部管理体制強化に関する継続的アドバイザリー業務</span></li>
                    <li><span class="service-name">連結親会社における連結財務諸表作成や連結子会社側での連結パッケージ入力支援業務</span></li>
                    <li><span class="service-name">IPO実現に向けた会計処理やJ-SOXに関するアドバイザリー業務</span></li>
                    <li><span class="service-name">海外進出に関するアドバイザリー業務</span></li>
                    <li><span class="service-name">人事報酬制度・評価制度構築支援業務</span></li>
                    <li><span class="service-name">システム構築支援業務</span></li>
                    <li><span class="service-name">税務顧問業務</span></li>
                    <li><span class="service-name">移転価格税制など国際税務に関するアドバイザリー業務</span></li>
                </ul>
                <div class="image-container-center m-top30">
                    <img src="/images/flow_1.jpg" alt="img_center">
                </div>

                <div class="border-gray"></div>

                <div class="font-w700 font-navy">
                    スポット支援サービス
                </div>
                <div class="m-top10">短期間で、貴社の特定の課題を解決するためのサービスです。<br>
                    事例：
                </div>
                <ul class="short-term-services">
                    <li><span class="service-name">財務デューデリジェンス、株価算定</span></li>
                    <li><span class="service-name">MBOアドバイザリー業務</span></li>
                    <li><span class="service-name">M&Aスキーム構築アドバイザリー業務</span></li>
                    <li><span class="service-name">M&A仲介</span></li>
                </ul>
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
@endsection
