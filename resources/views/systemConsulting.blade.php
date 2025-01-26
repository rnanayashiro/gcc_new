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
                    システムコンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        System Consulting
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/ser_top_img5.jpg" alt="f_left" width="650" height="auto">
                    </div>
                    <div class="sub-container-ritem">
                        業務・会計・Ｊ－ＳＯＸを熟知し、システム開発における豊富なコーディネートの経験を持つ公認会計士が販売・会計・財務システムの構築時に、ベンダー任せのシステム構築とならぬよう、貴社の立場にたったアドバイスを行います。
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-bottom10">
                    継続支援サービス
                </div>
                <div class="">
                    企業が効率的な経営を行っていく中で、ＩＴシステムの構築はその根幹であり、システムの導入・改変には相当慎重な対応が必要です。システム上で生成された数値は最終的には、経営管理情報・財務諸表に結びつきます。そのため、ＩＴシステムを構築・改変するに当たっては、システム・業務・会計すべてに精通した者が担当することが非常に重要となってきます。しかし、一般的にシステムベンダーのエンジニアは業務･会計に精通しているものが少なく、ベンダー任せのシステム構築は、最終的に企業に不測の損害をもたらす可能性があります。また、上場会社のシステムの構築にあたっては、Ｊ-ＳＯＸへの対応も視野に入れる必要があります。<br>
                    <br>
                    弊社グループでは、例えば以下の手順でコンサルティングを行なうことにより、貴社にとって最適なシステムの構築を支援いたします。
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img_4.jpg" alt="img_center">
                </div>
                <div class="border-gray"></div>

                <div class="image-container-center m-top30">
                    <img src="/images/img_3.jpg" alt="img_center">
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
