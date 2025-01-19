@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="main-contents">
            <h1 class="main-title-eng">Member</h1>
            <h1 class="main-title">メンバー</h1>
            <div class="contents-box">
                <div class="">
                    パートナー
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Partner
                    </div>
                </div>
                <div class="m-bottom10">税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        下川 浩司
                    </div>
                    <div class="sub-container-ritem">
                        Koji Shimokawa
                    </div>
                </div>
                <div class="sub-container-description">
                    (株)富士銀行、公認会計士荒堀政男事務所に勤務。<br>
                    1996年に独立し､下川会計事務所を設立。国内における事業承継、組織再編・M&Aに関する税務コンサルティング業務はもとより、<br>
                    国際税務、海外企業との業務提携やデューデリジェンス等のコンサルティングにより、日本企業の海外での事業展開を支援した実績を多数有する。<br>
                    またメディカル分野での実績も豊富であり、医療法人の組織再編や、約300件の診療所の開業及び運営を支援している。<br>
                    みずほ総研株式会社顧問。米国インディアナ州の高等学校卒業、同志社大学経済学部卒業（1985年）、税理士（1996年登録）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        佐野 信行
                    </div>
                    <div class="sub-container-ritem">
                        Nobuyuki Sano
                    </div>
                </div>
                <div class="sub-container-description">
                    あずさ監査法人にて企業の株式公開を実務面でサポートした経験を有する。<br>
                    独立後も株式公開や企業財務に関するコンサルティングを行なうとともに、多数の会計情報システム構築支援業務にも従事している。<br>
                    またJ-SOXにも精通しており複数の上場企業のコンサルティングを行なっている。<br>
                    同志社大学商学部卒業（1995年）公認会計士（2003年登録）税理士（2006年登録）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        野村 光
                    </div>
                    <div class="sub-container-ritem">
                        Hikaru Nomura
                    </div>
                </div>
                <div class="sub-container-description">
                    あずさ監査法人にて企業の法定監査業務に従事。<br>
                    多数の事業再生支援を経験するとともに、財務調査、株価算定、J-SOX支援などの業務も行なっている。<br>
                    また、諸外国の会計・税務にも精通しており、海外事業の組織再編業務等も手がけている。<br>
                    慶応義塾大学経済学部卒業（1998年）公認会計士（2002年登録）税理士（2005年登録）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        今野 貴史
                    </div>
                    <div class="sub-container-ritem">
                        Takashi Konno
                    </div>
                </div>
                <div class="sub-container-description">
                    あずさ監査法人にて企業の法定監査業務に従事。<br>
                    多数の事業再生支援を経験するとともに、財務調査、株価算定、J-SOX支援などの業務も行なっている。<br>
                    また、諸外国の会計・税務にも精通しており、海外事業の組織再編業務等も手がけている。<br>
                    慶応義塾大学経済学部卒業（1998年）公認会計士（2002年登録）税理士（2005年登録）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        五島 元
                    </div>
                    <div class="sub-container-ritem">
                        Gen Goto
                    </div>
                </div>
                <div class="sub-container-description">
                    朝日監査法人（現 あずさ監査法人）にて多数の企業の株式公開を実務面でサポート。<br>
                    その後、ベンチャー企業にて管理部門の実務を経験しつつ、様々な企業財務コンサルティング業務、ファンドの組成・運営業務に従事。<br>
                    現在は、ファンド出資案件の経営にも参画。<br>
                    大阪大学経済学部卒業（1992年） 公認会計士（1999年登録）、税理士(2003年登録)
                </div>
                <div class="border-gray"></div>
            </div>

            <div class="contents-box">
                <div class="">
                    マネジャー
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Manager
                    </div>
                </div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        阪田 健司
                    </div>
                    <div class="sub-container-ritem">
                        Kenji Sakata
                    </div>
                </div>
                <div class="sub-container-description">
                    あずさ監査法人にて、多数の企業の法定監査に従事しながら、財務調査、株式公開支援などの経験を有する。<br>
                    <br>
                    神戸大学法学部卒業（1999年）公認会計士（2003年登録）<br>
                    大阪大学経済学部卒業（1992年） 公認会計士（1999年登録）、税理士(2003年登録)<br>
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        加納 大輔
                    </div>
                    <div class="sub-container-ritem">
                        Daisuke Kano
                    </div>
                </div>
                <div class="sub-container-description">
                    当社にて企業の事業計画策定支援及び業務改善コンサルティングに従事するとともに、<br>
                    株価算定、財務調査、会計情報システム構築支援業務等の経験を有する。<br>
                    <br>
                    神戸大学法学部卒業（2004年）、公認会計士（2016年登録）
                </div>
                <div class="border-gray"></div>
            </div>

            <div class="contents-box">
                <div class="">
                    アソシエイト
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Associate
                    </div>
                </div>

                <div class="m-bottom10">税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        松本 裕喜也
                    </div>
                    <div class="sub-container-ritem">
                        Yukiya Matsumoto
                    </div>
                </div>
                <div class="sub-container-description">
                    税理士事務所にて税務・会計業務の経験を積む。<br>
                    <br>
                    摂南大学工学部経営工学科卒業（2000年）、税理士登録（2008年）<br>
                    神戸大学法学部卒業（2004年）、公認会計士（2016年登録）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">特定社会保険労務士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        壽谷 将隆
                    </div>
                    <div class="sub-container-ritem">
                        Masataka Kotani
                    </div>
                </div>
                <div class="sub-container-description">
                    大阪市行政職を経て、社会保健労務士事務所にて労務管理、人事評価制度構築、助成金申請等の実務を経験。<br>
                    会計事務所での実務を経験することで、財務的側面も考慮した人事労務コンサルティングを行なっている。<br>
                    <br>
                    大阪経済大学経営学部経営学科卒業（2001年）社会保険労務士資格（2003年登録）特定社会保険労務士（2006年登録）
                </div>
                <div class="border-gray"></div>

            </div>

            <div class="contents-box">
                <div class="">
                    アライアンス
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        Alliance
                    </div>
                </div>

                <div class="m-bottom10">弁護士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        髙松 直樹
                    </div>
                    <div class="sub-container-ritem">
                        Naoki Takamatsu
                    </div>
                </div>
                <div class="sub-container-description">
                    甲南大学法学部卒業（1998年）、弁護士登録（2003年）、北浜法律事務所を経て、奏和法律事務所開設（2015年）
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">司法書士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        松本 和城
                    </div>
                    <div class="sub-container-ritem">
                        Kazuki Matsumoto
                    </div>
                </div>
                <div class="sub-container-description">
                    同志社大学法学部卒業（1996年）、司法書士登録（2003年）、司法書士法人谷町綜合事務所開設（2010年）
                </div>
                <div class="border-gray"></div>

            </div>

            <div class="contents-box">
                <div class="">
                    海外事業コンサルタント
                </div>
                <div class="sub-container-border">
                    <div class="sub-container-border-text">
                        International Business Consultant
                    </div>
                </div>

                <div class="m-bottom10">国際業務コンサルタント</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        高橋 愛一郎
                    </div>
                    <div class="sub-container-ritem">
                        Aiichiro Takahashi
                    </div>
                </div>
                <div class="sub-container-description">
                    バンコクの日系会計事務所において、日系クライアント企業の現地法人設立支援及び会計・税務の実務経験を積む。<br>
                    現職では、 主として海外案件に関する各種プロジェクト（海外子会社内部管理体制構築、株価算定、進出スキームの構築、国際税務、ビジネスマッチング等）の業務に従事。<br>
                    <br>
                    大阪市立大学入学後、Asia-Pacific International University（タイ）卒業（2007年）、タイ現地法人GCC SERVICES (THAILAND) CO., LTD.
                    Director
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">公認会計士・税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        井上 慶太
                    </div>
                    <div class="sub-container-ritem">
                        Keita Inoue
                    </div>
                </div>
                <div class="sub-container-description">
                    A.I. NETWORK (THAILAND) CO., LTD.代表<br>
                    中央監査法人東京事務所、監査法人ナカチを経て、タイにて在タイ日系企業に対する会社設立・投資奨励申請、設立後の会計・税務・法務にわたる総合的アドバイス、実務サポート業務等の実績を多数有する。<br>
                    また、日本国内外における財務調査・内部監査業務、在日外資系企業の会計アウトソーシング業務、途上国におけるODAコンサルティング業務の経験を持つ。<br>
                    <br>
                    一橋大学商学部卒業(1992年) 公認会計士（1996年登録）税理士（2005年登録）公認内部監査人(2002年登録)
                </div>
                <div class="border-gray"></div>

                <div class="m-bottom10">税理士</div>
                <div class="sub-container">
                    <div class="sub-container-litem80">
                        李 孝聖
                    </div>
                    <div class="sub-container-ritem">
                        Lee Kyo-seong
                    </div>
                </div>
                <div class="sub-container-description">
                    韓国出身。同志社大学経済学部卒業、同志社大学院商学研究科修士課程終了。税理士（2004年登録）
                </div>
                <div class="border-gray"></div>
            </div>

        </div>
    </main>
    <!-- /.main -->
@endsection
