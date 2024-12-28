@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/accounting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="accounting-consulting-contents">
            <h1 class="main-title">税務コンサルティング</h1>
            <div class="">
                グループ会社である税理士法人GCCにおいて税務に関するサービスを提供しております。
            </div>
            <div class="">
                <div class="">
                    組織再編成コンサルティング
                </div>
                <div class="">
                    組織再編成実行時に必ず検討が必要となる適格・非適格の判断等、実務支援を行います。
                </div>
            </div>
            <div class="">
                <div class="">
                    事業承継コンサルティング
                </div>
                <div class="">
                    オーナー経営者であれば、誰もが直面する問題が「事業承継」です。弊社では、会社に応じた事業承継対策アドバイスを行います。<br>
                    わが国の相続税は相続財産が3億円を超えると税率は50％と非常に高くなっています。これを上回る金額の相続財産をオーナーが有する場合には、相続対策は非常に重要です。様々な角度から検討し、法人の資本政策およびオーナーの事業継承対策（財団設立、海外資産管理会社設立、グローバルな資金運用）、合理的な税務対策の方法について提案いたします。
                </div>
                <div class="">事業継承詳細はこちら</div>
            </div>
            <div class="">
                <div class="">
                    決算業務･記帳代行業務･確定申告業務
                </div>
                <div class="">
                    一般的な決算業務･記帳代行業務･確定申告業務はもちろんのこと、連結納税の確定申告にも対応可能です。また上場会社等から決算業務のアウトソーシングも受けており、科目明細の作成から税務申告書の作成までを請け負うことも致します。
                </div>
            </div>
    </main>
    <!-- /.main -->
@endsection
