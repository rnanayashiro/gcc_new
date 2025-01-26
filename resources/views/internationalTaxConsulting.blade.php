@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Service</h1>
            <h1 class="main-title">サービス</h1>
            <div class="contents-box">
                <div class="">
                    国際税務コンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        International Tax Consulting
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/gcctax.webp" alt="f_left" width="300" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        グループ会社である税理士法人GCCにおいて税務に関するサービスを提供しております。
                    </div>
                </div>
                <div class="border-gray"></div>
            </div>

            <div class="contents-box">
                <div class="">
                    国際税務コンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        International Tax Consulting
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/ser_top_img3.jpg" alt="f_left" width="650" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        企業のグローバリゼーションに伴い、昨今ますます重要性が増している「国際税務」に対応するため、アジア・北米を中心とした各国にアライアンス先を持ち、英語、中国語、韓国語、タイ語の堪能な専門スタッフが貴社のニーズにお応えします。
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_1.jpg" alt="国際税務コンサルティング">
                </div>
                <div class="border-gray"></div>
            </div>

            <div class="contents-box">
                <div class="font-w700 font-navy">
                    国際税務コンサルティング
                </div>
                <div class="">
                    国際税務には租税条約・移転価格税制・タックスヘイブン対策税制・過少資本税制・外国税額控除・海外赴任者にかかる給与所得といった論点がありますが、その対応のためには、いずれも専門的な知識が必要であり、現地での最新の情報を入手しながら事前に検討する必要があります。<br>
                    <br>
                    弊社グループでは、海外に業務提携している事務所があり、また語学の堪能な専門スタッフが貴社のニーズに迅速に対応いたします。
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy">
                    移転価格コンサルティング
                </div>
                <div class="">
                    企業が国際化してくると、海外子会社や海外業務提携企業との取引が増加してきます。しかし日本だけでなく海外においても適正な価格での取引であるかの調査は必ず行われます。つまり、国内だけでなく海外の税法や税務当局を意識した取引価格設定を行う必要があります。弊社グループでは、移転価格対応支援業務として、海外子会社や海外業務提携企業との全ての取引を確認したうえで、取引全ての資金、費用、リスク負担を整理したうえで、両者が得ている利益を説明するため必要に応じて下記のフェーズに分けてサービスを提供いたします。
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/image05.gif" alt="国際税務コンサルティング">
                </div>

                <div class="font-w700 font-navy">
                    国際税務に係るショートレビュー
                </div>
                <div class="">
                    国際税務・海外拠点の管理体制に関して、短期調査でリスクや問題点とその解決の方向性についてまとめたレポートを、貴社のニーズに併せた形で作成します。<br>
                    <br>
                    ショートレビュー具体例<br>
                    <br>
                    ・国際税務に関するリスク項目の列挙と課題取り組みの優先順位付け<br>
                    ・過去税務当局から指摘された事項に対する対応策例示<br>
                    ・親会社内の規程・文書・ルールに関する課題のレポート<br>
                    ・関係会社間取引価格算定上の課題のレポート
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy">
                    海外子会社財務レビューコンサルティング
                </div>
                <div class="">
                    海外拠点では経営管理や総務経理業務に十分な人員を割くことができず、事業計画及び予算の立案、財務経理上の問題点把握、今期決算内容の把握などが十分できないことがあります。また、言葉の問題から親会社報告が十分に出来なかったり、報告に多大な時間や労力を要する場合があります。弊社グループでは、海外子会社等への照会だけでなく、直接現地法人を訪問して状況把握を行ったり、助言や指導を通じて海外拠点の業務改善を促すこともさせて頂きます。
                </div>
                <div class="border-gray"></div>
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
