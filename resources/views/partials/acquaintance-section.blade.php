<section class="th-acquaintance" style="background-image: url(<?php the_field('acquaintance_image'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-6 th-column-8">
                <div class="th-acquaintance__title">
                    @if (get_field('acquaintance_title'))
                        {{ the_field('acquaintance_title') }}
                    @endif
                </div>
                <a href="{{ the_field('acquaintance_button_link') }}" class="th-acquaintance__button button-yellow">
                    {{ the_field('acquaintance_button_text') }}
                </a>
            </div>
        </div>
    </div>
</section>