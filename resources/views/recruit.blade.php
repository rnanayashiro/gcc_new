@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Recruitment Information</h1>
            <h1 class="main-title">採用情報</h1>
            <div class="contents-box">
                <div class="">
                    募集要領
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Recruitment Guidelines
                    </div>
                </div>

                <div class="">
                    グローバル・コーポレート・コンサルティングは公認会計士、税理士等の専門家が多数在籍するコンサルティングファームです。<br>
                    近年の激しい経営環境の変化に伴い、多様化・高度化していくクライアントのニーズにより高いレベルでお応えするため、当社では幅広く深い知識を携えた専門家を中心としたチームにより、「会計・税務・経営」の観点から様々なコンサルティング業務を行っています。<br>
                    当社が手掛ける分野は会計を中心に、M&Aや業務改善、海外業務、システム、人事、株式公開など様々であり、クライアントも上場企業から中小企業まで様々な企業の会計や経営課題解決に臨みます。<br>
                    クライアントからのリピート依頼が多い当社は一方的な改善や提案・指導ではなく、クライアントと一緒に考え、共に汗を流すことを大切にしています。<br>
                    <br>
                    当社で、自分を成長させたい方、将来「プロフェッショナル」になりたい方のご応募を心よりお待ちしております。
                </div>
            </div>

            <div class="contents-box">
                <div class="">
                    募集職種
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Job Openings
                    </div>
                </div>

                <div class="">
                    1.税務スタッフ<br>
                    2.会計コンサルティングスタッフ（現在募集しておりません）<br>
                    3.海外コンサルティングスタッフ（現在募集しておりません）<br>
                </div>
                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-top30 m-bottom10">
                    税務スタッフ
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        職種
                    </div>
                    <div class="sub-container-ritem">
                        税務スタッフ
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        募集の背景
                    </div>
                    <div class="sub-container-ritem">
                        若い力を活用した組織的対応力の強化に向けた募集
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        職務内容
                    </div>
                    <div class="sub-container-ritem">
                        申告書等の税務関係書類作成・月次訪問
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        就業環境
                    </div>
                    <div class="sub-container-ritem">
                        入社後は主力メンバーとしていくつかのクライアントを担当していただきます。<br>
                        ※単独での担当は設けず、複数名でクライアントを担当するため、業務負荷が過度になることはありません。<br>
                        希望者にはコンサルティング部隊と連携して国内のコンサルティング業務、国際税務、<br>
                        海外でのコンサルティングなどにもチャレンジできを用意しています。
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        応募資格
                    </div>
                    <div class="sub-container-ritem">
                        22歳～40歳まで<br>
                        【必須条件】<br>
                        日商簿記検定2級以上 あるいは税理士試験受験経験者（合否不問ですが、税理士科目合格者は尚良し）<br>
                        法人税・消費税・所得税等の申告書作成経験または作成補助経験がある方<br>
                        【歓迎】以下の業務経験のある方<br>
                        法定調書作成<br>
                        年末調整関係の資料作成業務<br>
                        決算整理仕訳作成・資料整理等の決算業務<br>
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        勤務地
                    </div>
                    <div class="sub-container-ritem">
                        税理士法人GCC 大阪本社
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        交通手段
                    </div>
                    <div class="sub-container-ritem">
                        「本町駅」徒歩5分、「堺筋本町駅」徒歩2分
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        勤務時間
                    </div>
                    <div class="sub-container-ritem">
                        以下から選択制<br>
                        ① 8:00 ～ 17:00<br>
                        ② 8:30 ～ 17:30<br>
                        ③ 9:00 ～ 18:00<br>
                        ④ 9:30 ～ 18:30<br>
                        ※残業をお願いすることもありますが、業務効率を追求する考えの当社は無駄な残業を良しとしていません。
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        給与
                    </div>
                    <div class="sub-container-ritem">
                        月給制 ： 月給25万円～（合格している科目、能力、経験により優遇）<br>
                        ※試用期間3ヶ月あり
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        賞与
                    </div>
                    <div class="sub-container-ritem">
                        決算賞与（年１回 会社業績に応じて原則１か月分以上）
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        休日・休暇
                    </div>
                    <div class="sub-container-ritem">
                        原則週休2日制（土日）、祝祭日・年末年始休暇、有給、産休・育休
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        待遇・福利厚生
                    </div>
                    <div class="sub-container-ritem">
                        交通費全額支給、社会保険制度有、昇給有<br>
                        各種手当（残業手当、出張手当、職務手当）<br>
                        出勤日数は勉強時間を考慮し、要相談可能<br>
                        海外慰安旅行（実績：ベトナム、ハワイ、グアム、韓国など）
                    </div>
                </div>

                <div class="border-gray"></div>

                <div class="font-w700 font-navy m-top30 m-bottom10">
                    海外コンサルティングスタッフ
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        職種
                    </div>
                    <div class="sub-container-ritem">
                        海外コンサルティングスタッフ
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        仕事内容
                    </div>
                    <div class="sub-container-ritem">
                        海外関連のコンサルティング業務補助、弊社タイ現地子会社との情報連携業務など
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        就業環境
                    </div>
                    <div class="sub-container-ritem">
                        入社後はまずコンサルティングスタッフとして、先輩や上司と共に仕事をして流れを習得。<br>
                        経験値も考慮の上、成長レベルに合わせて難易度の高い仕事をお任せします。
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem160">
                        応募資格
                    </div>
                    <div class="sub-container-ritem">
                        22歳～40歳まで、PCスキル必須（Word・Excel）、やる気のある方。<br>
                        会計や経理の知識が少しでもある方であればコンサルティング未経験でも大歓迎<br>
                        具体的には、下記のいずれかに該当する方歓迎<br>
                        ・英語や他の外国語が流暢な方<br>
                        ・米国CPA試験合格者<br>
                        ・米国CPA受験経験者<br>
                        ・日商簿記2級以上<br>
                        ・会計事務所や金融機関・企業での経理、財務業務経験者<br>
                        ・タイランドに興味がある方
                    </div>
                </div>
            </div>
            <div class="contents-box">
                <div class="">
                    採用の流れ
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Recruitment Process
                    </div>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/img.jpg" alt="img_center">
                </div>
                <div class="m-top30">
                    ※1）履歴書（写真付）及び職務経歴書を下記住所まで送付して下さい。<br>
                    <br>
                    〒541-0052 大阪市中央区安土町2丁目3-13 大阪国際ビルディング20F<br>
                    株式会社グローバル・コーポレート・コンサルティング 採用担当者 宛
                </div>

            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
