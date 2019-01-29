{{-- BEGAN BANNER --}}

<section class="th-contact-banner" style="background-image: url({{ the_field('banner_image') }})">
    <div class="container">
        <h2 class="th-contact-banner__title">
            {{ the_field('banner_title') }}
        </h2>
    </div>
</section>


{{-- BEGAN CONTACT FORM --}}
<section class="th-contact-form">
    <div class="container">
        <div class="row">
            <div class="col col-md-5">
                <div class="th-contact-wrap">
                    @if ( get_field('info_title') )
                        <div class="th-information__title">
                            {{ the_field('info_title') }}
                        </div>
                    @endif
                    @if(get_field('info_description'))
                        <div class="th-contact__description">
                            {{ the_field('info_description') }}
                        </div>
                    @endif
                    @if (have_rows('contact_information'))
                        <ul class="th-contact_list">
                            @while(have_rows('contact_information'))  @php(the_row())
                            <li class="th-contact__item">
                                @if(get_sub_field('information_icon'))
                                    <i class="fa {{ the_sub_field('information_icon') }}"></i>
                                @endif
                                @if(get_sub_field('information_text'))
                                    {{ the_sub_field('information_text') }}
                                @endif
                            </li>
                            @endwhile
                        </ul>
                        @php (wp_reset_postdata())
                    @endif
                    @if(have_rows('contact_socials'))
                        <ul class="th-contact-socials__list">
                            @while(have_rows('contact_socials')) @php(the_row())
                            <li class="th-contact-socials__item">
                                <a href="{{ the_sub_field('contact_socials_link') }}">
                                    <i class="fa {{ the_sub_field('contact_socials_icon') }}"></i>
                                </a>
                            </li>
                            @endwhile
                        </ul>
                        @php(wp_reset_postdata())
                    @endif
                </div>
            </div>
            <div class="col col-md-7">
                <h2 class="th-contact-form__title"> {{ the_field('form_title') }}</h2>
                {{ the_field('forms') }}
            </div>
        </div>
    </div>
</section>