<header id="header">
    <div class="header-left">
        <a href="{{ route('top') }}">
            <img src="/images/gccinc_logo.png" alt="ロゴ">
        </a>
    </div>

    <div class="header-right">
        <div class="language-switcher">
            <a href="{{ url()->current() }}?lang=ja" class="lang-btn" id="jp-btn">JP</a> ｜
            @if (!empty($disableEnLang))
                <span class="lang-btn disabled" id="en-btn">EN</span>
            @else
                <a href="{{ url()->current() }}?lang=en" class="lang-btn" id="en-btn">EN</a>
            @endif
        </div>

        <div class="menu-toggle-wrapper">
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>


<button class="close-menu" id="closeMenu">
    <span></span>
    <span></span>
</button>

<div class="nav-container" id="navContainer">
    <div class="nav-header">
        <a href="{{ route('top') }}">
            <img src="/images/gccinc_logo.png" alt="ロゴ">
        </a>
    </div>

    <div class="nav-table">
        <div class="menu-list">
            <ul>
                <li><a href="{{ route('top') }}">TOP</a></li>
                <li class="has-submenu">
                    <a href="#" data-submenu="serviceMenu">{{ __('message.service') }}</a>
                </li>
                <li><a href="{{ route('flow') }}">{{ __('message.service_concept') }}</a></li>
                <li class="has-submenu">
                    <a href="#" data-submenu="companyMenu">{{ __('message.company_profile') }}</a>
                </li>
                <li><a href="{{ route('contact') }}">{{ __('message.contact') }}</a></li>
                <li><a href="#">{{ __('message.news') }}</a></li>
                <li><a href="{{ route('recruit') }}">{{ __('message.recruit') }}</a></li>
            </ul>
        </div>

        <div class="submenu-list" id="serviceMenu">
            <ul>
                <li><a href="{{ route('services') }}">{{ __('message.services_top') }}</a></li>
                <li><a href="{{ route('accountingConsulting') }}">{{ __('message.accounting_consulting') }}</a></li>
                <li><a href="{{ route('mergersandAcquisitionsConsulting') }}">{{ __('message.ma_consulting') }}</a>
                </li>
                <li><a href="{{ route('initialPublicOfferingConsulting') }}">{{ __('message.ipo_consulting') }}</a>
                </li>
                <li><a href="{{ route('systemConsulting') }}">{{ __('message.system_consulting') }}</a></li>
                <li><a href="{{ route('humanResourcesConsulting') }}">{{ __('message.hr_consulting') }}</a></li>
                <li><a href="{{ route('taxConsulting') }}">{{ __('message.tax_consulting') }}</a></li>
                <li><a
                        href="{{ route('internationalTaxConsulting') }}">{{ __('message.international_tax_consulting') }}</a>
                </li>
            </ul>
        </div>

        <div class="submenu-list" id="companyMenu">
            <ul>
                <li><a href="{{ route('companyOverview') }}">{{ __('message.company_top') }}</a></li>
                <li><a href="{{ route('messageFromOurPresident') }}">{{ __('message.president_message') }}</a></li>
                <li><a href="{{ route('member') }}">{{ __('message.member') }}</a></li>
                <li><a href="{{ route('group') }}">{{ __('message.group') }}</a></li>
            </ul>
        </div>
    </div>
    <div class="sub-footer">
        <div class="sub-footer-inner">
            <div class="sub-footer-links-wrap">
                <ul class="footer-links">
                    <li><a href="{{ route('sitePolicy') }}">{{ __('message.site_policy') }}</a></li>
                    <li><a href="{{ route('privacyPolicy') }}">{{ __('message.privacy_policy') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('message.contact') }}</a></li>
                </ul>
            </div>


        </div>
    </div>
</div>

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.getElementById("menuToggle");
            const closeMenu = document.getElementById("closeMenu");
            const navContainer = document.getElementById("navContainer");
            const header = document.getElementById("header");
            const footer = document.getElementById("footer");
            const submenus = document.querySelectorAll(".submenu-list");

            // メニュー開く
            menuToggle.addEventListener("click", () => {
                navContainer.classList.add("nav-open");
                closeMenu.style.display = "flex";
                header.classList.add("header-hidden");
                footer.classList.add("footer-hidden");
                document.body.classList.add("menu-open");
            });

            // メニュー閉じる
            closeMenu.addEventListener("click", () => {
                navContainer.classList.remove("nav-open");
                closeMenu.style.display = "none";
                header.classList.remove("header-hidden");
                footer.classList.remove("footer-hidden");
                document.body.classList.remove("menu-open");
                submenus.forEach(submenu => submenu.classList.remove("submenu-open"));
            });

            // サブメニュー開閉
            document.querySelectorAll(".has-submenu > a").forEach(menu => {
                menu.addEventListener("click", (e) => {
                    e.preventDefault();

                    const submenuId = menu.getAttribute("data-submenu");
                    const submenu = document.getElementById(submenuId);
                    const isMobile = window.innerWidth <= 767;

                    if (submenu) {
                        // 他のサブメニューを閉じる
                        document.querySelectorAll(".submenu-list").forEach(sm => {
                            if (sm !== submenu) sm.classList.remove("submenu-open");
                        });

                        if (isMobile) {
                            // 📱 スマホ時はクリックした親メニュー直下にサブメニューを移動
                            const parentLi = menu.closest("li");

                            // すでに配置されていない場合のみ移動
                            if (!parentLi.contains(submenu)) {
                                parentLi.insertAdjacentElement("afterend", submenu);
                            }

                            // 開閉トグル
                            submenu.classList.toggle("submenu-open");

                            // スクロール調整
                            submenu.scrollIntoView({
                                behavior: "smooth",
                                block: "nearest"
                            });
                        } else {
                            // 💻 PC時は右側展開のまま
                            submenu.classList.toggle("submenu-open");
                        }
                    }
                });
            });

            // スクロール時のヘッダー処理
            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    header.classList.add("scroll-active");
                } else {
                    header.classList.remove("scroll-active");
                }
            });

            // ウィンドウサイズ変更時にメニュー状態リセット
            window.addEventListener("resize", () => {
                if (window.innerWidth > 767) {
                    document.body.classList.remove("menu-open");
                    navContainer.classList.remove("nav-open");
                    closeMenu.style.display = "none";
                    header.classList.remove("header-hidden");
                    footer.classList.remove("footer-hidden");
                    submenus.forEach(sm => sm.classList.remove("submenu-open"));
                }
            });
        });
    </script>
@endsection
