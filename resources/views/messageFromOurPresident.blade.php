@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Corporate Profile</h1>
            <h1 class="main-title">会社案内</h1>
            <div class="contents-box">
                <div class="">
                    代表ご挨拶
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Message From Our President
                    </div>
                </div>

                <div class="">
                    「貴社の成長の鍵を握る戦略的パートナー」として2005年に創業して以来、私たちはクライアント様の様々な課題に対して、あたかも貴社の従業員のように、共に向き合い、共に汗を掻いて、共に解決することで、様々な経験を積み重ねてきました。<br>
                    <br>
                    これまで共に成長させていただいておりますこと、改めてまして深く感謝申し上げます。<br>
                    <br>
                    企業を取り巻く環境は、少子高齢化、デジタル、SDGsといったキーワードの元、大きく変化しております。<br>
                    <br>
                    このような中、企業活動は、毎日同じことを積み上げ、トラブルシューティングをしているだけではなく、永続的発展のために、通常業務以外の『イレギュラー』（付加価値向上、生産性向上といった継続的改善、新たな取組）に対しても経営資源を割いていく必要があります。<br>
                    <br>
                    一方、近年、いわゆる働き盛りの人口が減少し続けている中、女性の就労率や65歳以上就労率が上昇しているものの、ワーク・ライフバランスの実現、働き方改革、ダイバーシティ等企業に求められる働き手の環境には、ゆとりと幅と自由度が求められてきており、慢性的な人手不足の中、様々なイレギュラーへの対応は、ますます難しくなってきています。<br>
                    <br>
                    また、絶妙なバランスの元に成り立っている企業活動のフレームをリバランスする『イレギュラー』への取り組みは、組織の抵抗があったり、リソース（知識・マンパワー）が不足していたりと、企業にとって、非常にハードルが高いものです。<br>
                    <br>
                    私たちは、これまでの経験から、このハードルの超克には、スタビライザーとしての外部のプロフェッショナルを活用することが有用であると確信しています。<br>
                    <br>
                    私たちGCCにとっても環境変化への対応は、重要な課題です。ゆとりと自由度を保ちつつもイレギュラー活動に積極的に関わることで、知識と経験を積み上げるプロフェッショナル集団として、さらなる進化を目指して行きたいと考えております。<br>
                    <br>
                    今後も「貴社の戦略的パートナー」として、進化し続けるGCCを活用していただければ幸いです。

                    <div class="txt-right">
                        株式会社 グローバル・コーポレート・コンサルティング<br>
                        代表取締役社長 佐野　信行
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
