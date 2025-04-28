<header id="header">
    <div class="header-left">
        <a href="{{ route('top') }}">
            <img src="/images/gccinc_logo.png" alt="ロゴ">
        </a>
    </div>
    <div class="menu-toggle-wrapper">
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
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
                    <a href="#" data-submenu="serviceMenu">サービス</a>
                </li>
                <li><a href="{{ route('flow') }}">サービスコンセプト</a></li>
                <li class="has-submenu">
                    <a href="#" data-submenu="companyMenu">会社案内</a>
                </li>
                <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
                <li><a href="#">お知らせ</a></li>
                <li><a href="{{ route('recruit') }}">採用情報</a></li>
            </ul>
        </div>

        <div class="submenu-list" id="serviceMenu">
            <ul>
                <li><a href="{{ route('services') }}">サービスTOP</a></li>
                <li><a href="{{ route('accountingConsulting') }}">会計コンサルティング</a></li>
                <li><a href="{{ route('mergersandAcquisitionsConsulting') }}">M&Aコンサルティング</a></li>
                <li><a href="{{ route('initialPublicOfferingConsulting') }}">株式公開コンサルティング</a></li>
                <li><a href="{{ route('systemConsulting') }}">システムコンサルティング</a></li>
                <li><a href="{{ route('humanResourcesConsulting') }}">人事コンサルティング</a></li>
                <li><a href="{{ route('taxConsulting') }}">税務コンサルティング</a></li>
                <li><a href="{{ route('internationalTaxConsulting') }}">国際税務コンサルティング</a></li>
            </ul>
        </div>

        <div class="submenu-list" id="companyMenu">
            <ul>
                <li><a href="{{ route('companyOverview') }}">会社案内TOP</a></li>
                <li><a href="{{ route('messageFromOurPresident') }}">社長挨拶</a></li>
                <li><a href="{{ route('member') }}">メンバー</a></li>
                <li><a href="{{ route('group') }}">グループ紹介</a></li>
            </ul>
        </div>
    </div>
    <div class="sub-footer">
        <div class="sub-footer-inner">
            <div class="sub-footer-links-wrap">
                <ul class="footer-links">
                    <li><a href="{{ route('sitePolicy') }}">サイトポリシー</a></li>
                    <li><a href="{{ route('privacyPolicy') }}">プライバシーポリシー</a></li>
                    <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
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

            menuToggle.addEventListener("click", () => {
                navContainer.classList.add("nav-open");
                closeMenu.style.display = "flex";
                header.classList.add("header-hidden");
                footer.classList.add("footer-hidden");
            });

            closeMenu.addEventListener("click", () => {
                navContainer.classList.remove("nav-open");
                closeMenu.style.display = "none";
                header.classList.remove("header-hidden");
                footer.classList.remove("footer-hidden");
                submenus.forEach(submenu => submenu.classList.remove("submenu-open"));
            });

            document.querySelectorAll(".has-submenu > a").forEach(menu => {
                menu.addEventListener("click", (e) => {
                    e.preventDefault();

                    let submenuId = menu.getAttribute("data-submenu");
                    let submenu = document.getElementById(submenuId);

                    if (submenu) {
                        submenus.forEach(sm => {
                            if (sm !== submenu) sm.classList.remove("submenu-open");
                        });

                        submenu.classList.toggle("submenu-open");
                    }
                });
            });

            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    header.classList.add("scroll-active");
                } else {
                    header.classList.remove("scroll-active");
                }
            });
        });
    </script>
@endsection
