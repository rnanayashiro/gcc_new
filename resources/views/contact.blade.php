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
                <p class="article-category">お問い合わせ　Contact Us</p>
                <h1 class="main-title">お問い合わせ</h1>
            </div>
            <div class="image-block"><img src="images/ac01.jpg" alt=""></div>
            <div class="">
                <div class=""></div>
                <div class="">
                    各サービスに関する質問はお問い合わせ内容を下記のフォームからお気軽にお寄せください。<br>
                    折り返しお返事させていただきます。<br>
                    また、メール・お電話等でも受け付けていますのでお気軽にどうぞ。
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        TEL
                    </div>
                    <div class="sub-container-ritem">
                        06-6264-5177
                    </div>
                </div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        MAIL
                    </div>
                    <div class="sub-container-ritem">
                        <a href="mailto:gcc-info@g-c-c.jp">gcc-info@g-c-c.jp</a>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <div class="">
                    お問い合わせフォーム
                </div>
                <div class="">
                    お問い合わせフォーム<br>
                    <span class="red-symbol">※</span>は記入必須項目ですので、必ずご記入ください。<br>
                    メールアドレスは正しくご入力下さい。（弊社より返信メールが届きません。）<br>
                    半角カナ入力は文字化けの原因となりますのでご注意ください。
                </div>
                <div class="border-gray"></div>
                <form action="{{ route('confirm') }}" method="POST">
                    @csrf

                    <!-- 会社名 -->
                    <div class="sub-container">
                        <div class="sub-container-litem160">
                            会社名<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="company-name" name="company-name" required>
                        </div>
                    </div>

                    <!-- 業種 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            業種
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="industry" name="industry">
                        </div>
                    </div>

                    <!--  部署名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            部署名
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="department" name="department">
                        </div>
                    </div>

                    <!--  役職名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            役職名
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="position" name="position">
                        </div>
                    </div>

                    <!--  担当者名 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            担当者名<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="contact-name" name="contact-name">
                        </div>
                    </div>

                    <!-- 担当者名(かな) -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            担当者名(かな)<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="contact-name-kana" name="contact-name-kana">
                        </div>
                    </div>


                    <!-- ご住所 -->
                    <div class="m-top30 font-w700">ご住所</div>
                    <div class="sub-container">
                        <div class="sub-container-litem160">
                            都道府県
                        </div>
                        <div class="sub-container-ritem">
                            <select id="prefecture" class="form-group-input" name="prefecture">
                                <option value="">選択してください</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            市区町村
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="city" name="city">
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            町名・番地
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="street" name="street">
                        </div>
                    </div>
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            ビル名等
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="building" name="building">
                        </div>
                    </div>

                    <!-- 電話番号 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            電話番号<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="phone" name="phone" required>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            E-mail<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <input type="text" class="form-group-input" id="email" name="email" required>
                        </div>
                    </div>

                    <!-- 国・地域 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            国・地域
                        </div>
                        <div class="sub-container-ritem width100per">
                            <label class="width210"><input type="checkbox" name="country" value="日本"> 日本</label>
                            <label class="width210"><input type="checkbox" name="country" value="タイ"> タイ</label>
                            <label class="width210"><input type="checkbox" name="country" value="ベトナム">ベトナム</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="country"
                                    value="その他アジア諸国">その他アジア諸国</label>
                            <label class="width210"><input type="checkbox" name="country" value="アメリカ">アメリカ</label>
                            <label class="width210"><input type="checkbox" name="country" value="ヨーロッパ"> ヨーロッパ</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="country" value="その他"> その他</label>
                        </div>
                    </div>

                    <!-- お問い合わせ内容 -->
                    <div class="sub-container m-top30">
                        <div class="sub-container-litem160">
                            お問い合わせ内容<span class="red-symbol">※</span>
                        </div>
                        <div class="sub-container-ritem">
                            <label class="width210"><input type="checkbox" name="inquiry" value="M&A"> M&A</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="組織再編"> 組織再編</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="財務デューデリジェンス">
                                財務デューデリジェンス</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="株価算定">
                                株価算定</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="株式公開(IPO)">
                                株式公開(IPO)</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="任意監査・決算レビュー">
                                任意監査・決算レビュー</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="会計制度構築">
                                会計制度構築</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="連結財務諸表作成">
                                連結財務諸表作成</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="事業計画策定">
                                事業計画策定</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="予算制度構築">
                                予算制度構築</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="コスト削減"> コスト削減</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="事業承継">
                                事業承継</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="事業再生"> 事業再生</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="会計顧問"> 会計顧問</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="内部統制構築(J-SOX含む)">
                                内部統制構築(J-SOX含む)</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="業務改善(PDCA)">
                                業務改善(PDCA)</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="IFRS対応">
                                IFRS対応</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="子会社設立"> 子会社設立</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="企業診断(経営分析)">
                                企業診断(経営分析)</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="税務顧問">
                                税務顧問</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="法人設立"> 法人設立</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="決算・開示支援">
                                決算・開示支援</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="記帳代行"> 記帳代行</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="相続関係"> 相続関係</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="海外進出"> 海外進出</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="移転価格対応"> 移転価格対応</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="国際税務"> 国際税務</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="海外子会社管理体制">
                                海外子会社管理体制</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="規程作成"> 規程作成</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="システム導入(システム構築)">
                                システム導入(システム構築)</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="エクセル帳票作成">
                                エクセル帳票作成</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="就業規則等作成">
                                就業規則等作成</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="人事評価制度構築">
                                人事評価制度構築</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="労務デューデリジェンス">
                                労務デューデリジェンス</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="医療関係"> 医療関係</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="研修、セミナー依頼">
                                研修、セミナー依頼</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="セミナー参加申し込み">
                                セミナー参加申し込み</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="採用"> 採用</label>
                            <label class="width210"><input type="checkbox" name="inquiry" value="事業再構築取得支援">
                                事業再構築取得支援</label>
                            <br>
                            <label class="width210"><input type="checkbox" name="inquiry" value="その他"> その他</label>
                            <br>
                            <textarea id="other-info" class="form-group-txtarea" name="inquiry" rows="4" cols="50"
                                placeholder="内容を入力してください" required></textarea>
                        </div>
                    </div>

                    <div class="form-container-center">
                        <button type="submit">確認画面へ進む</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->
@endsection
