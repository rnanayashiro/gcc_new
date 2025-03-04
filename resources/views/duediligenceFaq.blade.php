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
                <p class="article-category">財務デューデリジェンス・株価算定　Duediligence</p>
                <h1 class="main-title">DDに関するQ&A</h1>
            </div>
            <div class="image-block"><img src="images/ac08.jpg" alt=""></div>
            <div class="">
                <div class=""></div>
                <div class="">
                    インターネットが普及した現在では、多くの知識情報は、検索をかけていただければ情報を取ることができます。よって、ここではインターネットや書籍ではあまり記述の見受けられない実務的な疑問をＱ＆Ａにしていますので、参考にご覧下さい。<br>
                    （なお情報が古くなる可能性がありますので、情報に変更がないかにつきましては、必ず専門家にご確認下さい）
                </div>
            </div>
            <div class="">
                <div class="">
                    DD・M&Aに関して
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.M&Aにあたり、外部専門家を利用したDDは必ず実施しないといけないものなのでしょうか？
                    </div>
                    A.DDは、法令等で定められたものではなく、企業様が必要に応じて任意に実施するものですので、社内で対応可能ということであれば、外部専門家にDD実施を依頼する必要はありません。<br>
                    ただし、通常は対象企業（事業）の適正な価値（価格）算定と対象企業（事業）に内在しているリスクを事前に正確に把握し、Ｍ＆Ａを実行するか否か、価格は妥当か否か等の意思決定を行うための効率的な手段として、
                    経験と知識のある外部専門家を利用し、時間的・予算的制約のもとで、企業様（依頼主）とDD実施者との間で合意された範囲での調査を行うことになります。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.DD時の調査内容は、どのような事項が考えられるのでしょうか？
                    </div>
                    A.どこまで詳細に対象企業（事業）を把握するかによりますが、一つの事例としては、以下のような調査内容が想定されます。
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/dd01.jpg" alt="財務デューデリジェンスにおける調査内容の一例">
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.Ｍ＆Ａの検討にあたって税務的な側面から留意すべき点は何でしょうか？
                    </div>
                    A.税務の側面からは、そのＭ＆Ａが税制適格要件を満たすか否かの検討が重要となります。また繰越欠損金を有する場合にはその引継ぎの有無の検討も重要事項となります。<br>
                    Ｍ＆Ａではグループ外企業との取引になる場合が多いと考えられることから、税制適格要件を満たすためには共同事業要件を満たすか否かがポイントとなります。<br>
                    なお、税制適格要件を満たした場合、会計処理と税務処理に乖離が生じる可能性が出てくるため、そのあたりの検討も必要となります。
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.Ｍ＆Ａの検討から実行までの大まかな流れはどのようなものでしょうか？
                    </div>
                    A.様々なケースが考えられますが、一つの事例としては、以下のような流れが想定されます。
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/dd02.jpg" alt="M＆A検討フロー">
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.基本合意書とはどのような内容のものでしょうか？
                    </div>
                    A.基本合意書とは、契約交渉段階において、買収価格やＭ＆Ａの形態などの提携基本条件が両者である程度合意に達した時点で、締結する書類のことです。
                    基本合意書の締結は、本件実施を確約するものでは なく、最終契約に至るプロセス およびスケジュールなどの 合意内容を両当事者間で明確にする意味をもつものである点に留意が必要です。<br>
                    記載内容としては、以下のような事項が想定されます。<br>
                </div>
                <div class="image-container-center m-top30">
                    <img src="/images/dd03.jpg" alt="M&Aの基本合意書記載事項例">
                </div>
            </div>
            <div class="">
                <div class="">
                    株価算定・価値評価に関して
                </div>
                <div class="">
                    <div class="font-w700 font-navy m-top30">
                        Q.株価の算定方法の決め方はあるのでしょうか？
                    </div>
                    A.非上場株式の株価は、使用目的、売買当事者の関係、将来事業計画の有無等状況に応じて、最適な算定方法をとる必要があります。<br>
                    いわゆる同族株主間の取引に該当すれば、やはり税法を意識した価値算定が重要となりますが、純粋なM&A時においては、買い手はより安く買いたいと思考しますし、逆に売り手はより高く売りたいと思考するはずですので、
                    より理論的な評価方法を選択し、その結果に両社が合意すれば取引が成立することになります。<br>
                    一般的に、純粋なM&A等を見据え財務DDと合わせて非上場会社の価値算定業務を行う場合には、
                    時価純資産法とDCF法、さらには場合によって類似会社比準法をベースに価値算定を行うケースが多いのではないでしょうか。
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
