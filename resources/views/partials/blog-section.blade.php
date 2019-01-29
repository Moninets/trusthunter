<section class="th-blog" style="background-image: url( {{ the_field('blog_image') }} )">
    <div class="container">
        @if(get_field('blog_title'))
            <h2 class="th-blog__title">
                {{ the_field('blog_title') }}
            </h2>
        @endif
        @if(have_rows('future_posts'))
            <div class="row th-blog__post">
                @while ( have_rows('future_posts')) @php(the_row())
                @if($post_object = get_sub_field('resent_post'))
                    @php($post = $post_object)
                    @php(setup_postdata($post))
                    <div class="col-12 col-md-4 th-blog__gallery">
                        <a href="{{ the_permalink($post->ID) }}">
                            <div class="th-blog__image-wrapper">
                                <img class="th-blog__image" src="{{ get_the_post_thumbnail_url($post->ID) }}"
                                     alt="{{ $post->post_title }}">
                                <p class="th-blog__content">{{ $post->post_content }}</p>
                            </div>
                        </a>
                    </div>
                @endif
                @endwhile
                @php(wp_reset_postdata())
            </div>
        @endif
        @if(get_field('blog_button_link'))
            <a href="{{ the_field('blog_button_link') }}" class="th-blog__button">
                {{ the_field('blog_button_text') }}
            </a>
        @endif
    </div>
</section>
