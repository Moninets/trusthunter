<section class="th-advantages">
    <div class="container">
        <div class="th-advantages__title">
            @if (get_field('advantages_title'))
                {{ the_field('advantages_title') }}
            @endif
        </div>
        <div class="row">
            @if (get_field('advantages_repeater'))
                @while (has_sub_field('advantages_repeater'))
                    <div class="col-12 col-lg-4">
                        <div class="th-content">
                            <div class="th-wrap">
                                <div class="th-wrap__title">
                                    @if (get_sub_field('advantages_subtitle'))
                                        {{ the_sub_field('advantages_subtitle') }}
                                    @endif
                                </div>
                                <span class="th-wrap__number">
                                @if (get_sub_field('advantages_sequence_number'))
                                    {{ the_sub_field('advantages_sequence_number') }}
                                @endif
                            </span>
                            </div>
                            <ol class="th-list">
                                <li class="th-item">
                                    @if (get_sub_field('advantages_first_content'))
                                        {{ the_sub_field('advantages_first_content') }}
                                    @endif
                                </li>
                                <li class="th-item">
                                    @if (get_sub_field('advantages_second_content'))
                                        {{ the_sub_field('advantages_second_content') }}
                                    @endif
                                </li>
                                <li class="th-item">
                                    @if (get_sub_field('advantages_third_content'))
                                        {{ the_sub_field('advantages_third_content') }}
                                    @endif
                                </li>
                            </ol>
                        </div>
                    </div>
                @endwhile
                @php(wp_reset_postdata())
            @endif
        </div>
    </div>
</section>