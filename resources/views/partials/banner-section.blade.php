<section class="th-banner" style="background-image: url({{ the_field('banner_image') }} )">
    <div class="container">
        <div class="th-wrapper">
            <div class="th-wrapper__content">
                @if (get_field('banner_content'))
                    {{ the_field('banner_content') }}
                @endif
            </div>
            <div class="th-wrapper__description">
                @if (get_field('banner_description'))
                    {{ the_field('banner_description') }}
                @endif
            </div>
            @if (get_field('banner_button_link'))
                <a class="th-wrapper__button button-blue" href="{{ the_field('banner_button_link') }}">
                    {{ the_field('banner_button_text') }}
                </a>
            @endif
        </div>
    </div>
</section>