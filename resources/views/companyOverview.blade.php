@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Corporate Overview</h1>
            <h1 class="main-title">会社概要</h1>
            <div class="contents-box">
                <div class="">
                    株式会社グローバル・コーポレート・コンサルティング
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Accounting & International Consulting Firm
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        本社
                    </div>
                    <div class="sub-container-ritem">
                        大阪市中央区安土町2丁目3-13<br>
                        大阪国際ビルディング20F
                    </div>
                </div>

                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem">
                        代表取締役
                    </div>
                    <div class="sub-container-ritem">
                        佐野 信行　（社長）
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        取締役
                    </div>
                    <div class="sub-container-ritem">
                        下川 浩司　（会長）
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        取締役
                    </div>
                    <div class="sub-container-ritem">
                        五島 元
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        取締役
                    </div>
                    <div class="sub-container-ritem">
                        野村 光
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        取締役
                    </div>
                    <div class="sub-container-ritem">
                        今野 貴史
                    </div>
                </div>

                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem">
                        事業内容
                    </div>
                    <div class="sub-container-ritem">
                        会計・経営に関する総合コンサルティング事業
                    </div>
                </div>
            </div>

            <div class="contents-box">
                <div class="">
                    税理士法人ＧＣＣ
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Accounting & Taxation Professional Firm
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        事務所所在地
                    </div>
                    <div class="sub-container-ritem">
                        大阪市中央区安土町2丁目3-13 大阪国際ビルディング
                    </div>
                </div>

                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem">
                        代表社員
                    </div>
                    <div class="sub-container-ritem">
                        佐野 信行
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        代表社員
                    </div>
                    <div class="sub-container-ritem">
                        阪田 健司
                    </div>
                </div>

                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem">
                        事業内容
                    </div>
                    <div class="sub-container-ritem">
                        国際税務、事業承継、Ｍ＆Ａ時の税務
                        デュー デリジェンス
                    </div>
                </div>
            </div>

            <div class="contents-box">
                <div class="">
                    総人員数
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Total Employees
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        公認会計士
                    </div>
                    <div class="sub-container-ritem">
                        9名
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        税理士
                    </div>
                    <div class="sub-container-ritem">
                        6名
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        社会保険労務士
                    </div>
                    <div class="sub-container-ritem">
                        2名
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        不動産鑑定士
                    </div>
                    <div class="sub-container-ritem">
                        1名
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        コンサルティングスタッフ
                    </div>
                    <div class="sub-container-ritem">
                        45名
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem">
                        計
                    </div>
                    <div class="sub-container-ritem">
                        63名
                    </div>
                    <div class="sub-container-date">
                        2024年3月現在
                    </div>
                </div>
            </div>

            <div class="contents-box">
                <div class="">
                    所在地
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Access
                    </div>
                </div>
                <div class="sub-container-add">
                    <div class="">
                        〒541-0052
                    </div>
                    <div class="">
                        大阪市中央区安土町2丁目3-13 大阪国際ビルディング20F
                    </div>
                    <div class="">
                        TEL 06-6264-5177
                    </div>
                </div>
                <img src="images/gccmap202209.png" alt="map_right">
                <img src="images/ser_top_img2.jpg" alt="map_left">
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
