<header>
    <div class="header-left">
        <a href="/">
            <img src="/images/gccinc_logo.png" alt="ロゴ">
        </a>
    </div>
    <div class="menu-toggle" id="menuToggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<nav class="nav-menu" id="navMenu">
    <ul class="menu-list">
        <li><a href="/">TOP</a></li>
        <li><a href="/contact">お問い合わせ</a></li>
        <li><a href="/news">お知らせ</a></li>
        <li class="has-submenu">
            <a href="#">サービス</a>
            <ul class="submenu">
                <li><a href="/service">サービスTOP</a></li>
                <li><a href="/service/a">Aサービス</a></li>
                <li class="has-submenu">
                    <a href="#">Bサービス</a>
                    <ul class="submenu">
                        <li><a href="/service/b1">Bサービス1</a></li>
                        <li><a href="/service/b2">Bサービス2</a></li>
                    </ul>
                </li>
                <li><a href="/service/c">Cサービス</a></li>
            </ul>
        </li>
    </ul>
</nav>

@section('script')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    menuToggle.addEventListener("click", () => {
        navMenu.classList.toggle("menu-open");
    });

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            document.querySelector("header").classList.add("scroll-active");
        } else {
            document.querySelector("header").classList.remove("scroll-active");
        }
    });

    // サブメニューを開く処理
    document.querySelectorAll(".has-submenu > a").forEach(menu => {
        menu.addEventListener("click", (e) => {
            e.preventDefault(); // 親リンクの遷移を無効化
            const submenu = menu.nextElementSibling;
            if (submenu.style.display === "flex") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "flex";
            }
        });
    });
});
</script>
@endsection
