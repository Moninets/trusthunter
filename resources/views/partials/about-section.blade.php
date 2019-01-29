<section class="th-about">
    <div class="container">
        <div class="th-about__title">
            @if (get_field('about_title'))
                {{ the_field('about_title') }}
            @endif
        </div>
        <div class="th-about__description">
            @if (get_field('about_content'))
                {{ the_field('about_content') }}
            @endif
        </div>
        <div class="row">
            @if (get_field('about_repeater'))
                @while (has_sub_field('about_repeater'))
                    <div class="col-12 col-md-4 th-content">
                        <div class="th-content__image">
                            @if (get_sub_field('about_repeater_image'))
                                <img src="{{ the_sub_field('about_repeater_image') }}" alt="Puzzle">
                            @endif
                        </div>
                        <div class="th-content__description">
                            @if (get_sub_field('about_repeater_content'))
                                {{ the_sub_field('about_repeater_content') }}
                            @endif
                        </div>
                        <div class="th-content__number">
                            @if (get_sub_field('about_repeater__number'))
                                {{ the_sub_field('about_repeater__number') }}
                            @endif
                        </div>
                    </div>
                @endwhile
                @php(wp_reset_postdata())
            @endif

        </div>
    </div>
</section>
