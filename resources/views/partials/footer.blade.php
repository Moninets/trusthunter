<footer class="th-footer">
    <div class="container">
        <div class="th-footer-wrapper d-flex justify-content-between">
            <a href="{{ home_url('/') }}" class="th-footer__logo">
                <img src="{{ header_image() }}" alt="Logo">
            </a>
            <div class="th-footer__navigation">
                @if (has_nav_menu('footer_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
                @endif
            </div>
        </div>
        <div class="socials-wrap">
            @if(get_field('footer_copyright', 'options'))
                <div class="th-copyright">
                    {{ the_field('footer_copyright', 'options') }}
                </div>
            @endif
            <div class="th-socials">
                @if(have_rows('footer_socials', 'options'))
                    <ul class="th-socials__list">
                        @while( have_rows('footer_socials', 'options')) @php(the_row())
                        <li class="th-socials__item">
                            <a class="th-socials__link" href="{{ the_sub_field('socials link', 'options') }}">
                                <i class="fa {{ the_sub_field('socials_icon', 'options') }}"></i>
                            </a>
                        </li>
                        @endwhile
                    </ul>
                @endif
            </div>
        </div>
    </div>
</footer>
