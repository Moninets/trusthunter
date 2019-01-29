{{-- BEGAN ACQUAINTANCE --}}


<section class="th-acquaintance-page" style="background-image: url({{ the_field('acquaintance_page_image', 'options') }})">
    <div class="container">
        <div class="th-acquaintance-wrap">
            @if(get_field('acquaintance_page_title' ,'options'))
                <h3 class="th-acquaintance-wrap__title">{{ the_field('acquaintance_page_title', 'options') }}</h3>
                @if(get_field('acquaintance_page_link', 'options'))
                    <a class="button-yellow" href="{{ the_field('acquaintance_page_link', 'options') }}">
                        {{ the_field('acquaintance_page_text', 'options') }}
                    </a>
                @endif
            @endif
        </div>
    </div>
</section>