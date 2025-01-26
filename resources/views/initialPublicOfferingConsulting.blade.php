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
                    株式公開コンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Initial Public Offering Consulting
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/ser_top_img4.jpg" alt="f_left" width="650" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        弊社では、株式公開（IPO）へ向けて上場に耐えうる会計処理の指導、内部管理体制の強化、申請資料作成等の指導・支援を行っております。
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    ショートレビュー
                </div>
                <div class="">
                    株式公開にあっては、規程類の整備や公開に耐えうる内部管理体制の構築が必要になります。<br>
                    そこでまず現状把握のためのショートレビュー（予備調査）を行い、株式公開の障害となる課題を洗い出し、改善すべき事項を報告いたします。 </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    Ｊ-ＳＯＸコンサルティング
                </div>
                <div class="">
                    内部統制の評価・監査（いわゆる「J-SOX」）に対応するための業務の見直し・文書化には相当な時間を要します。その対応には、以下の作業が必要です。<br>
                    <br>
                    1.実際の業務の流れを確認し、これを見直すことで内部統制の整備を行うこと。<br>
                    2.業務フローチャート・リスクコントロールマトリックス等の必要書類を作成すること。<br>
                    3.実際に運用し、内部統制が有効であることを継続的に評価すること。<br>
                    これらに対応するためには、社内の人員で専任的な内部統制プロジェクトチームを結成し、全社的にも意識改革を行うことが重要となります。内部統制の評価が上場会社に必要不可欠で継続的な取組みになることを考えると、最終的には社内の人材のみで取組むことのできる体制作りが望まれます。そのような人材を早期に育成するためには、外部専門家を利用することが非常に効率的かつ有効な手段です。<br>
                    弊社グループでは、J-SOX支援経験のある公認会計士を中心として、内部統制の評価制度の構築を支援いたします。
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    申請書類作成指導・支援
                </div>
                <div class="">
                    上場申請書類には、有価証券報告書とほぼ同内容のⅠの部と会社の事業内容等について記載するⅡの部があります。証券会社・証券取引所の審査は、会社が提出したこれらの資料に基づいて行われるので、株式公開実現のため非常に重要な作業といえます。特に時間を要するⅡの部の作成を効率的に行うためには、全ての事業部間さらには子会社との連携が必要です。<br>
                    <br>
                    弊社グループでは、長年上場準備に携わってきた公認会計士が指導し、より効率よく申請書類を作成できるように情報の整理を行い、これが更新される体制の構築を支援いたします。
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    資本政策策定支援
                </div>
                <div class="">
                    資本政策は、株式公開前後の資金調達、安定株主対策、インセンティブプランを盛り込んだものであり、貴社の生命線ともなりうるものです。<br>
                    <br>
                    弊社グループでは、公認会計士・税理士が貴社の将来を見据えた資本政策の策定を支援いたします。ベンチャーキャピタル（VC）や証券会社等が作成してきた資本政策であっても一度弊社のレビューを受けることを是非お勧めいたします。
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    事業計画策定支援
                </div>
                <div class="">
                    事業計画は、貴社の目指すべき事業の将来像を客観的に示す指針であり、資本政策のベースとなる重要なものです。会社は月次で計画と実績との対比を行い、その分析結果を事業計画に反映、更新し続けることで経営管理の有用なツールとして利用することができます。また、事業計画は上場申請時における最重要の審査項目のひとつであり、上場後のディスクローズに耐えうる正確性が求められます。<br>
                    <br>
                    弊社グループでは、貴社の経営に資するツールとなるよう、より精度の高い事業計画の策定と予算実績管理によるタイムリーな経営活動の修正を行なえる体制の構築を支援いたします。
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_2.jpg" alt="ディスクローズ体制の整備・構築支援">
                </div>

            </div>
    </main>
    <!-- /.main -->
@endsection
