{{-- PAGE TEMLATE BUILDING --}}

{{-- BEGAN BANNER --}}

<section class="th-building-banner" style="background-image: url( {{ the_field('banner_image') }})">
    <div class="container">
        @if(get_field('banner_title'))
            <h1 class="th-building-banner__title">{{ the_field('banner_title') }}</h1>
        @endif
        @if( get_field('banner_text'))
            <p class="th-building-banner__content">{{ the_field('banner_text') }}</p>
        @endif
        @if( get_field('banner_button_link'))
            <a href="{{ the_field('banner_button_link') }}" class="button-blue th-building-banner__button">
                {{ the_field('banner_button_text') }}
            </a>
        @endif
    </div>
</section>

{{-- BEGAN SERVISE --}}

<section class="th-building-service">
    <div class="container">
        @if( get_field('service_title'))
            <h2 class="th-building-service__title">{{ the_field('service_title') }}</h2>
        @endif
        @if(have_rows('service_repeater'))
            @while(have_rows('service_repeater')) @php (the_row())
            <div class="row th-wrapper">
                <div class="col-12 col-md-6">
                    <img class="th-wrapper__image" src="{{ the_sub_field('image') }}" alt="People">
                </div>
                <div class="col-12 col-md-6">
                    <h5 class="th-list-title">{{ the_sub_field('list_title') }}</h5>
                    <ol class="th-list">
                        <li class="th-item">{{ the_sub_field('item_first') }}</li>
                        <li class="th-item">{{ the_sub_field('item_second') }}</li>
                        <li class="th-item">{{ the_sub_field('item_third') }}</li>
                    </ol>
                </div>
            </div>
            @endwhile
        @endif
    </div>
</section>

{{-- BEGAN REVIEWS --}}

<section class="th-building-reviews" style="background-image: url({{ the_field('reviews_image') }} )">
    <div class="container">
        <div class="th-building-reviews__wrap">
            <div class="th-slider" id="reviews-slider">
                @if(have_rows('сomments'))
                    @while(have_rows('сomments')) @php(the_row())
                    <div class="th-slide">
                        <h5 class="th-slide__title">{{ the_sub_field('comments_title') }}</h5>
                        <div class="th-slide__content">{{ the_sub_field('comments_content') }}</div>
                    </div>
                    @endwhile
                @endif
            </div>
            <div class="th-block-button">
                <button href="#" class="btn button-arrow__left">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button href="#" class="btn button-arrow__right">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>


{{-- BEGAN WORK --}}

<section class="th-building-work">
    <div class="container">
        @if(get_field('work_title'))
            <h2 class="th-building-work__title">{{ the_field('work_title') }}</h2>
        @endif
        <div class="row">
            @if(have_rows('countries'))
                @while(have_rows('countries')) @php(the_row())
                <div class="col-12 col-sm-4 col-md-3 th-countries">
                    <img src="{{ the_sub_field('countries_image') }}" alt="Image">
                    <h5 class="th-countries__title">{{ the_sub_field('countries_title') }}</h5>
                    <ul class="th-countries__list">
                        <li class="th-countries__item">{{ the_sub_field('content_users') }}</li>
                        <li class="th-countries__item">{{ the_sub_field('content_backlink') }}</li>
                        @if(get_field('content_lanquages'))
                            <li class="th-countries__item">{{ the_sub_field('content_lanquages') }}</li>
                        @endif
                        <li class="th-countries__item">{{ the_sub_field('content_local') }}</li>
                    </ul>
                </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
<script>
    let cart = [];
    
    let Item = function (name, price, count) {
        this.name = name
        this.price = price
        this.count = count
    };

    function addItemToCart(name, price, count) {
        for (let i in cart) {
            if(cart[i].name === name) {
                cart[i].count += count;
                cart[i].price += price;
                return;
            }
        }
        let item = new Item (name, price, count);
        cart.push(item);
    }

    addItemToCart('Apple', 1.22, 1);
    addItemToCart('Pear', 1.72, 3);
    addItemToCart('Apple', 1.22, 1);
    addItemToCart('Apple', 1.22, 3);

    console.log(cart);
    console.log(cart[0]);
    console.log(cart[0].name);
</script>

