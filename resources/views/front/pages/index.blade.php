@extends("front.partials.layouts.app")
@section("content")
    <!-- BEGIN content_for_index --><div id="shopify-section-1602823096e2ac33af" class="shopify-section"><section class="slider-content">
            <div class="home-slider owl-carousel owl-theme" id="home-slider">

                <div class="item">
                    <div class="slide-image slider-content-left" style="background-image: url('//cdn.shopify.com/s/files/1/0509/6331/6893/files/slider2.jpg?v=1605097068');">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info slider-text-left">

                                        <h6 style="color:#222222;">Top Sales</h6>

                                        <h2 style="color:#105caa;">Bluetooth Headphone</h2>

                                        <span class="side-text" style="color:#1a1f27;">Aspire to fit different head sizes and shapes</span>
                       <a href="/collections/speakers" class="btn btn-style">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slide-image slider-content-right" style="background-image: url('//cdn.shopify.com/s/files/1/0509/6331/6893/files/slider1-new.jpg?v=1606986023');">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-text-info slider-text-right">

                                        <h6 style="color:#222222;">New arrival</h6>

                                        <h2 style="color:#105caa;">Qilive Headphones</h2>
                                        <span class="side-text" style="color:#1a1f27;">Aspire to fit different head sizes and shapes</span>
                                        <a href="/collections/headphone" class="btn btn-style">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Hero Section End -->
        <script>
            $('#home-slider').owlCarousel({
                loop: false,
                rewind: true,fade: true,margin: 0,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,
                singleItem : true,
                animateOut: 'fadeOut',
                responsive:{
                    0:{
                        items: 1,
                        dots: true
                    },
                    479:{
                        items: 1,
                        dots: true
                    },
                    768:{
                        items: 1
                    },
                    979:{
                        items: 1
                    },
                    1199:{
                        items: 1
                    }
                }
            });
        </script>

        <style>

            .slider-content .home-slider .slide-image{
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: 700px;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;}
            @media (max-width: 1599px) and (min-width: 1360px){
                .slider-content .home-slider .slide-image{
                    height: 520px;
                }
            }
            @media (max-width: 1366px) and (min-width: 767px){
                .slider-content .home-slider .slide-image{
                    height: 497px;
                }
            }
            @media (max-width: 1359px) and (min-width: 1200px){
                .slider-content .home-slider .slide-image{
                    height: 460px;
                }
            }
            @media (max-width: 1199px){
                .slider-content .home-slider .slide-image{
                    height: 375px;
                }
            }
            @media (max-width: 991px){
                .slider-content .home-slider .slide-image{
                    height: 350px;
                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image.slider-content-right{
                    background-position: right 70% bottom;
                }
                .slider-content .home-slider .slide-image.slider-content-left{
                    background-position: left 75% bottom;
                }
            }
            .slider-content .home-slider .slide-image .slider-text-info{
                width: calc(60% - 30px);}
            .slider-content .home-slider .slide-image.slider-content-left .slider-text-info{
                margin-right: auto;
            }
            .slider-content .home-slider .slide-image.slider-content-right .slider-text-info{
                margin-left: auto;
            }
            .slider-content .home-slider .slide-image.slider-content-center .slider-text-info{
                margin-left: auto;
                margin-right: auto;
            }
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-left{text-align: left;}
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-right{text-align: right;}
            .slider-content .home-slider .slide-image .slider-text-info.slider-text-center{
                text-align: center;
            }

            @media (max-width: 1199px){}
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image .slider-text-info{
                    width: calc(75% - 15px);
                }
                .slider-content .home-slider .slide-image.slider-content-left .slider-text-info{
                    left: 15px;
                    margin-right: auto;
                }
                .slider-content .home-slider .slide-image.slider-content-right .slider-text-info{
                    right: 15px;
                    margin-left: auto;
                }
                .slider-content .home-slider .slide-image.slider-content-center .slider-text-info{
                    left: 15px;
                    right: 15px;
                }
            }

            /* effect transition css */
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info h6{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.3s;
                animation-delay: 0.3s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.3s;
                animation-duration: 0.3s;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info h2{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.6s;
                animation-delay: 0.6s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.6s;
                animation-duration:0.6;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info span{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 0.9s;
                animation-delay: 0.9s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 0.9s;
                animation-duration: 0.9s;
            }
            .slider-content .home-slider .owl-item.active .slide-image .slider-text-info a{
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
                -webkit-animation-delay: 1.2s;
                animation-delay: 1.2s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
                -webkit-animation-duration: 1.2s;
                animation-duration: 1.2s;
            }

            .slider-content .home-slider .slide-image .slider-text-info h6{
                font-size: 20px;
                text-transform: capitalize;
                font-weight: 400;
                line-height: 1;
            }
            .slider-content .home-slider .slide-image .slider-text-info h2{
                font-size: 50px;
                margin-top: 30px;
                line-height: 1;
                text-transform: uppercase;
            }
            .slider-content .home-slider .slide-image .slider-text-info span{
                display: block;
                font-size: 24px;
                margin-top: 30px;
                line-height: 1;
                font-family: 'Courgette', cursive;
            }
            .slider-content .home-slider .slide-image .slider-text-info a{
                margin-top: 36px;
            }
            @media (max-width: 1599px) and (min-width: 1200px){
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    margin-top: 20px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    margin-top: 20px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 26px;
                }
            }
            @media (max-width: 1199px){
                .slider-content .home-slider .slide-image .slider-text-info h6{
                    font-size: 16px;
                }
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    font-size: 30px;
                    margin-top: 19px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    font-size: 18px;
                    margin-top: 19px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 23px;
                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider .slide-image .slider-text-info h6{
                    font-size: 16px;
                }
                .slider-content .home-slider .slide-image .slider-text-info h2{
                    font-size: 24px;
                    margin-top: 17px;
                }
                .slider-content .home-slider .slide-image .slider-text-info span{
                    font-size: 16px;
                    margin-top: 17px;
                }
                .slider-content .home-slider .slide-image .slider-text-info a{
                    margin-top: 19px;
                }
            }

            /* slider property css */
            .slider-content .home-slider.owl-carousel .owl-nav{
                margin-top: 0;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button{
                font-size: 24px;
                color: #fff;
                position: absolute;
                bottom: 50%;

                transform: translateY(50%);

                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #105caa;
                margin: 0;
                border-radius: 0px;
                opacity: 0;
                visibility: hidden;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button:hover{
                background-color: #222222;
            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button{
                opacity: 1;
                visibility: visible;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button i{
                line-height: 35px;
            }
            .slider-content .home-slider.owl-carousel .owl-nav button.owl-prev{

                left: 0px;

            }
            .slider-content .home-slider.owl-carousel .owl-nav button.owl-next{

                right: 0px;

            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-prev{

                left: 15px;

            }
            .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-next{

                right: 15px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots{
                position: absolute;
                bottom: 15px;
                left: 15px;
                right: 15px;
                line-height: 0;
            }
            .slider-content .home-slider.owl-carousel .owl-dots button{

                margin-right: 5px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots button:last-child{

                margin-right: 0px;

            }
            .slider-content .home-slider.owl-carousel .owl-dots button span{
                margin: 0;
                width: 8px;
                height: 8px;
                background-color: #000;
                border-radius: 50%;
            }
            .slider-content .home-slider.owl-carousel .owl-dots button:hover span,
            .slider-content .home-slider.owl-carousel .owl-dots button.active span{
                background-color: #105caa;
            }
            @media (max-width: 1199px){
                .slider-content .home-slider.owl-carousel .owl-nav button{
                    opacity: 1;
                    visibility: visible;
                }
                .slider-content .home-slider.owl-carousel .owl-nav button.owl-prev,
                .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-prev{

                    left: 10px;

                }
                .slider-content .home-slider.owl-carousel .owl-nav button.owl-next,
                .slider-content .home-slider.owl-carousel:hover .owl-nav button.owl-next{

                    right: 10px;

                }
            }
            @media (max-width: 767px){
                .slider-content .home-slider.owl-carousel .owl-nav{
                    display: none;
                }
            }

            /* slider banner css */
            ul.slider-banner-block li.slider-banner{
                margin-top: 30px;
            }
            ul.slider-banner-block li.slider-banner:first-child{
                margin-top: 0px;
            }
            @media (max-width: 991px){
                ul.slider-banner-block{
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;margin-left: -30px;}
                ul.slider-banner-block li.slider-banner{
                    width: calc(50% - 30px);margin-left: 30px;}
                ul.slider-banner-block li.slider-banner:first-child{
                    margin-top: 30px;
                }
            }
            @media (max-width: 767px){
                ul.slider-banner-block{margin-left: -15px;}
                ul.slider-banner-block li.slider-banner{
                    width: calc(100% - 15px);
                    margin-top: 20px;margin-left: 15px;}
            }
        </style></div><div id="shopify-section-1602778990b61c2961" class="shopify-section"><!-- Browuse categoryies -->
        <section class="slider-category" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <div class="section-capture">
                            <div class="section-title">

                                <h2>Top category</h2>
                            </div>
                        </div>
                        <?php
           $top_category = file_get_contents(public_path()."/data/products/top_category.json");
           $top_category_json = json_decode($top_category,true);?>

                        <div class="cat-slider owl-carousel owl-theme" id="category-slider">
                          @foreach($top_category_json as $key => $top)
                            <div class="item">
                                <div class="category-wrap">
                                    <a href="{{$top['url']}}" class="banner-hover">
                                        <span class="cat-img"><img class="img-fluid" src="{{$top['image']}}"></span>
                                    </a>
                                    <a href="{{$top['url']}}" class="cat-title"><span>{{$top['name']}}</span></a>
                                </div>
                            </div>
                           @endforeach;
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $('#category-slider').owlCarousel({
                loop: false,
                rewind: true,
                margin: 30,
                nav: false,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots: false,autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items: 1,
                        margin: 15
                    },
                    479:{
                        items: 1,
                        margin: 15
                    },
                    768:{
                        items: 3
                    },
                    979:{
                        items: 4
                    },
                    1199:{
                        items: 4
                    },
                    1359:{
                        items: 4
                    }
                }
            });
        </script>

        <style>
            .slider-category {
                padding-top:60px;
                padding-bottom:0px;




            }
            @media (max-width: 767px) {
                .slider-category {
                    padding-top:40px;
                    padding-bottom:0px;
                }
            }
            .cat-slider .category-wrap,
            .cat-slider .category-wrap:hover{
                -webkit-transition: all 0.3s ease-in-out 0s;
                -o-transition: all 0.3s ease-in-out 0s;
                transition: all 0.3s ease-in-out 0s;
            }
            .cat-slider .category-wrap a{
                position: relative;
                display: block;
            }
            .cat-slider .category-wrap a span.cat-img{
                display: block;
            }

            .cat-slider .category-wrap a.cat-title{
                color: #fff;
                font-size: 16px;
                position: absolute;
                bottom: 0px;
                left: 0;
                right: 0;
                padding: 8px 0;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 500;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                background-color:#105caa;
                z-index: 1;
                transform: translateY(100%);
            }
            .cat-slider .category-wrap a.cat-title:hover{
                background-color:#222222;
            }
            .cat-slider .category-wrap:hover a.cat-title{
                transform: translateY(0%);
            }
            @media (max-width: 1199px){
                .cat-slider .category-wrap a.cat-title{
                    position: unset;
                    width: 100%;
                    transform: translateY(0%);
                }
            }
        </style></div>
        <div id="shopify-section-1537092551066" class="shopify-section"><!-- product-area start -->
        <div class="product-area product-tab-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                        <div class="section-capture tab">
                            <div class="section-title">

                                <h2>Trending collection</h2>
                                        <?php  $trending = file_get_contents(public_path()."/data/products/trending.json");
                                        $trending_json = json_decode($trending,true);
                                                                        ?>

                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a class="active show" role="tab" data-toggle="tab" href="#tab-1584168950333">New products</a>
                                </li>
                                <li role="presentation">
                                    <a class="" role="tab" data-toggle="tab" href="#tab-1574764873111">Featured products</a>
                                </li>
                                <li role="presentation">
                                    <a class="" role="tab" data-toggle="tab" href="#tab-1592830767075">Best Seller</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content tabs">
                            <div class="tab-pane fade active show" id="tab-1584168950333" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">

                                      @foreach($trending_json as $key => $trend)

                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="{{$trend['url']}}">
                                                        <img class="img-fluid img1" src="{{$trend['image']}}" alt="{{$trend['name']}}">
                                                        <img class="img-fluid img2" src="{{$trend['image']}}" alt="{{$trend['name']}}" />
                                                    </a>
                                                    <div class="product-label">
                                                        <span class="new-title">{{$trend['label']}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="{{$trend['id']}}"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="{{$trend['url']}}" title="{{$trend['name']}}">{{$trend['name']}}</a>
                                                    </h6>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class=money>{{$trend['currency'].' '.$trend['new_price']}}</span>

                                                  @if($trend['old_price'])
                                                        <span class="old-price"><span class=money>{{$trend['currency'].' '.$trend['old_price']}}</span></span>
                                                        @endif
                                                    </div>
                                                     <button class="btn btn-style newsletter-btn add_to_cart" product_id="{{$trend['id']}}">Add To Cart</button>
                                                    <p class="product-description">{{$trend['description']}}

                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="tab-1574764873111" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">
                                @foreach($trending_json as $key => $trend)
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="{{$trend['url']}}">
                                                        <img class="img-fluid img1" src="{{$trend['image']}}" alt="{{$trend['name']}}">
                                                        <img class="img-fluid img2" src="{{$trend['image']}}" alt="{{$trend['name']}}" />
                                                    </a>
                                                    <div class="product-label">
                                                        <span class="new-title">{{$trend['label']}}</span>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="{{$trend['id']}}"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="{{$trend['url']}}" title="{{$trend['name']}}">{{$trend['name']}}</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>{{$trend['new_price']}}</span></span>

                                                        @if($trend['old_price'])
                                                        <span class="old-price"><span class=money>{{$trend['currency'].' '.$trend['old_price']}}</span></span>
                                                         @endif
                                                    </div>
                                                     <button class="btn btn-style newsletter-btn add_to_cart" product_id="{{$trend['id']}}>Add To Cart</button>           
                                                    <p class="product-description">{{$trend['description']}}
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="tab-1592830767075" role="tabpanel">
                                <div class="swiper-container" id="feture_pro_tab">
                                    <div class="swiper-wrapper">
                                  @foreach($trending_json as $key => $trend)
                                        <div class="swiper-slide">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a class="pro-img" href="{{$trend['url']}}">
                                                        <img class="img-fluid img1" src="{{$trend['image']}}" alt="{{$trend['name']}}">
                                                        <img class="img-fluid img2" src="{{$trend['image']}}" alt="{{$trend['name']}}" />
                                                    </a>
                                                    <div class="product-label">
                                                        <span class="new-title">{{$trend['label']}}</span>
                                                    </div>

                                                </div>
                                                <div class="product-content">
                                                    <div class="product-ratting">
                                                        <span class="shopify-product-reviews-badge" data-id="5822868979869"></span>
                                                    </div>
                                                    <h6>
                                                        <a href="{{$trend['url']}}" title="{{$trend['name']}}">{{$trend['name']}}</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="new-price"><span class=money>{{$trend['new_price']}}</span></span>
                                                        @if($trend['old_price'])
                                                        <span class="old-price"><span class=money>{{$trend['old_price']}}</span></span>
                                                        @endif
                                                    </div>
                                                    <button class="btn btn-style newsletter-btn add_to_cart" product_id="{{$trend['id']}}>Add To Cart</button>
                                                    <p class="product-description">{{$trend['description']}}
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                            @endforeach
                                    </div>
                                    <div class="swiper-buttons">
                                        <button class="swiper-prev"><i class="fa fa-angle-left"></i></button>
                                        <button class="swiper-next"><i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area end -->
        <script>
        $('.add_to_cart').on('click',function(){
            let product_id = $(this).attr('product_id');
            let item_object = {};
            item_object[product_id] = {id:product_id,qty:1};

            let newItems  = {}
            localStorage.setItem("myCat",JSON.stringify(item_object));   
           
              let items = JSON.parse(localStorage.getItem('myCat'));       
          
        })
         
            var swiper = new Swiper('.swiper-container#feture_pro_tab', {
                slidesPerColumn: 2,
                slidesPerView: 4,
                spaceBetween: 30,
                observer: true,
                observeParents: true,navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    },
                    768: {
                        slidesPerView: 3
                    },
                    979: {
                        slidesPerView: 3
                    },
                    1199: {
                        slidesPerView: 4
                    }
                }
            });
        </script>

        <style>
            .product-tab-ptb {
                padding-top: 60px;
                padding-bottom: 0px;
                background-color: rgba(0,0,0,0);
            }
            @media (max-width: 767px) {
                .product-tab-ptb {
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
        </style></div>


        <div id="shopify-section-16063068571823b007" class="shopify-section"><!-- banner-area start -->
        <section class="banner-grid banner1">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 nth-child">
                        <div class="banner-block">
                            <a href="/collections/electronic" class="banner-hover">
                                <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/banner-latest-new11.jpg?v=1607058454">
                            </a>
                            <div class="banner-content banner-text-right banner-content-right">

                                <h6>Diffuser shaped stove</h6>



                                <span>20% off</span>



                                <a href="/collections/electronic" class="btn btn-style3">Shop Now</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 nth-child">
                        <div class="banner-block">
                            <a href="/collections/headphone" class="banner-hover">
                                <img class="img-fluid" src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/banner-latest-new2.jpg?v=1606985950">
                            </a>
                            <div class="banner-content banner-text-right banner-content-right">

                                <h6>Bluetooth Earbuds</h6>



                                <span>50% Off</span>



                                <a href="/collections/headphone" class="btn btn-style3">Shop now</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- banner-area end -->

        <style>
            .banner1{
                padding-top: 60px;
                padding-bottom: 0px;
            }
            @media(max-width: 767px){
                .banner1{
                    padding-top: 40px;
                    padding-bottom: 0px;
                }
            }

            @media(max-width: 767px){
                .banner-grid.banner1 .nth-child{
                    margin-top: 15px;
                }
                .banner-grid.banner1 .nth-child:first-child{
                    margin-top: 0px;
                }
            }

            .banner1 .banner-block{
                position: relative;
            }
            .banner1 .banner-block .banner-content{
                width: calc(60% - 30px);
                position: absolute;
                bottom: 50%;
                transform: translateY(50%);
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content{
                    width: calc(80% - 30px);
                }
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content{
                    width: calc(90% - 30px);
                }
            }
            .banner1 .banner-block .banner-content.banner-content-left{left: 30px;}
            .banner1 .banner-block .banner-content.banner-content-right{right: 30px;}
            .banner1 .banner-block .banner-content.banner-content-center{
                left: 30px;
                right: 30px;
                margin: 0 auto;
            }
            .banner1 .banner-block .banner-content.banner-text-left{text-align: left;}
            .banner1 .banner-block .banner-content.banner-text-right{text-align: right;}
            .banner1 .banner-block .banner-content.banner-text-center{
                text-align: center;
            }
            @media (max-width: 1199px) {
                .banner1 .banner-block .banner-content.banner-content-left{left: 15px;}
                .banner1 .banner-block .banner-content.banner-content-right{right: 15px;}
                .banner1 .banner-block .banner-content.banner-content-center{
                    left: 15px;
                    right: 15px;
                    margin: 0 auto;
                }
            }
            /* banner text css */
            .banner1 .banner-block .banner-content h6{
                font-size: 18px;
                text-transform: uppercase;
                font-weight: 600;
                line-height: 1;
            }
            .banner1 .banner-block .banner-content span{
                display: block;
                color: #222;
                font-size: 16px;
                margin-top: 25px;
                text-transform: uppercase;
                font-weight: 600;
                line-height: 1;
            }
            .banner1 .banner-block .banner-content a{
                margin-top: 27px;
            }
            @media (max-width: 1199px) {}
            @media (max-width: 991px) {
                .banner1 .banner-block .banner-content span{
                    margin-top: 15px;
                }
                .banner1 .banner-block .banner-content a{
                    margin-top: 16px;
                }
            }
            @media (max-width: 767px) {
                .banner1 .banner-block .banner-content span{
                    font-size: 14px;
                }
            }
        </style></div>


@endsection
