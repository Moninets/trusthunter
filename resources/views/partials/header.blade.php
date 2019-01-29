<header class="th-header banner">
    <div class="container d-flex justify-content-between">
        <a class="th-header__logo" href="{{ home_url('/') }}">
            <img src="{{ header_image() }}" alt="Logo">
        </a>
        <nav class="nav th-navigation">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </nav>
        <a class="th-hamburger" id="hamburger-toggle">
            <span class="th-hamburger__box">
                <span class="th-hamburger__inner"></span>
            </span>
        </a>
        <div class="th-menu__responsive" id="menu-responsive">
            @if (has_nav_menu('responsive_navigation'))
                {!! wp_nav_menu(['theme_location' => 'responsive_navigation', 'menu_class' => 'nav','flex-column']) !!}
            @endif
        </div>
    </div>
</header>
