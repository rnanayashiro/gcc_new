@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/accounting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="accounting-consulting-contents">
            <h1 class="main-title">会社概要</h1>
            <div class="">
                <div class="">
                    <div class="">
                        <div class="">
                            株式会社グローバル・コーポレート・コンサルティング
                        </div>
                        <div class="">
                            <div class="">
                                本社
                            </div>
                            <div class="">
                                大阪市中央区安土町2丁目3-13
                                大阪国際ビルディング20F
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="">
                                    代表取締役
                                </div>
                                <div class="">
                                    佐野 信行　（社長）
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    取締役
                                </div>
                                <div class="">
                                    下川 浩司　（会長）
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    取締役
                                </div>
                                <div class="">
                                    五島 元
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    取締役
                                </div>
                                <div class="">
                                    野村 光
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    取締役
                                </div>
                                <div class="">
                                    今野 貴史
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                事業内容
                            </div>
                            <div class="">
                                会計・経営に関する総合コンサルティング事業
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        税理士法人ＧＣＣ
                    </div>
                    <div class="">
                        <div class="">
                            <div class="">
                                事務所所在地
                            </div>
                            <div class="">
                                大阪市中央区安土町2丁目3-13 大阪国際ビルディング
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                代表社員
                            </div>
                            <div class="">
                                佐野 信行
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                代表社員
                            </div>
                            <div class="">
                                阪田 健司
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                事業内容
                            </div>
                            <div class="">
                                国際税務、事業承継、Ｍ＆Ａ時の税務
                                デュー デリジェンス
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="">
                        総人員数
                    </div>
                    <div class="">
                        <div class="">
                            グローバルグループ
                            <div class="">
                                <div class="">
                                    公認会計士
                                </div>
                                <div class="">
                                    ・・・
                                </div>
                                <div class="">
                                    9名
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    税理士
                                </div>
                                <div class="">
                                    ・・・
                                </div>
                                <div class="">
                                    6名
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    社会保険労務士
                                </div>
                                <div class="">
                                    ・・・
                                </div>
                                <div class="">
                                    2名
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    不動産鑑定士
                                </div>
                                <div class="">
                                    ・・・
                                </div>
                                <div class="">
                                    1名
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    コンサルティングスタッフ
                                </div>
                                <div class="">
                                    ・・・
                                </div>
                                <div class="">
                                    45名
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    計
                                </div>
                                <div class="">
                                </div>
                                <div class="">
                                    63名
                                </div>
                            </div>
                            <div class="">
                                2024年3月現在
                            </div>
                        </div>
                    </div>
                </div>


                <div class="">
                    <div class="">
                        所在地
                    </div>
                    <div class="">
                        <div class="">
                            〒541-0052
                        </div>
                        <div class="">
                            大阪市中央区安土町2丁目3-13 大阪国際ビルディング20F
                        </div>
                        <div class="">
                            TEL : 06-6264-5177
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
