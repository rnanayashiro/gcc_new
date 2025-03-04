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
                <p class="article-category">サービス　Services</p>
                <h1 class="main-title">Ｍ＆Ａコンサルティング</h1>
            </div>
            <div class="">
            <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
                <div class=""></div>
                <div class="image-text-block">
                    <img src="images/ser_top_img2.jpg" alt="f_left" class="image-block-flex">
                    <div class="text-block-flex">
                        GCCは、大阪にヘッドオフィスを構える公認会計士・税理士を中心とする会計コンサルティングファームです。<br>
                        財務調査などの「デューデリジェンス業務」や株価算定などの「バリュエーション業務」はもちろんのこと、会計・税務面を中心にファイナンス・スキームの検討にも対応いたします。
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    M&Aコンサルティング
                </div>
                <div class="">
                    企業の合併･買収は、その目的は様々ですが国内・国外の競争力の強化、事業拡大等に用いられ、その件数及び買収規模は年々増加する傾向にあります。国内では、中小企業の後継者問題の解決にも用いられています。<br>
                    弊社グループでは、Ｍ＆Ａの経験豊かな公認会計士がファイナンス・スキームの提案からクロージング及びそれらに関わる会計処理・税務処理までをサポートしております。
                </div>
                <div class="support-cases">
                    <ul>
                        <li>【統合スキーム】<br>吸収合併・新設合併・株式交換・株式移転</li>
                        <li>【株式取得スキーム】<br>発行済株式の譲受・新株引受・公開買付・MBO・LBO・EBO・事業譲受</li>
                        <li>【分割スキーム】<br>吸収分割・新設分割</li>
                    </ul>
                </div>
            </div>
            <div class="transition-button-container">
                <a href="{{ route('duediligence') }}" class="transition-button">DD詳細はこち</a>
            </div>
            <div class="">
                <div class="">
                    M&A仲介・アドバイザリー
                </div>
                <div class="">
                    最近では、中小企業でもさらなる企業拡大・企業価値向上手法や事業承継手法としてＭ＆Ａが一般的な時代になってきております。<br>
                    弊社グループでは、売り手・買い手の選定・仲介、およびFA契約による交渉・実行支援のニーズにお応えします。
                </div>
            </div>
            <div class="">
                <div class="">
                    デューデリジェンス
                </div>
                <div class="">
                    Ｍ＆Ａを行う前提として、対象企業が抱えているリスク・実態を十分に把握することが必要です。<br>
                    弊社グループでは、公認会計士・税理士・社会保険労務士・弁護士により、対象企業の財務・税務・労務・法務に関する効率的かつ有効なデューデリジェンスをワンストップで実施することで、貴社のニーズにお応えします。
                </div>
            </div>
            <div class="transition-button-container">
                <a href="{{ route('duediligence') }}" class="transition-button">DD詳細はこち</a>
            </div>
            <div class="">
                <div class="">
                    バリュエーション（株価算定）
                </div>
                <div class="">
                    Ｍ＆Ａを行うためには、対象企業またはその事業を評価する必要があります。<br>
                    弊社グループでは、より適正なバリュエーション（株価算定）を行うために、公認会計士・税理士等による財務デューデリジェンスと同時に、企業価値または事業価値の評価を行っております。
                </div>
            </div>
            <div class="">
                <div class="">
                    企業再編・組織再編コンサルティング
                </div>
                <div class="">
                    企業買収を繰り返した結果、グループ企業数が増大し連結ベースでの事業規模が拡大したものの、各子会社への統制が十分にとれず、多数の赤字企業を抱える状況に陥っている会社がよく見受けられます。これらを解消すべく、グループ経営を効率的に行いガバナンスを働かせるために、グループ内での再編（組織再編）を検討・実行することは一つの有効な手段となりえます。<br>
                    組織再編は、法律面、会計面、税務面で複雑な規定・基準があり、十分な検討を行わなければ不測の損害を被る可能性があります。また、事業戦略に沿った形での再編、管理体制の整備を行わなければ当初の目的が果たせない結果となる可能性もあります。<br>
                    <br>
                    組織再編には様々な手法（ホールディングス化・会社分割・合併等）がありますが、あらゆる角度から検討するために専門家の活用が重要であると考えられます。<br>
                    <br>
                    弊社グループでは、スキームの検討から実行支援及び組織再編後のフォローに至るまで、ワンストップでのサービスを展開しております。
                </div>
            </div>
            <div class="">
                <div class="">
                    事業再生コンサルティング
                </div>
                <div class="">
                    過剰債務に陥っている会社が、コア事業に関して十分な競争力を持っている場合には、これを過剰債務の原因となっている不採算部門から切り離すことにより競争力を回復させ事業を再生することが可能です。最近では、会社分割法、サービサー法など事業再生のための法制度が整ってきており、民事再生・会社更生法を適用する前にできることはたくさんあります。<br>
                    弊社グループでは、金融機関の交渉から事業再生スキームの提案まで経験豊かな公認会計士、アライアンス先の弁護士、司法書士等とともにワンストップで対応する体制を築いております。
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
