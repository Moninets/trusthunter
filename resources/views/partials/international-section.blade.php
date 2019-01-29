<section class="th-international">
    <div class="container">
        <div class="row">
            <div class="col col-md-5">
                <div class="th-international__image">
                    @if (get_field('international_image'))
                        <img src="{{ the_field('international_image') }}" alt="Glob image">
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="th-content">
                    <div class="th-content__title">
                        @if (get_field('international_title'))
                            {{ the_field('international_title') }}
                        @endif
                    </div>
                    <div class="th-content__description">
                        @if (get_field('international_content'))
                            {{ the_field('international_content') }}
                        @endif
                    </div>
                    @if (get_field('international_button_link'))
                        <a class="th-content__button button-yellow"
                           href="{{ the_field('international_button_link') }}">
                            <?php the_field('international_button_text'); ?>
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>