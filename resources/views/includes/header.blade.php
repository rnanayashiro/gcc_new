<header id="header" class="header">
    <h1 class="header-logo"><a href="/"><img src="" alt=""></a></h1>
    <button class="header-hamburger js-hamburger-button">
        <span class="header-hamburger-line"></span>
        <span class="header-hamburger-line"></span>
        <span class="header-hamburger-line"></span>
    </button>
    <div class="jp-en-btn">
        <a href="/" class="jp-btn">JP</a>|
        <a class="en-btn -not-en" href="/en/">EN</a>
    </div>
    <nav class="header-nav" id="nav-header">
        <div class="header-nav-inner">
            <div class="header-nav-container">
                <div class="header-search">
                    <form class="header-search-keyword" method="get" action="/search.html">
                        <input class="header-search-keyword-input" type="text" name="q" placeholder="キーワード検索">
                        <button class="header-search-keyword-button" type="submit"><i></i></button>
                    </form>
                    <div class="header-search-tags"><a href="/tag/">タグから探す</a></div>
                </div>
                <div class="header-contents">
                    <button class="header-dropdown-back-button js-dropdown-back-button">BACK</button>
                    <ul class="header-menu" data-effect-list="slide-left">
                        <li class="header-menu-item" data-effect-delay="6">
                            <a href="/aboutus/"
                                class="header-menu-title header-dropdown-button js-dropdown-button">企業情報</a>
                            <div class="header-dropdown -lv1 js-dropdown-menu">
                                <p class="header-dropdown-title"><a href="/aboutus/">企業情報 TOP</a></p>
                                <ul class="header-dropdown-menu">
                                    <li class="header-dropdown-menu-item"><a href="/aboutus/message.html">会社案内TOP</a></li>
                                    <li class="header-dropdown-menu-item"><a href="/aboutus/philosophy.html">社長挨拶</a></li>
                                    <li class="header-dropdown-menu-item"><a href="/aboutus/director.html">メンバー</a></li>
                                    <li class="header-dropdown-menu-item"><a href="/aboutus/jigyosho.html">グループ紹介</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu-item" data-effect-delay="7"><a href="/capabilities/"
                                class="header-menu-title header-dropdown-button js-dropdown-button">事業紹介</a>
                            <div class="header-dropdown -lv1 js-dropdown-menu">
                                <p class="header-dropdown-title"><a href="/capabilities/">事業紹介 TOP</a></p>
                                <ul class="header-dropdown-menu">
                                    <li class="header-dropdown-menu-item"><a
                                            href="/capabilities/?tab-capabilities=ax">会計コンサルティング</a></li>
                                    <li class="header-dropdown-menu-item"><a
                                            href="/capabilities/?tab-capabilities=bx">税務コンサルティング</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu-item" data-effect-delay="12"><a href="/news/"
                                class="header-menu-title header-dropdown-button js-dropdown-button">ニュースリリース</a>
                            <div class="header-dropdown -lv1 js-dropdown-menu">
                                <p class="header-dropdown-title"><a href="/news/">ニュースリリース TOP</a></p>
                                <ul class="header-dropdown-menu js-header-menu-news-release">
                                    <li class="header-dropdown-menu-item"><a href="/news/?y=2024">2024</a></li>
                                    <li class="header-dropdown-menu-item"><a href="/news/?y=2023">2023</a></li>
                                    <li class="header-dropdown-menu-item"><a href="/news/?y=2022">2022</a></li>
                                    <li class="header-dropdown-menu-item">
                                        <a href="javascript:void(0);"
                                            class="header-dropdown-button js-dropdown-button">～2021</a>
                                        <div class="header-dropdown -lv2 js-dropdown-menu">
                                            <p class="header-dropdown-title"><a href="/news/?y=2021">ニュースリリース
                                                    ～2021</a></p>
                                            <ul class="header-dropdown-menu">
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2021">2021</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2020">2020</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2019">2019</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2018">2018</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2017">2017</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2016">2016</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2015">2015</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2014">2014</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2013">2013</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2012">2012</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2011">2011</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2010">2010</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2009">2009</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2008">2008</a>
                                                </li>
                                                <li class="header-dropdown-menu-item"><a href="/news/?y=2007">2007</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu-item" data-effect-delay="15"><a href="/careers/"
                                class="header-menu-title">採用情報</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
@section('script')
    <script>
        $(document).ready(function() {
            // ハンバーガーメニューをクリックしたとき
            $(".js-hamburger-button").on("click", function() {
                // headerに 'is-opened' クラスをトグル
                $("header").toggleClass("is-opened");

                // メニューが開いている時、スクロールを無効にする
                if ($("header").hasClass("is-opened")) {
                    $("body").css("overflow", "hidden");
                } else {
                    $("body").css("overflow", "auto"); // メニューが閉じたらスクロールを有効にする
                }
            });

            // BACKボタンをクリックしたとき
            $(".header-dropdown-back-button").on("click", function() {
                // headerから 'is-opened' クラスを削除してナビゲーションを閉じる
                $("header").removeClass("is-opened");
                $("body").css("overflow", "auto"); // スクロールを有効にする
            });


            // メニューのクリックイベント
            $(".js-dropdown-button").on("click", function(e) {
                e.preventDefault(); // リンクの遷移を防止

                var $this = $(this); // クリックされたボタン
                var $dropdownMenu = $this.next(".header-dropdown"); // クリックしたボタンの次のドロップダウンメニュー

                // すべてのドロップダウンメニューを閉じる
                $(".header-dropdown").not($dropdownMenu).slideUp().removeClass("is-opened");

                // 対応するドロップダウンメニューを開く
                if ($dropdownMenu.hasClass("is-opened")) {
                    $dropdownMenu.removeClass("is-opened").stop(true, true).slideUp(); // すでに開いていたら閉じる
                } else {
                    $dropdownMenu.addClass("is-opened").stop(true, true).slideDown(); // 開いていなければ表示
                }
            });
        });
    </script>
@endsection
