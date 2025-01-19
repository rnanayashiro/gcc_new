@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Group Introduction</h1>
            <h1 class="main-title">グループ紹介</h1>
            <div class="contents-box">
                <div class="">
                    グローバルグループ
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Global Group
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/group_1.jpg" alt="（株）グローバル・コーポレート・コンサルティング">
                    </div>
                    <div class="sub-container-ritem">
                        弊社を中心としてAccounting ＆Taxation Professional Groupを構築しており、<br>
                        グローバルグループ各社においても以下のような様々なサービスを提供しております。 </div>
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="/images/gcct.svg" alt="GCC SERVICES (THAILAND) CO., LTD. Logo" width="160"
                            height="124">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                <a href="https://asia.g-c-c.jp/jp/" target="_blank" rel="noopener">GCC SERVICES (THAILAND)
                                    CO., LTD.</a>
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">Managing Director</div>
                            <div class="sub-container-rtem">今野 貴史 （日本国公認会計士）</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                タイでの現地法人等設立支援、会計・税務・法務支援、<br>
                                コンサルティング業務、マーケティングリサーチ
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">所在地</div>
                            <div class="sub-container-rtem">
                                952 Ramaland Building, 13 floor, Room No.47, Rama 4 Road,Suriyawong, <br>
                                Bangrak, Bangkok 10500 Thailand
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-top30 font-w700">タイのJPAC Group ジャパンデスクのお知らせ</div>
                <div class="sub-container-description">
                    弊社メンバーファームのタイ法人GCC SERVICES (THAILAND) CO., LTD.は、<br>
                    タイ国バンコク都にあるJPAC Groupと共同で2017年よりJPAC Groupジャパンデスクを開設しております。<br>
                    ジャパンデスクでは、メンバーに大手監査法人出身のタイ人会計士やタイ人弁護士がチームとなり、日系クライアント様が抱える会計・税務・法務に関する問題から、親会社への財務報告プロセス効率化、国際税務、国際M&Aのフィナンシャルアドバイザリー、デューデリジェンスなど、総合的なコンサルティングのニーズまでワンストップでソリューションをご提供いたします。<br>
                    日本人コーディネーターが常勤し、弊社水準でのコンサルティング、日本語でのご相談・レポーティングに対応いたします。<br>
                    <br>
                    詳しい内容は下記までお問い合わせください。
                </div>
                <div class="m-top30 font-w700">JPAC Group Japan Desk</div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        電話（日本語）
                    </div>
                    <div class="sub-container-ritem">
                        +66-86-987-8277
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        Eメール
                    </div>
                    <div class="sub-container-ritem">
                        takahashi@jpac.co.th
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        住所
                    </div>
                    <div class="sub-container-ritem">
                        36 Soi Thakam 4st, Rama 2 Road Samaedum, Bangkhuntian, Bangkok 10150 Thailand
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        URL
                    </div>
                    <div class="sub-container-ritem">
                        <a href="https://www.jpac-japandesk.com/" target="_blank"
                            rel="noopener">https://www.jpac-japandesk.com/</a>
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="images/JPAC06112017.jpg" alt="JPAC Group Japan Desk">
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="/images/AGS-Group_translate.png" alt="AGS(A.I.Global Sun Partners Joint Stock Company)"
                            style="width: 200px; height: auto;">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                <a href="http://ags-vn.com/?lang=ja">ＡＧＳ&nbsp;(A.I.Global Sun Partners Joint Stock
                                    Company)</a>
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">代表</div>
                            <div class="sub-container-rtem">石川　幸</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                ベトナム現地での会計・現地法人等設立支援・コンサルティング業務
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">所在地</div>
                            <div class="sub-container-rtem">
                                ハノイ事務所：6F Hoang Sam Building, 260-262 Ba Trieu Str.,<br>
                                Hai Ba Trung Dist., Hanoi
                            </div>
                        </div>
                        <div class="sub-container-info-item m-top30">
                            あずさ監査法人にて企業の法定監査業務に従事。<br>
                            多数の事業再生支援を経験するとともに、財務調査、株価算定、J-SOX支援などの業務も行なっている。<br>
                            また、諸外国の会計・税務にも精通しており、海外事業の組織再編業務等も手がけている。<br>
                            慶応義塾大学経済学部卒業（1998年）公認会計士（2002年登録）税理士（2005年登録）
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/group_5.jpg" alt="株式会社グローバル･ヒューマン･コミュニケーションズ">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                株式会社グローバル･ヒューマン･コミュニケーションズ
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">代表取締役</div>
                            <div class="sub-container-rtem">佐野 信行 （公認会計士）</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                経理、会計、財務、労務の業務支援・補助
                                人事コンサルティング・人材育成・紹介
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/group_2.jpg" alt="株式会社グローバル･マネジメント･コンサルティング">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                株式会社グローバル･マネジメント･コンサルティング
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">代表取締役</div>
                            <div class="sub-container-rtem">今野 貴史 （公認会計士）</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                海外進出コンサルティング、事業再生、Ｍ＆Ａコンサルティング
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/group_3.jpg" alt="株式会社グローバル･システム･コンサルティング">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                株式会社グローバル･システム･コンサルティング
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">代表取締役</div>
                            <div class="sub-container-rtem">佐野 信行 （公認会計士）</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                会計・財務システムコンサルティング
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>

                <div class="sub-container">
                    <div class="sub-container-litem-img">
                        <img src="images/group_4.jpg" alt="株式会社グローバル･アシスト･コンサルティング">
                    </div>
                    <div class="sub-container-info">
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">会社名</div>
                            <div class="sub-container-rtem">
                                株式会社グローバル･アシスト･コンサルティング
                            </div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">代表取締役</div>
                            <div class="sub-container-rtem">野村 光 （公認会計士）</div>
                        </div>
                        <div class="sub-container-info-item">
                            <div class="sub-container-litem160">事業内容</div>
                            <div class="sub-container-rtem">
                                Ｍ＆Ａ・組織再編コンサルティング、事業計画策定
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-gray"></div>
            </div>
    </main>
    <!-- /.main -->
@endsection
