{{-- BEGAN ABOUT US --}}

<section class="th-template-about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                @if (get_field('about_image'))
                    <img src="{{ the_field('about_image') }}" alt="Image About" class="th-template-about__images">
                @endif
            </div>
            <div class="col-12 col-md-6">
                <div class="th-wrap">
                    @if(get_field('about_title'))
                        <h1 class="th-wrap__title">
                            {{ the_field('about_title') }}
                        </h1>
                    @endif
                    @if(get_field('about_content'))
                        <div class="th-wrap__content">
                            {{ the_field('about_content') }}
                        </div>
                    @endif
                    @if(get_field('about_button_link'))
                        <a href="{{ the_field('about_button_link') }}" class="button-blue">
                            {{ the_field('about_button_text') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BEGAN TEAM MEMBERS --}}

<section class="th-team">
    <div class="container">
        @if(get_field('team_title'))
            <h2 class="th-team__title">
                {{ the_field('team_title') }}
            </h2>
        @endif
        <div class="row d-flex justify-content-center">
            @php ($j = 1)

            @if ($team->have_posts())
                @while ($team->have_posts())  @php($team->the_post())
                <div class="col-12 col-md-4 text-center">
                    <article class="th-posts">
                        <a class="th-posts__link" href="{{ the_permalink() }}">
                            <img src="{{ get_the_post_thumbnail_url()}}" alt="{{ the_title() }}">
                        </a>
                        <h4 class="th-posts__title">
                            {{ the_title() }}
                        </h4>
                        <div class="th-posts__content">
                            {{ the_content() }}
                        </div>
                    </article>
                </div>
                @php ($j++)
                @endwhile
            @endif
            @php (wp_reset_postdata())
        </div>
    </div>
</section>


{{-- BEGAN SUGGESTIONS --}}

<section class="th-suggestions">
    <div class="container">
        @if(get_field('suggestions_title'))
            <h2 class="th-suggestions__title">{{ the_field('suggestions_title') }}</h2>
        @endif
        <div class="row">
            @if(have_rows('workers'))
                @while(have_rows('workers')) @php(the_row())
                <div class="col-12 col-md-4">
                    <img src="{{ the_sub_field('workers_image') }}" alt="{{ the_sub_field('workers_title') }}">
                    <h4 class="th-suggestions__title-name">{{ the_sub_field('workers_title') }}</h4>
                    <div class="th-suggestions__content">{{ the_sub_field('workers_content') }}</div>
                </div>
                @endwhile
            @endif
        </div>
    </div>
</section>

{{-- BEGAN SCHEDULE --}}
<section class="th-schedule">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="th-seo">
                    @if(get_field('seo_title'))
                        <div class="th-seo__title">{{ the_field('seo_title') }}</div>
                    @endif
                    @if(get_field('seo_content'))
                        <div class="th-seo__content">{{ the_field('seo_content') }}</div>
                    @endif
                    <canvas style="width: 577px; height: 234px;" id="myChart"></canvas>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="th-list__wrap">
                    @if(get_field('schedule_title'))
                        <h2 class="th-schedule__title">{{ the_field('schedule_title') }}</h2>
                    @endif
                    @if(get_field('schedule_list'))
                        <ol class="th-list">
                            @while(has_sub_field('schedule_list'))
                                @if(get_sub_field('item_content'))
                                    <li class="th-item">{{ the_sub_field('item_content') }}</li>
                                @endif
                            @endwhile
                        </ol>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- BEGAN SERVICES --}}

<section class="th-services" style="background-image: url({{ the_field('background_image') }})">
    {{--<div class="bg-services" style="background-image: url({{ the_field('background_arrow') }})"></div>--}}
    <div class="container">
        <div class="row d-flex justify-content-around">
            @if(have_rows('services_top'))
                @while(have_rows('services_top')) @php (the_row())
                <div class="col-12 col-md-4">
                    <img src="{{ the_sub_field('top_image') }}" alt="Image">
                    <p class="th-top__content">{{ the_sub_field('top_content')}}</p>
                </div>
                @endwhile
            @endif
        </div>
        <div class="row d-flex justify-content-around">
            @if(have_rows('services_bottom'))
                @while(have_rows('services_bottom')) @php (the_row())
                <div class="col-12 col-md-4">
                    <img src="{{ the_sub_field('bottom_image') }}" alt="Image">
                    <p class="th-bottom__content">{{ the_sub_field('bottom_content')}}</p>
                </div>
                @endwhile
            @endif
        </div>
    </div>
</section>


{{-- BEGAN ACQUAINTANCE --}}


