<section class="th-founders" style="background-image: url(<?php the_field('founders_image_bg'); ?>">
    <div class="container">
        <h2 class="th-founders__title">
            @if (get_field('founders_title'))
                {{ the_field('founders_title') }}
            @endif
        </h2>
        <div class="th-founders__images">
            @if (get_field('founders_repeater'))
                @while (has_sub_field('founders_repeater'))
                    @if (get_sub_field('repeater_image'))
                        <img class="th-founders__image" src="{{ the_sub_field('repeater_image') }}" alt="">
                    @endif
                @endwhile
            @endif
        </div>
    </div>
</section>