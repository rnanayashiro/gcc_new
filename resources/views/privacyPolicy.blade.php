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
                <p class="article-category">プライバシーポリシー　Privacy Policy</p>
                <h1 class="main-title">プライバシーポリシー</h1>
            </div>
            <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
            <div class="">
                <div class="">
                    個人情報の取り組みとオンライン・プライバシーポリシーについて
                </div>
                <div class="">
                    グローバルグループのサイト（以下「当サイト」といいます。）へのアクセスおよび当サイトの使用にあたり、以下の「個人情報護の取り組み」と「オンライン・プライバシーポリシー」をお読み頂くようお願いいたします。<br>
                    ※「グローバルグループ」とは株式会社グローバル・コーポレート・コンサルティング及びその関連会社を指します。
                </div>
            </div>
            <div class="">
                <div class="">
                    個人情報の取り組み
                </div>
                <div class="">
                    株式会社グローバル・コーポレート・コンサルティング、税理士法人GCC、GCC
                    SERVICES（THAILAND）CO.,LTD、（以下、各社にて「当社」といいます。）は、個人情報の保護に関する法律（以下「個人情報保護法」または「法」といいます。）における個人報取扱事業者として、
                    個人情報保護の必要性及び重要性を認識し、個人情報に関して適用される法規律、指針その他の規範を順守し個人情報の保護に努めます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        1．個人情報の利用目的
                    </div>
                    当社のサービス提供（独立性、コンフリクト等の確認手続を含みます。）<br>
                    当社のニュースレターやメールマガジン（当サイトや電子メール等によるものを含みます。）の配信・送付<br>
                    当社の各種セミナーやイベント等のご案内の配信・送付及びそれらの運営<br>
                    当社のサービスに関する情報、書籍、挨拶状等の配信・送付<br>
                    アンケート、調査、統計等の実施<br>
                    各種お問い合わせへの対応<br>
                    社員・職員等（役員、その他、名称等の如何によらず当社で業務に従事する従業者を含みます。）の採用選考及び採用後人事管理<br>
                    法令遵守・品質管理等の必要性に基づく総合的なリスク管理。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        2．個人情報の共同利用
                    </div>
                    当社は、獲得した個人情報を、上記目的の範囲内において、グローバル・コーポレート・コンサルティングのグループ法人間で共同利用させていただくことがあります。<br>
                    <br>
                    -1.共同利用する個人情報<br>
                    氏名、肩書・役職、勤務先・所属、年齢、住所・居所、電子メールアドレス、電話番号、ファックス番号、その他、共同用者がサービス・業務に関連して入手した個人情報。<br>
                    <br>
                    -2.共同利用者の範囲<br>
                    グローバルグループにおける関連会社（会社案内<a href="../company/group">「グループ紹介」</a>をご参照ください。）<br>
                    <br>
                    -3.共同利用者の利用目的<br>
                    上記「2.個人情報の利用目的」に定めた利用目的に準じます。<br>
                    <br>
                    -4.共同利用する個人データの管理責任者<br>
                    株式会社グローバル・コーポレート・コンサルティング<br>
                    連絡先：お問い合わせフォームをご覧ください。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        3．第三者提供
                    </div>
                    当社は、次に掲げる場合を除いて、あらかじめユーザーの同意を得ることなく、第三者に個人情報を提供することはありせん。ただし、個人情報保護法その他の法令で認められる場合を除きます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        4．個人情報の管理について
                    </div>
                    当社は、個人情報を安全に管理し、個人情報の紛失、破壊、改ざん及び漏えいを防止するため、不正アクセス、コンピュタウィルス等に対する適正な情報セキュリティ対策を講じます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        5．保有個人データの開示等の求めに応じる手続
                    </div>
                    当社は、その保有個人データについて、個人情報保護法に基づく開示・訂正等を求められる場合には、法令にのっとり適に対応いたします。<br>
                    手続：下記受付窓口あてにお問い合わせください。具体的な方法について個別にご案内申し上げます。<br>
                    当社の受付窓口：お問い合わせフォームをご覧ください。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        6．苦情・お問い合わせ
                    </div>
                    当社の個人情報の取扱いについて苦情のお申し出やご意見・ご質問がありましたら、お問い合わせフォームよりご連絡を願いいたします。<br>
                    ※なお、共同利用の場合を除いては、個人情報の管理はグローバル・コーポレート・コンサルティングのグループ法人各々その責任において行うものであり、
                    グローバル・コーポレート・コンサルティングのグループ法人に対して、個別具体事情なく責任を連帯させるものではありません。
                </div>
            </div>
            <div class="">
                <div class="">
                    オンライン・プライバシーポリシー
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        1.基本的考え方
                    </div>
                    グローバル・コーポレート・コンサルティングにおいて提供するサービスの円滑な運営に必要な範囲で、当サイトの利用の情報を収集しています。
                    収集した情報は、上記「個人情報の取り組み」の「4.第三者提供」に規定する場合を除き、利用的の範囲内で取り扱います。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        2.収集する情報の範囲
                    </div>
                    「お問い合わせ」のご利用にあたっては、ご氏名、会社名、住所、電話番号、メールアドレス等について 任意に送信を願いしております。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        3.利用目的
                    </div>
                    上記「個人情報の取り組み」の「2.個人情報の利用目的」に準じます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        4.利用及び提供の制限
                    </div>
                    上記「個人情報の取り組み」の「3.個人情報の共同利用」および「4.第三者提供」に準じます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        5.安全確保の措置
                    </div>
                    上記「個人情報の取り組み」の「5.個人情報の管理について」に準じます。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        6.ログ情報、Cookie
                    </div>
                    上記「個人情報の取り組み」の「5.個人情報の管理について」に準じます。<br>
                    アクセス解析について当サイトにおけるアクセスログの収集、および解析にはGoogle Analyticsを使用しています。
                    Google AnalyticsではCookieを使用してアクセスログを収集しますが、これは個人を特定する情報を含みません。
                    なお、収集されるアクセスログは Google社のプライバシーポリシーに基づいて管理されます。<br>
                    クッキーとIPアドレスについて当サイトでは、アクセス解析においてCookieを使用している他、Web サーバのログによてアクセス元IPアドレスの情報を収集しております。<br>
                    Cookie及びIPアドレス情報については、それら単独では特定の個人を別することができないため、個人情報とは考えておりません。なお、Cookie情報については、ブラウザの設定で拒否するこが可能です。
                    自分が使用しているブラウザがこの機能を持っているかどうか不明な場合は、ソフトウェア製造元にお問い合せください。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Google社のプライバシーポリシーについて
                    </div>
                    Google Analyticsで収集したアクセスログに関するプライバシーポリシーについては、下記をご確認ください。（外部サイト）<br>
                    <a
                        href="https://policies.google.com/technologies/partner-sites">ユーザーがGoogleパートナーのサイトやアプリを使用する際のGoogleによるデータ使用</a><br>
                    <a href="http://www.google.com/intl/ja/policies/privacy/">Google社のプライバシーポリシー</a>
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        7.適用範囲
                    </div>
                    本オンライン・プライバシーポリシーは、当サイトにおいてのみ適用されます。
                    当サイト外のリンク先における情報の取いについては、グローバル・コーポレート・コンサルティングは、何ら保証するものではありません。<br>
                    <br>
                    最終改訂日：2022年12月1日
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
