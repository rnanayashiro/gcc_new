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
                <p class="article-category">事業承継　Bussiness Succession</p>
                <h1 class="main-title">サービス内容</h1>
            </div>
            <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
            <div class="">
                <div class="">
                    弊社の支援内容（後継者への承継の場合）
                </div>
                <div class="font-w700 font-navy m-top30">
                    １.承継手法・組織再編の検討支援
                </div>
                <div class="">
                    一番シンプルな承継手法は、オーナー（個人）から後継者（個人）への株式譲渡の形態です。ただし、法人を利用する方がメリットが多い場合もあり、また事業承継対策を講じる中で、会社分割等の組織再編行為を利用し、現状の組織形態を変化させていく場合もあります。弊社では、専門的な観点から貴社にとって最適な形での承継手法及び再編手法を提案いたします。<br>
                    また、実行時における実務面からの支援も可能な体制となっております。
                </div>
                <div class="font-w700 font-navy m-top30">
                    ２.株式関係の検討支援及び必要資金関係の検討支援
                </div>
                <div class="">
                    上記１の検討をするに際しても、株価金額や発生するおそれのある各種税額（贈与税・所得税等）の試算が必須となります。従って、貴社の株式価値の算定はもちろんのこと、各種発生予定税金額の試算も行い、上記１の手法検討を、より現実的なものにいたします。
                </div>
                <div class="font-w700 font-navy m-top30">
                    ３.相続対策の検討
                </div>
                <div class="">
                    相続対策という視点からは、自社株式のみならず、オーナーの個人資産全体からの検討が有効となります。したがって、オーナーの個人財産の状況を提示していただけるのあれば、現状財産における相続税額のシミュレーション等により相続対策支援を行います。<br>
                    なお、トップページでも記載しておりますが、弊社の特徴としまして、一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策アドバイスを行っております。
                </div>
            </div>
            <div class="">
                <div class="">
                    1.弊社の支援内容（M&A活用による承継の場合）
                </div>
                <div class="font-w700 font-navy m-top30">
                    M&Aに精通した公認会計士・税理士による支援体制
                </div>
                <div class="">
                    事業承継及びM&Aアドバイザリーとしての経験豊かな公認会計士・税理士を中心としたコンサルタントがチームを編成し、スキーム検討から相手先からのデューデリジェンス対応、株価試算はもちろんのこと、スケジュール管理、実行時における必要書類作成支援、交渉同行支援、会計処理支援など、Ｍ＆Ａを活用した事業承継達成へと導く支援をいたします。<br>
                    <br>
                    具体的な流れに沿った支援事例（参考）
                </div>
                <div class="image-container-center m-top30">
                    <img src="images/MAsuk.png" alt="M&A活用による承継の支援事例" width="700px" height="">
                </div>
                <div class="font-w700 font-navy m-top30">
                    2.弊社スタッフによる実務作業の支援体制
                </div>
                <div class="">
                    事業承継のためのＭ＆Ａ準備作業を日常業務と同時進行で行うことは、経理部門等への多大な負荷が発生する場合があります。そこで、弊社では、コンサルティングスタッフが実務補助を行うことにより、現業部門が可能な限り日常業務に集中しつつ、Ｍ＆Ａ対応が達成できるサポート体制の提供も行っております。
                </div>
                <div class="font-w700 font-navy m-top30">
                    3.各種専門家との連携によるワンストップサービス
                </div>
                <div class="">
                    弊社では、ご要望に応じて、グループ内の税理士法人・社会保険労務士及び提携先の司法書士・不動産鑑定士・弁護士といったそれぞれの分野における専門家との連携をとり、ワンストップでの支援が可能です。Ｍ＆Ａのあらゆる局面での貴社のニーズに応じた適切な支援が可能な体制をとっております。
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@endsection
