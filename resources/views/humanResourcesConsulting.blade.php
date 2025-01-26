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
                    人事コンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Human Resources Consulting
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/ser_top_img7.jpg" alt="f_left" width="650" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        公認会計士、税理士、社会保険労務士など各分野の専門家による、横断的な人事、組織、人材に関するコンサルティングを提供いたします。 </div>
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    報酬制度・評価制度に関するコンサルティング
                </div>
                <div class="">
                    会社経営と人事制度は連動することによりその効果を発揮するものです。経営戦略や事業戦略の中で人事戦略が存在すべきであり、それを会社の具体的な仕組みに落し込んだものが人事制度になります。効率的な組織を整備し、責任と権限を明確にしたとしても、仕事の内容と人事評価や報酬が整合していなければ、結果的に効率的な経営を行うことは出来ません。<br>
                    一般的に「人事制度」は、「評価制度」、「報酬（給与・賞与）制度」、「採用制度」、「教育制度」の4つの柱からなると考えますが、弊社グループでは、社会保険労務士と公認会計士とが中心となり、貴社の実態に合わせた成長のエンジンとしての人事評価制度や報酬制度の構築を支援いたします。
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    労務関係調査
                </div>
                <div class="">
                    株式公開会社は当然のことながら、株式公開を目指す会社においても法律で定められた労働関係の規則は遵守する必要があります。労働関係の法律は随時改正されているため、専門家による定期的なチェックが必要です。
                    弊社グループでは、専門家である社会保険労務士が貴社の労務関係について法律・規則の遵守が行われているかを短期間で調査し、継続的な改善のためのアドバイスを行っております。
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/ser_top_img7_2.jpg" alt="f_left" width="500" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        グループ会社である株式会社グローバル・ヒューマン・コミュニケーションズでは、経理・総務・人事等の管理部門を支援するサービスを提供しております。
                    </div>
                </div>
                <div class="border-gray"></div>
            </div>
    </main>
    <!-- /.main -->
@endsection
