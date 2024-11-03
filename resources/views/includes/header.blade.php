<header>
    @php
        // デフォルトの背景色
        $backgroundColor = '#FFFFFF';

        // 現在のルート名を取得
        $currentRoute = Route::currentRouteName();

        // ルートが 'mypage' でない場合に背景色を設定
        if ($currentRoute !== 'mypage' && isset($events) && $events->count() > 0) {
            $backgroundColor = $events->first()->background_color;
        }
    @endphp
    <div class="header" style="background: {{ $backgroundColor }};">
        <div class="header__logo">
            <img src="/img/logo2.png" alt="Default Logo" class="school-logo">
        </div>
        <div class="header__menu">
            <img src="/img/menu2.png" alt="hamburger menu" id="menuToggle" />
        </div>
    </div> <!-- メニュー部分 -->
    <div class="side-menu" id="sideMenu">
        <button id="closeMenu">×</button>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</header>
@section('script')
    <script>
        $(document).ready(function() {
            $('#menuToggle').click(function() {

                $('#sideMenu').addClass('open');
            });

            $('#closeMenu').click(function() {
                $('#sideMenu').removeClass('open');
            });
        });
    </script>
@endsection
