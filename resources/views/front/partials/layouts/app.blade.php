<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js supports-no-cookies" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js supports-no-cookies " lang="en"> <!--<![endif]-->
<head>
    <!-- Basic and Helper page needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#105caa">
    <link rel="canonical" href="#"><!-- Title and description -->

    <title>
        electon-store
    </title><!-- Helpers -->

    <meta property="og:type" content="website">
    <meta property="og:title" content="electon-store">
    <meta property="og:description" content="">

    <meta property="og:url" content="#">
    <meta property="og:site_name" content="electon-store">

    <meta name="twitter:card" content="summary">


    <meta name="twitter:title" content="electon-store">
    <meta name="twitter:description" content="">
    @include("front.partials.layouts.scripts-head")
</head>

<body id="electon-store" class="template-index">
<script>
    $(window).on('load', function () {
        $('#myModal').modal('show');
    });


</script>
<style>

/*    a.add-to-cart.disabled{*/
/*        color: #eaeaea;*/
/*        background-color: #ababab;*/
/*        opacity: .65;*/
/*        pointer-events: none;*/
/*    }*/
    .popup_wrapper .modal {
        display: none !important;
    }

    .popup_wrapper .modal.show {
        display: flex !important;
        align-items: center;
        justify-content: center;
    }

    .popup_wrapper .modal-dialog {
        max-width: 700px;
    }

    .popup_wrapper .modal-content {
        border: none;
        border-radius: 0;
    }

    .popup_wrapper .modal-body {
        padding: 0px;
    }

    .popup_wrapper .modal-body button.close {
        float: none;
        color: #ffffff;
        font-size: 14px;
        position: absolute;
        top: 10px;

        right: 10px;

        height: 35px;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #141b25;
        text-shadow: none;
        border-radius: 50%;
        opacity: 1;
    }

    .popup_wrapper .modal-body button.close:hover {
        opacity: 1;
        color: #ffffff;
        background-color: #105caa;
    }

    .popup_wrapper .newsletter-info {
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: 700px;
    }

    .popup_wrapper .newsletter-info .newsletter-image {
        width: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: 460px;
    }

    .popup_wrapper .newsletter-info .subscribe_area {
        width: 50%;
        padding: 30px;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .newsletter-info .subscribe_area .subscribe-heading h2 {
        color: #333333;
        font-size: 24px;
        font-weight: 700;
    }

    .newsletter-info .subscribe_area .subscribe-heading p {
        margin-top: 10px;
    }

    .newsletter-info .subscribe_area .popup-newsletter {
        margin-top: 22px;
    }

    .newsletter-info .subscribe_area .popup-newsletter .news-content p.text-success {
        margin-bottom: 12px;
    }

    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input {
        border: 2px solid #e6e6e6;
        height: 50px;
        width: 300px;
        text-align: center;
    }

    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-webkit-input-placeholder,
    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-moz-placeholder,
    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::-ms-input-placeholder,
    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block input::placeholder {
        color: #000000;
    }

    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block .email-submit {
        margin-top: 20px;
    }

    .newsletter-info .subscribe_area .popup-newsletter .news-content .subscribe-block .email-submit button.news-sub {
        display: none;
    }

    @media (max-width: 767px) {
        .popup_wrapper .modal-dialog {
            max-width: 100%;
            margin: 15px;
        }

        .popup_wrapper .newsletter-info {
            flex-direction: column;
            width: 100%;
        }

        .popup_wrapper .newsletter-info .newsletter-image {
            width: 100%;
            display: none;
        }

        .popup_wrapper .newsletter-info .subscribe_area {
            display: block;
            width: 100%;
            padding: 15px;
        }
    }
</style>

<script type="text/javascript">
    var nToggle = $('.notification-close-btn');
    nToggle.on('click', function () {
        $('.notification-banner').slideToggle();
    });
</script>
<style>
    .notification-banner {
        position: relative;

        background-color: rgba(0, 0, 0, 0);

        overflow: hidden;
    }

    @media (max-width: 1359px) and (min-width: 1200px) {
        .notification-banner {
            padding: 5px 0;
        }
    }

    @media (max-width: 767px) {
        .notification-banner {
            display: none;
        }
    }

    .notification-banner .noti-banner-wrap {
        align-items: center;
    }

    .notification-banner a {
        display: block;
    }

    /* banner image1 css */
    .notification-banner .gift-text {
        padding: 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .notification-banner .gift-text .noti-banner1 {
        margin-left: auto;
    }

    .notification-banner .gift-text h2 {
        color: #fff;
        font-size: 50px;
        padding-left: 30px;
        margin-left: auto;
        font-weight: 700;
    }

    @media (max-width: 1199px) {
        .notification-banner .gift-text .noti-banner1 img {
            max-height: 60px;
        }

        .notification-banner .gift-text h2 {
            font-size: 40px;
        }
    }

    @media (max-width: 991px) {
        .notification-banner .gift-text {
            padding: 0 15px;
        }

        .notification-banner .gift-text .noti-banner1 {
            margin-left: unset;
        }

        .notification-banner .gift-text .noti-banner1 img {
            max-height: 50px;
            max-width: 50px;
        }

        .notification-banner .gift-text h2 {
            font-size: 30px;
            padding-left: 15px;
            margin-left: unset;
        }
    }

    /* banner maintext css */
    .notification-banner .main-text {
        padding-left: 30px;
        border-left: 2px solid #333;
    }

    .notification-banner .noti-banner-text h2 {
        color: #dda82d;
        font-size: 28px;
        font-weight: 400;
    }

    .notification-banner .noti-banner-text span {
        display: block;
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        margin-top: 5px;
        background: -webkit-linear-gradient(#dda82d, #fff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
    }

    @media (max-width: 1199px) {
        .notification-banner .noti-banner-text h2 {
            font-size: 20px;
        }

        .notification-banner .noti-banner-text span {
            font-size: 18px;
        }
    }

    @media (max-width: 991px) {
        .notification-banner .main-text {
            padding-left: 15px;
        }

        .notification-banner .noti-banner-text h2 {
            font-size: 18px;
        }

        .notification-banner .noti-banner-text span {
            font-size: 14px;
        }
    }

    /* banner image2 css */
    .notification-banner a.noti-banner2 {
        margin-bottom: -77px;
    }

    @media (max-width: 1599px) and (min-width: 1360px) {
    }

    @media (max-width: 1359px) and (min-width: 1200px) {
        .notification-banner a.noti-banner2 {
            margin-bottom: -20px;
        }

        .notification-banner a.noti-banner2 img {
            max-height: 85px;
        }
    }

    @media (max-width: 1199px) {
        .notification-banner a.noti-banner2 {
            margin-bottom: 0px;
        }

        .notification-banner a.noti-banner2 img {
            max-height: 100px;
        }
    }

    @media (max-width: 991px) {
        .notification-banner a.noti-banner2 img {
            max-height: 70px;
        }
    }

    /* banner close button css */
    button.notification-close-btn {
        font-size: 14px;
        color: #fff;
        position: absolute;
        right: 30px;
        bottom: 50%;
        transform: translateY(50%);
        font-weight: 700;
        line-height: 0;
        -webkit-transition: all 0s ease-in-out 0s;
        -o-transition: all 0s ease-in-out 0s;
        transition: all 0s ease-in-out 0s;
    }

    @media (max-width: 1599px) and (min-width: 1360px) {
    }

    @media (max-width: 1359px) and (min-width: 1200px) {
    }
</style>
<section class="top-notification-bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="notification-entry">

                    <li class="notify-wrap">
                        <p>Welcome to electon-store Store</p>
                    </li>
                    <li class="notify-wrap">
                        <div class="user-wrap">
                            <div class="acc-desk">
                                <a class="acc-ti" data-toggle="collapse" href="#store-account">
                                    <span class="acc-icon">My account</span>
                                    <span class="acc-detail">
      <span class="acc-text">Your account</span>

      <span class="acc-user">Hello! signin</span>

    </span>
                                </a>

                                <div class="acc-re-lo collapse" id="store-account">
                                    <a href="#" class="sign_in"> Sign in</a>
                                    <a href="/account/register">Register</a>
                                </div>

                            </div>
                            <style>
                                .user-wrap .acc-desk {
                                    position: relative;
                                }

                                .user-wrap .acc-desk a.acc-ti {
                                    color: #fff;
                                    display: flex;
                                    align-items: center;
                                    position: relative;
                                    text-transform: capitalize;

                                    padding-right: 15px;

                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-icon {
                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-icon,
                                .user-wrap .acc-desk a.acc-ti[aria-expanded="false"] span.acc-icon {
                                }

                                .user-wrap .acc-desk a.acc-ti:hover span.acc-icon,
                                .user-wrap .acc-desk a.acc-ti[aria-expanded="true"] span.acc-icon {
                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-icon,
                                .user-wrap .acc-desk a.acc-ti:hover span.acc-icon {
                                    -webkit-transition: all 0.3s ease-in-out 0s;
                                    -o-transition: all 0.3s ease-in-out 0s;
                                    transition: all 0.3s ease-in-out 0s;
                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-detail {
                                    display: none;

                                    margin-left: 10px;

                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-detail span.acc-text {
                                    display: block;
                                    font-size: 16px;
                                    font-weight: 500;
                                    text-transform: capitalize;
                                }

                                .user-wrap .acc-desk a.acc-ti span.acc-detail span.acc-user {
                                    display: block;
                                    color: #ddd;
                                    margin-top: 5px;
                                    text-transform: capitalize;
                                }

                                .user-wrap .acc-desk a.acc-ti::after {
                                    content: "\f107";
                                    font-family: FontAwesome;
                                    position: absolute;

                                    right: 0;

                                    bottom: 50%;
                                    transform: translateY(50%);
                                }

                                .user-wrap .acc-desk .acc-re-lo {
                                    position: absolute;

                                    right: 0;

                                    top: calc(100% + 10px);
                                    width: 150px;
                                    background-color: #fff;
                                    border: 1px solid #e2e2e2;
                                    z-index: 2;
                                }

                                .user-wrap .acc-desk .acc-re-lo a {
                                    display: block;
                                    color: #222;
                                    font-size: 13px;
                                    padding: 10px 15px;
                                    border-top: 1px solid #e2e2e2;
                                }

                                .user-wrap .acc-desk .acc-re-lo a:first-child {
                                    border-top: none;
                                }

                                .user-wrap .acc-desk .acc-re-lo a:hover {
                                    background-color: #f5f5f5;
                                }

                                @media (max-width: 1199px) {
                                    .user-wrap .acc-desk a.acc-ti span.acc-icon {
                                    }

                                    .user-wrap .acc-desk a.acc-ti span.acc-detail {
                                        display: none;
                                    }
                                }

                                @media (max-width: 767px) {
                                    .user-wrap .acc-desk .acc-re-lo {

                                        left: 0;
                                        right: auto;

                                    }
                                }
                            </style>
                        </div>
                        <div class="currency-wrap">
                            <span style="display:none;" class="BOLD-mc-picker-mnt " data-open="up"
                                  data-bold-mc-picker-mnt></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<style>
    .top-notification-bar {
        padding: 10px 0;
        position: relative;
        background-color: #105caa;
    }

    .top-notification-bar ul.notification-entry {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .top-notification-bar ul li.notify-wrap {
        display: flex;
        align-items: center;
    }

    .top-notification-bar ul li.notify-wrap p {
        color: #fff;
        text-transform: capitalize;
        line-height: normal;
    }

    .top-notification-bar ul li.notify-wrap .mail-wrap {

        margin-left: 15px;

    }

    .top-notification-bar ul li.notify-wrap .contact-wrap a,
    .top-notification-bar ul li.notify-wrap .mail-wrap a {
        color: #fff;
        display: flex;
        align-items: center;
    }

    .top-notification-bar ul li.notify-wrap .contact-wrap a i,
    .top-notification-bar ul li.notify-wrap .mail-wrap a i {
        line-height: 17px;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        animation-name: wobble;
        animation-timing-function: ease-in-out
    }

    @keyframes wobble {
        30%, 70% {
            transform: rotate(0deg)
        }
        35%, 65% {
            transform: rotate(10deg)
        }
        40%, 60% {
            transform: rotate(-10deg)
        }
        45%, 55% {
            transform: rotate(10deg)
        }
        50% {
            transform: rotate(-10deg)
        }
    }

    .top-notification-bar ul li.notify-wrap .contact-wrap a span,
    .top-notification-bar ul li.notify-wrap .mail-wrap a span {

        margin-left: 5px;

    }

    .top-notification-bar ul li.notify-wrap .user-wrap {

        margin-right: 15px;

    }

    @media (max-width: 767px) {
        .top-notification-bar ul li.notify-wrap:nth-child(1) {
            display: none;
        }

        .top-notification-bar ul li.notify-wrap {
            width: 100%;
            justify-content: space-between;
        }

        .top-notification-bar ul li.notify-wrap .wishlist-wrap {

            margin-right: 0px;

        }
    }

    .top-notification-bar ul li.notify-wrap .currency-wrap {
        display: flex;
        align-items: center;
    }

    .top-notification-bar ul li.notify-wrap .currency-wrap .BOLD-mc-picker-mnt {

        margin-left: 5px;

    }

    /* currency css */
    .top-notification-bar .BOLD-mc-picker {
        height: auto;
    }

    .top-notification-bar .BOLD-mc-picker.open {
        width: auto;
    }

    .top-notification-bar .BOLD-mc-picker > .currencyList > .option:hover {
        background-color: #f5f5f5;
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency {
        color: #fff;

        padding: 0 15px 0 0;

        width: auto;
        position: relative;
        border: none;
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency:hover {
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency,
    .top-notification-bar .BOLD-mc-picker > .currencyList > .option {
        height: auto;
        background-color: transparent;
        line-height: normal;
        box-shadow: none;
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency > .chevron {

        right: 5px;

        top: 50%;
        margin-left: 0;
        display: none;
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency::after {
        content: "\f107";
        font-family: FontAwesome;
        position: absolute;

        right: 0;

        bottom: 50%;
        transform: translateY(50%);
    }

    .top-notification-bar .BOLD-mc-picker-mnt[data-open="up"] > .BOLD-mc-picker > .currencyList {
        top: calc(100% + 10px);
        bottom: auto;
    }

    .top-notification-bar .BOLD-mc-picker-mnt[data-open="down"] > .BOLD-mc-picker > .currencyList {
        bottom: auto;
        top: 31px;
    }

    .top-notification-bar .BOLD-mc-picker > .currencyList::-webkit-scrollbar {
        width: 1px;
        background-color: #e2e2e2;
    }

    .top-notification-bar .BOLD-mc-picker > .currencyList {
        display: block !important;

        left: auto;
        right: 0;

        -webkit-transform: translateX(0%);
        transform: translateX(0%);
        padding: 0;
        width: 125px;
        background-color: #fff;
        max-height: 0;
        z-index: 2;
        border: none;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .top-notification-bar .BOLD-mc-picker.open > .currencyList {
        max-height: 109px;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .top-notification-bar .BOLD-mc-picker > .currencyList > .option {
        color: #222;
        font-size: 13px;
        padding: 8px 15px;
        width: 100%;
        border: 1px solid #e2e2e2;
        margin-top: -1px;

    }

    .top-notification-bar .BOLD-mc-picker > .currencyList > .option:first-child {
        margin-top: 0;
    }

    .top-notification-bar .BOLD-mc-picker > .currentCurrency > .flag,
    .top-notification-bar .BOLD-mc-picker > .currencyList > .option > .flag {
        display: none;
    }
</style>

<div id="shopify-section-header" class="shopify-section"><!-- header-area start -->
    <section class="header-kaj">
        <div class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <button class="navbar-toggler" type="button">
                                    <span class="line"></span>
                                </button>
                                <div class="header-element logo"><a href="/" class="theme-logo">
                                        <img
                                            src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/logo.png?v=1605095158"
                                            alt="electon-store">
                                    </a>
                                    <style>
                                        .logo a.shop-name span {
                                            color: #000;
                                            font-size: 24px;
                                            font-weight: 600;
                                        }
                                    </style>
                                </div>
                                <div class="header-element search-wrap"><!-- /snippets/search-bar.liquid -->

                                    <div class="search-rap">
                                        <a class="search-crap" data-toggle="collapse" href="#search-crap">
                                            <i class="ti-search"></i>
                                        </a>
                                        <div class="crap-search collapse" id="search-crap">
                                            <form action="/search" method="get" class="search-bar" role="search">
                                                <div class="form-search">
                                                    <input type="hidden" name="type" value="product">
                                                    <input type="hidden" name="options[unavailable_products]"
                                                           value="show">
                                                    <input type="hidden" name="options[prefix]" value="last">
                                                    <input type="search" name="q" value=""
                                                           placeholder="Search our catalog" id="search"
                                                           class="input-text" aria-label="Search our store">
                                                    <!-- <button class="search-btn" type="submit"><i class="ti-search"></i></button> -->
                                                    <button class="search-btn" type="submit">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <style>
                                        .search-rap a.search-crap {
                                            display: block;
                                            font-size: 26px;
                                            line-height: 0;
                                        }

                                        .search-rap .form-search {
                                            position: relative;
                                        }

                                        .search-rap .form-search input.input-text {
                                            width: 100%;
                                            height: 42px;
                                            background-color: #fff;
                                            border-radius: 5px;
                                        }

                                        .search-rap .form-search button {
                                            font-size: 16px;
                                            color: #fff;
                                            padding: 10px 25px;
                                            position: absolute;
                                            top: 0px;

                                            right: 0;
                                            border-radius: 0px 5px 5px 0px;

                                            height: 100%;
                                            width: auto;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            background-color: #105caa;
                                            text-transform: uppercase;

                                        }

                                        .search-rap .form-search button:hover {
                                            background-color: #222222;
                                        }

                                        @media (max-width: 1199px) {
                                            .search-rap .crap-search.collapse:not(.show) {
                                                display: block;
                                            }
                                        }
                                    </style>
                                </div>
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap wishlist-wrap">
                                            <div class="wishlist">

                                                <a class="header-wishlist" href="/account/login" title="Wishlist">
                                                    <span class="wishlist-icon"><i class="ti-heart"></i></span>
                                                    <span class="wishlist-counter">0</span>
                                                </a>

                                            </div>
                                            <style>
                                                .wishlist {
                                                    position: relative;
                                                }

                                                .wishlist a.header-wishlist {
                                                    display: block;
                                                    align-items: center;
                                                    position: relative;
                                                }

                                                .wishlist a.header-wishlist span.wishlist-icon {
                                                    display: block;
                                                    color: #222;
                                                    font-size: 26px;
                                                    line-height: 0;
                                                }

                                                .wishlist a.header-wishlist:hover span.wishlist-icon {
                                                    color: #222;
                                                }

                                                .wishlist a.header-wishlist span.wishlist-counter {
                                                    color: #fff;
                                                    font-size: 11px;
                                                    position: absolute;
                                                    top: -5px;

                                                    right: -5px;

                                                    width: 15px;
                                                    height: 15px;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    background-color: #105caa;
                                                    border-radius: 50%;
                                                    line-height: 1;
                                                }

                                                .wishlist a.header-wishlist:hover span.wishlist-counter {
                                                    background-color: #222222;
                                                }

                                                .wishlist a.header-wishlist span.wishlist-icon,
                                                .wishlist a.header-wishlist:hover span.wishlist-icon,
                                                .wishlist a.header-wishlist span.wishlist-counter,
                                                .wishlist a.header-wishlist:hover span.wishlist-counter {
                                                    -webkit-transition: all 0.3s ease-in-out 0s;
                                                    -o-transition: all 0.3s ease-in-out 0s;
                                                    transition: all 0.3s ease-in-out 0s;
                                                }
                                            </style>
                                        </li>
                                        <li class="side-wrap cart-wrap">


                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a class="cart-count" data-toggle="collapse" href="#cart">
      <span class="cart-icon-wrap">
        <span class="cart-icon"><i class="ti-shopping-cart"></i></span>
        <span id="cart-total" class="bigcounter">0</span>
      </span>
                                                        <span class="cart-detail">
        <span class="cart-title">My cart</span>
        <span id="cart-total" class="subtotal-price"><span class=money>Rs. 0.00</span></span>
      </span>
                                                    </a>
                                                    <div class="mini-cart collapse" id="cart">
                                                        <!--       <a href="javascript:void(0)" class="shopping-cart-close">
        <i class="ion-close-round"></i>
      </a> -->
                                                        <div class="cart-tempty-title" style="display:block;">
                                                            <p>No products in the cart.</p>
                                                            <ul class="cart-item-loop-empty">
                                                                <li class="cart-item-empty">
                                                                    <span><i class="ti-bag"></i></span>
                                                                    <a href="/collections/all" class="btn btn-style2">Continue
                                                                        shopping</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="cart-item-title" style="display:none;">
                                                            <p>
                                                                <span class="cart-count-desc">There are</span>
                                                                <span id="cart-total"
                                                                      class="cart-count-item bigcounter">0</span>
                                                                <span class="cart-count-desc">products</span>
                                                            </p>
                                                        </div>
                                                        <ul class="cart-item-loop" style="display:none;">

                                                        </ul>
                                                        <ul class="subtotal-title-area" style="display:none;">
                                                            <li class="subtotal-info">
                                                                <div class="subtotal-titles">
                                                                    <h3>Sub Total:</h3>
                                                                    <span id="cart-total" class="subtotal-price"><span
                                                                            class=money>Rs. 0.00</span></span>
                                                                </div>
                                                            </li>
                                                            <li class="mini-cart-btns">
                                                                <div class="cart-btns">
                                                                    <a href="/cart" class="btn btn-style2">View Cart</a>
                                                                    <a href="/checkout"
                                                                       class="btn btn-style2">Checkout</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .shopping-widget .shopping-cart {
                                                    position: relative;
                                                }

                                                .shopping-widget .shopping-cart a {
                                                    display: block;
                                                    align-items: center;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap {
                                                    display: block;
                                                    position: relative;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon {
                                                    display: block;
                                                    font-size: 26px;
                                                    line-height: 0;
                                                    -webkit-transform: scaleX(-1);
                                                    -o-transform: scaleX(-1);
                                                    transform: scaleX(-1);
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon,
                                                .shopping-widget .shopping-cart a[aria-expanded="false"] span.cart-icon-wrap span.cart-icon {
                                                    color: #222;
                                                }

                                                .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.cart-icon,
                                                .shopping-widget .shopping-cart a[aria-expanded="true"] span.cart-icon-wrap span.cart-icon {
                                                    color: #222;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter {
                                                    color: #fff;
                                                    font-size: 11px;
                                                    position: absolute;
                                                    top: -5px;

                                                    right: -5px;

                                                    width: 15px;
                                                    height: 15px;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    border-radius: 50%;
                                                    line-height: 1;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter,
                                                .shopping-widget .shopping-cart a[aria-expanded="false"] span.cart-icon-wrap span.bigcounter {
                                                    background-color: #105caa;
                                                }

                                                .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.bigcounter,
                                                .shopping-widget .shopping-cart a[aria-expanded="true"] span.cart-icon-wrap span.bigcounter {
                                                    background-color: #105caa;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon,
                                                .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.cart-icon,
                                                .shopping-widget .shopping-cart a span.cart-icon-wrap span.bigcounter,
                                                .shopping-widget .shopping-cart a:hover span.cart-icon-wrap span.bigcounter {
                                                    -webkit-transition: all 0.3s ease-in-out 0s;
                                                    -o-transition: all 0.3s ease-in-out 0s;
                                                    transition: all 0.3s ease-in-out 0s;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-detail {
                                                    display: none;

                                                    margin-left: 10px;

                                                }

                                                .shopping-widget .shopping-cart a span.cart-detail span.cart-title {
                                                    display: block;
                                                    color: #fff;
                                                    font-size: 16px;
                                                    font-weight: 500;
                                                    text-transform: capitalize;
                                                }

                                                .shopping-widget .shopping-cart a span.cart-detail span.subtotal-price {
                                                    display: block;
                                                    color: #ddd;
                                                    margin-top: 5px;
                                                    text-transform: capitalize;
                                                }

                                                @media (max-width: 1199px) {
                                                    .shopping-widget .shopping-cart a span.cart-icon-wrap span.cart-icon {
                                                        font-size: 24px;
                                                    }

                                                    .shopping-widget .shopping-cart a span.cart-detail {
                                                        display: none;
                                                    }
                                                }

                                                /* mini cart item css */
                                                .shopping-cart .mini-cart {
                                                    position: absolute;
                                                    top: calc(100% + 29px);

                                                    right: 0;

                                                    width: 290px;
                                                    background-color: #fff;
                                                    border: 1px solid #e2e2e2;
                                                    z-index: 3;
                                                }

                                                .shopping-cart .mini-cart .cart-tempty-title p,
                                                .shopping-cart .mini-cart .cart-item-title p {
                                                    padding: 10px 15px;
                                                    line-height: normal;
                                                }

                                                .shopping-cart .mini-cart .cart-item-title p span.cart-count-item {
                                                    color: #105caa;
                                                    font-weight: 600;
                                                }

                                                @media (max-width: 1199px) {
                                                    .shopping-cart .mini-cart {
                                                        top: calc(100% + 20px);
                                                    }
                                                }

                                                @media (max-width: 767px) {
                                                }

                                                /* mini cart empty css */
                                                .mini-cart .cart-tempty-title ul.cart-item-loop-empty {
                                                    text-align: center;
                                                }

                                                .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty {
                                                    padding: 15px;
                                                    display: flex;
                                                    align-items: center;
                                                    flex-direction: column;
                                                    border-top: 1px solid #e2e2e2;
                                                }

                                                .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty span {
                                                    display: block;
                                                    font-size: 90px;
                                                    opacity: 0.5;
                                                    line-height: 0;
                                                }

                                                .mini-cart .cart-tempty-title ul.cart-item-loop-empty li.cart-item-empty a {
                                                    margin-top: 15px;
                                                }

                                                /* scroll css */
                                                .mini-cart ul.cart-item-loop {
                                                    display: flex;
                                                    flex-direction: column;
                                                    max-height: 242px;
                                                    overflow-y: auto;
                                                    border-top: 1px solid #e2e2e2;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item {
                                                    width: 100%;
                                                    display: flex;
                                                    padding: 15px;
                                                    border-bottom: 1px solid #e2e2e2;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item:last-child {
                                                    border-bottom: none;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-image {
                                                    width: 70px;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-image a {
                                                    border: 1px solid #e2e2e2;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title {
                                                    width: calc(100% - 85px);

                                                    margin-left: 15px;

                                                    overflow: hidden;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title h6 {
                                                    font-size: 14px;
                                                    font-weight: 400;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title h6 a {
                                                    color: #222222;
                                                    white-space: nowrap;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    display: block;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title h6 a:hover {
                                                    color: #105caa;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                    margin-top: 5px;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title .price-box .new-price {
                                                    color: #105caa;
                                                }

                                                .mini-cart ul.cart-item-loop li.cart-item .cart-title .cart-pro-info .delete-item-cart a {
                                                    font-size: 18px;
                                                    font-weight: 600;
                                                }

                                                .mini-cart ul.subtotal-title-area {
                                                    display: flex;
                                                    flex-direction: column;
                                                    background-color: #fff;
                                                }

                                                .mini-cart ul.subtotal-title-area li {
                                                    padding: 15px;
                                                    border-top: 1px solid #e2e2e2;
                                                }

                                                .mini-cart ul.subtotal-title-area li.subtotal-info {
                                                    padding: 10px 15px;
                                                }

                                                .mini-cart ul.subtotal-title-area li .subtotal-titles {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                }

                                                .mini-cart ul.subtotal-title-area li .subtotal-titles h3 {
                                                    font-size: 14px;
                                                    font-weight: 400;
                                                }

                                                .mini-cart ul.subtotal-title-area li .subtotal-titles span.subtotal-price {
                                                    color: #105caa;
                                                    font-weight: 600;
                                                }

                                                .mini-cart ul.subtotal-title-area li .cart-btns {
                                                    display: flex;
                                                    -ms-flex-wrap: wrap;
                                                    flex-wrap: wrap;

                                                    margin-left: -15px;

                                                }

                                                .mini-cart ul.subtotal-title-area li .cart-btns a {
                                                    width: calc(50% - 15px);

                                                    margin-left: 15px;

                                                }
                                            </style>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search-wrap"><!-- /snippets/search-bar.liquid -->

                            <div class="search-rap">
                                <a class="search-crap" data-toggle="collapse" href="#search-crap">
                                    <i class="ti-search"></i>
                                </a>
                                <div class="crap-search collapse" id="search-crap">
                                    <form action="/search" method="get" class="search-bar" role="search">
                                        <div class="form-search">
                                            <input type="hidden" name="type" value="product">
                                            <input type="hidden" name="options[unavailable_products]" value="show">
                                            <input type="hidden" name="options[prefix]" value="last">
                                            <input type="search" name="q" value="" placeholder="Search our catalog"
                                                   id="search" class="input-text" aria-label="Search our store">
                                            <!-- <button class="search-btn" type="submit"><i class="ti-search"></i></button> -->
                                            <button class="search-btn" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <style>
                                .search-rap a.search-crap {
                                    display: block;
                                    font-size: 26px;
                                    line-height: 0;
                                }

                                .search-rap .form-search {
                                    position: relative;
                                }

                                .search-rap .form-search input.input-text {
                                    width: 100%;
                                    height: 42px;
                                    background-color: #fff;
                                    border-radius: 5px;
                                }

                                .search-rap .form-search button {
                                    font-size: 16px;
                                    color: #fff;
                                    padding: 10px 25px;
                                    position: absolute;
                                    top: 0px;

                                    right: 0;
                                    border-radius: 0px 5px 5px 0px;

                                    height: 100%;
                                    width: auto;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    background-color: #105caa;
                                    text-transform: uppercase;

                                }

                                .search-rap .form-search button:hover {
                                    background-color: #222222;
                                }

                                @media (max-width: 1199px) {
                                    .search-rap .crap-search.collapse:not(.show) {
                                        display: block;
                                    }
                                }
                            </style>
                        </div>
                        <div class="main-menu-area">
                            <nav class="main-navigation navbar-expand-xl">
                                <div class="box-header">
                                    <button class="close-box" type="button"><i class="ti-close"></i></button>
                                </div>
                                <div class="navbar-collapse" id="navbarContent">
                                    <div class="vegamenu-content">
                                        <a href="#vega-collapse" class="browse-cat" data-toggle="collapse"
                                           aria-expanded="false">
                                            <i class="ti-menu"></i>
                                            <span>Top Categories</span>
                                        </a>
                                        <div class="vegawrap collapse" id="vega-collapse">
                                            <ul class="vega-menu">


                                                <li class="menu-link">
                                                    <a href="/collections/computer" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro30_28x28_crop_center.jpg?v=1607070148"
                                                             alt="Computer"/>

                                                        <span class="sp-link-title">Computer</span>
                                                    </a>
                                                    <a href="{{url("collections/computer")}}" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro30_28x28_crop_center.jpg?v=1607070148"
                                                             alt="Computer"/>

                                                        <span class="sp-link-title">Computer</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="{{url("/collections/smartphone")}}" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro18_28x28_crop_center.jpg?v=1607070218"
                                                             alt="Smartphone"/>

                                                        <span class="sp-link-title">Smartphone</span>
                                                    </a>
                                                    <a href="{{url("/collections/smartphone")}}" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro18_28x28_crop_center.jpg?v=1607070218"
                                                             alt="Smartphone"/>

                                                        <span class="sp-link-title">Smartphone</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link parant">
                                                    <a class="link-title" href="javascript:void(0)">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro38_28x28_crop_center.jpg?v=1607070245"
                                                             alt="Camera"/>

                                                        <span class="sp-link-title">Camera</span>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#collapse-camera"
                                                       class="link-title link-title-lg">
                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro38_28x28_crop_center.jpg?v=1607070245"
                                                             alt="Camera"/>

                                                        <span class="sp-link-title">Camera</span>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="collapse-camera">


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Laptop & PC</h2>
                                                            <a data-toggle="collapse" href="#collapse-laptop-pc"
                                                               class="sublink-title">
                                                                <span>Laptop & PC</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-laptop-pc">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Charger</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Mobile</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/speakers"
                                                                       class="suplink-title">Speakers</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Watch</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Pen drives</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Headphone</h2>
                                                            <a data-toggle="collapse" href="#collapse-headphone"
                                                               class="sublink-title">
                                                                <span>Headphone</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-headphone">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Smartphone</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Speakers</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Wireless</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Mouse</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Keyboard</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Smart TV</h2>
                                                            <a data-toggle="collapse" href="#collapse-smart-tv"
                                                               class="sublink-title">
                                                                <span>Smart TV</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-smart-tv">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Lg TV</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Samsung</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Headphone</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="{{url("/collections/camera")}}" class="suplink-title">Camera</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer" class="suplink-title">Laptop</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="menu-banner">
                                                            <a href="/collections/headphone" class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_200x200_crop_center.jpg?v=1605005220">
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link parant">
                                                    <a class="link-title" href="javascript:void(0)">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_28x28_crop_center.jpg?v=1605005220"
                                                             alt="Headphone"/>

                                                        <span class="sp-link-title">Headphone</span>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#collapse-headphone"
                                                       class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_28x28_crop_center.jpg?v=1605005220"
                                                             alt="Headphone"/>

                                                        <span class="sp-link-title">Headphone</span>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="collapse-headphone">


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Laptop & PC</h2>
                                                            <a data-toggle="collapse" href="#collapse-laptop-pc"
                                                               class="sublink-title">
                                                                <span>Laptop & PC</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-laptop-pc">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer" class="suplink-title">Charger</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="{{url("/collections/camera")}}" class="suplink-title">Cover</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="{{url("/collections/camera")}}" class="suplink-title">Camera</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Headphone</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">I phone</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Headphone</h2>
                                                            <a data-toggle="collapse" href="#collapse-headphone"
                                                               class="sublink-title">
                                                                <span>Headphone</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-headphone">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Wireless</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Bose</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Sennheiser</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Audio Technica</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/home-appliance"
                                                                       class="suplink-title">Pen drives</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Appliances</h2>
                                                            <a data-toggle="collapse" href="#collapse-appliances"
                                                               class="sublink-title">
                                                                <span>Appliances</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-appliances">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/home-appliance"
                                                                       class="suplink-title">USB port</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/home-appliance"
                                                                       class="suplink-title">Pen drives</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/home-appliance"
                                                                       class="suplink-title">Memory card</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Data Cable</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Watch</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Mobile</h2>
                                                            <a data-toggle="collapse" href="#collapse-mobile"
                                                               class="sublink-title">
                                                                <span>Mobile</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse" id="collapse-mobile">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Apple</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Samsung</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Realme</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Nokia</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Sony</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <div class="menu-banner bottom">
                                                            <a href="/collections/refrigerator" class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu5_e9e8b900-53d0-46f2-9448-8d8d66ee77c3.jpg?v=1605012483">
                                                            </a>
                                                        </div>


                                                        <div class="menu-banner bottom">
                                                            <a href="/collections/pen-drives" class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu5.jpg?v=1605012700">
                                                            </a>
                                                        </div>


                                                    </ul>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/computer" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro11_28x28_crop_center.jpg?v=1607070185"
                                                             alt="Laptop"/>

                                                        <span class="sp-link-title">Laptop</span>
                                                    </a>
                                                    <a href="/collections/computer" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro11_28x28_crop_center.jpg?v=1607070185"
                                                             alt="Laptop"/>

                                                        <span class="sp-link-title">Laptop</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/speakers" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu4_28x28_crop_center.jpg?v=1605007722"
                                                             alt="Speakers"/>

                                                        <span class="sp-link-title">Speakers</span>
                                                    </a>
                                                    <a href="/collections/speakers" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu4_28x28_crop_center.jpg?v=1605007722"
                                                             alt="Speakers"/>

                                                        <span class="sp-link-title">Speakers</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/home-appliance" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu3_28x28_crop_center.jpg?v=1605007765"
                                                             alt="Home Appliance"/>

                                                        <span class="sp-link-title">Home Appliance</span>
                                                    </a>
                                                    <a href="/collections/home-appliance"
                                                       class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu3_28x28_crop_center.jpg?v=1605007765"
                                                             alt="Home Appliance"/>

                                                        <span class="sp-link-title">Home Appliance</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/computer" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro11_28x28_crop_center.jpg?v=1607070185"
                                                             alt="Laptop"/>

                                                        <span class="sp-link-title">Macbook</span>
                                                    </a>
                                                    <a href="/collections/computer" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro11_28x28_crop_center.jpg?v=1607070185"
                                                             alt="Laptop"/>

                                                        <span class="sp-link-title">Macbook</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/computer" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro30_28x28_crop_center.jpg?v=1607070148"
                                                             alt="Computer"/>

                                                        <span class="sp-link-title">Smart TV</span>
                                                    </a>
                                                    <a href="/collections/computer" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro30_28x28_crop_center.jpg?v=1607070148"
                                                             alt="Computer"/>

                                                        <span class="sp-link-title">Smart TV</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/electronic" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu2_28x28_crop_center.jpg?v=1605007745"
                                                             alt="Electronic"/>

                                                        <span class="sp-link-title">Pen drives</span>
                                                    </a>
                                                    <a href="/collections/electronic" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu2_28x28_crop_center.jpg?v=1605007745"
                                                             alt="Electronic"/>

                                                        <span class="sp-link-title">Pen drives</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="/collections/smartphone" class="link-title">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro18_28x28_crop_center.jpg?v=1607070218"
                                                             alt="Smartphone"/>

                                                        <span class="sp-link-title">Mobile</span>
                                                    </a>
                                                    <a href="/collections/smartphone" class="link-title link-title-lg">


                                                        <img class="img-fluid"
                                                             src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/pro18_28x28_crop_center.jpg?v=1607070218"
                                                             alt="Smartphone"/>

                                                        <span class="sp-link-title">Mobile</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="megamenu-content">
                                        <a href="#main-collapse" class="browse-cat" data-toggle="collapse"
                                           aria-expanded="false">
                                            <i class="ti-menu"></i>
                                            <span>Menu</span>
                                        </a>
                                        <div class="mainwrap collapse" id="main-collapse">
                                            <ul class="main-menu">


                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>

                                                <li class="menu-link parant">
                                                    <a class="link-title" href="JavaScript:void(0)">
                                                        <span class="sp-link-title">Catalog</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#collapse-Catalog"
                                                       class="link-title link-title-lg">
                                                        <span class="sp-link-title">Catalog</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="collapse-Catalog">


                                                        <li class="menu-banner">
                                                            <a href="{{url("collections/headphone")}}"
                                                               class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_180x220_crop_center.jpg?v=1605005220">
                                                            </a>
                                                            <a href="{{url("collections/headphone")}}"
                                                               class="menu-banner-title">
                                                                <span>Headphone</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-banner">
                                                            <a href="{{url("collections/electronic")}}"
                                                               class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu2_180x220_crop_center.jpg?v=1605007745">
                                                            </a>
                                                            <a href="{{url("collections/electronic")}}"
                                                               class="menu-banner-title">
                                                                <span>Electronic</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-banner">
                                                            <a href="{{url("collections/home-appliance")}}"
                                                               class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu3_180x220_crop_center.jpg?v=1605007765">
                                                            </a>
                                                            <a href="{{url("collections/home-appliance")}}"
                                                               class="menu-banner-title">
                                                                <span>Home Appliance</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-banner">
                                                            <a href="{{url("collections/speakers")}}"
                                                               class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu4_180x220_crop_center.jpg?v=1605007722">
                                                            </a>
                                                            <a href="{{url("collections/speakers")}}"
                                                               class="menu-banner-title">
                                                                <span>Speakers</span>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link">
                                                    <a href="{{url("/collections/camera")}}" class="link-title">
                                                        <span class="sp-link-title">Camera</span>
                                                    </a>
                                                    <a href="{{url("/collections/camera")}}" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Camera</span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link parant">
                                                    <a class="link-title" href="JavaScript:void(0)">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#collapse-Collection"
                                                       class="link-title link-title-lg">
                                                        <span class="sp-link-title">Collection</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="collapse-Collection">


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Accessories</h2>
                                                            <a data-toggle="collapse" href="#collapse-Accessories"
                                                               class="sublink-title">
                                                                <span>Accessories</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-Accessories">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/headphone"
                                                                       class="suplink-title">Headphone</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Mouse</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/home-appliance"
                                                                       class="suplink-title">Cover</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Charger</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/electronic"
                                                                       class="suplink-title">Pen drives</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Computer</h2>
                                                            <a data-toggle="collapse" href="#collapse-Computer"
                                                               class="sublink-title">
                                                                <span>Computer</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-Computer">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">HP</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Dell</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Lenovo</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Macbook</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/computer"
                                                                       class="suplink-title">Acer</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="megamenu-li parant">
                                                            <h2 class="sublink-title">Smartphone</h2>
                                                            <a data-toggle="collapse" href="#collapse-Smartphone"
                                                               class="sublink-title">
                                                                <span>Smartphone</span>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-supmenu collapse"
                                                                id="collapse-Smartphone">

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Apple</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Nokia</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Realme</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Samsung</a>
                                                                </li>

                                                                <li class="supmenu-li">
                                                                    <a href="/collections/smartphone"
                                                                       class="suplink-title">Redmi</a>
                                                                </li>

                                                            </ul>
                                                        </li>


                                                        <li class="menu-banner">
                                                            <a href="/collections/headphone" class="banner-hover">
                                                                <img
                                                                    src="//cdn.shopify.com/s/files/1/0509/6331/6893/collections/mega-menu_180x220_crop_center.jpg?v=1605005220">
                                                            </a>
                                                            <a href="/collections/headphone" class="menu-banner-title">
                                                                <span>Headphone</span>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link parant" style="display: none">
                                                    <a class="link-title" href="JavaScript:void(0)">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a data-toggle="collapse" href="#collapse-Pages"
                                                       class="link-title link-title-lg">
                                                        <span class="sp-link-title">Pages</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu collapse" id="collapse-Pages">


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/about-us" class="sublink-title">About us</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/contact-us" class="sublink-title">Contact
                                                                us</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/faqs" class="sublink-title">Faq's</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/payment-policy" class="sublink-title">Payment
                                                                policy</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/shipping-policy" class="sublink-title">Shipping
                                                                policy</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/sitemap" class="sublink-title">Sitemap</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/terms-condition" class="sublink-title">Terms
                                                                & condition</a>
                                                        </li>


                                                        <li class="submenu-li parant">
                                                            <a href="/pages/wishlist" class="sublink-title">Wishlist</a>
                                                        </li>


                                                    </ul>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                                <li class="menu-link" style="display: none">
                                                    <a href="https://themeforest.net/item/electon-the-electronics-gadgets-ecommerce-shopify-theme/29635247?s_rank=1"
                                                       class="link-title">
                                                        <span class="sp-link-title">Buy Electon <span
                                                                class="hot">HOT</span></span>
                                                    </a>
                                                    <a href="https://themeforest.net/item/electon-the-electronics-gadgets-ecommerce-shopify-theme/29635247?s_rank=1"
                                                       class="link-title link-title-lg">
                                                        <span class="sp-link-title">Buy Electon <span
                                                                class="hot">HOT</span></span>
                                                    </a>
                                                </li>

                                                <script>
                                                    $('.megamenu-li').parent('ul').addClass('mega-menu');
                                                    $('.menu-banner').parent('ul').addClass('banner-menu');
                                                    $('.submenu-li').parent('ul').addClass('sub-menu');
                                                </script>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header-area end -->
    <script>
        $(window).scroll(function () {
            var sticky = $(''),
                scroll = $(window).scrollTop();
            if (scroll >= 150) {
                sticky.addClass('is-sticky');
            } else {
                sticky.removeClass('is-sticky');
            }
        });
    </script>

    <style>
        /* sticky menu css */
        .is-sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 3;
        }

        .header-kaj.is-sticky {
            animation: smoothScroll 1s forwards;
        }

        @keyframes smoothScroll {
            0% {
                transform: translateY(-150px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        @media (max-width: 1199px) {
            .is-sticky {
                position: unset;
            }
        }

        /* accout css */
        .right-block-box {
            display: flex;
            justify-content: flex-end;
        }

        .right-block-box ul.shop-element {
            display: flex;
            align-items: center;
        }

        .right-block-box ul.shop-element li.side-wrap {
            position: relative;

            margin-right: 25px;

        }

        .right-block-box ul.shop-element li.side-wrap:last-child {

            margin-right: 0px;

        }

        .right-block-box ul.shop-element li.search-wrap .search-rap a.search-crap[aria-expanded="true"] i::before {
            content: "\e646";
        }

        .right-block-box ul.shop-element li.search-wrap .search-rap .crap-search {
            width: 320px;
            position: absolute;
            top: calc(100% + 35px);

            right: 0;

            z-index: 2;
        }

        .right-block-box ul.shop-element li.search-wrap .search-rap .crap-search .form-search button {
            background-color: #105caa;
        }

        @media (max-width: 1199px) {
            .right-block-box ul.shop-element li.side-wrap {

                margin-right: 15px;

            }

            .right-block-box ul.shop-element li.search-wrap {
                display: none;
            }
        }
    </style>
</div>
<main role="main">
    @yield("content")
</main>

<div class="mm-fullscreen-bg"></div>
<style>
    .mm-fullscreen-bg {
        position: fixed;
        top: 0;

        left: 0;

        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 2;
        opacity: 0;
        visibility: hidden;
    }

    .mm-fullscreen-bg.active {
        opacity: 1;
        visibility: visible;
    }

    .mm-fullscreen-bg,
    .mm-fullscreen-bg.active {
        -webkit-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }
</style>
<div id="shopify-section-brand-logo" class="shopify-section"><!-- our-brand-area start -->
    <section class="our-brand-logo">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="brand-logo owl-carousel owl-theme" id="brand-logo">

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo1.png?v=1606980320 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo2.png?v=1606980337 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo3.png?v=1606980351 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo4.png?v=1606980368 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo6.png?v=1606980382 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="brand-img">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid"
                                         src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/brand-logo5.png?v=1606980408 "
                                         alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our-brand-area end -->
    <script>
        $('#brand-logo').owlCarousel({
            loop: false,
            rewind: true,
            margin: 30,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: false, autoplay: true,
            sautoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 15
                },
                479: {
                    items: 2,
                    margin: 15
                },
                768: {
                    items: 4
                },
                979: {
                    items: 4
                },
                1199: {
                    items: 5
                }
            }
        });
    </script>


    <style>
        .our-brand-logo {
            padding-top: 60px;
            padding-bottom: 60px;

        }

        @media (max-width: 767px) {
            .our-brand-logo {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        .our-brand-logo .brand-logo .brand-img {
            text-align: center;
        }

        .our-brand-logo .brand-logo a img {
            opacity: 0.5;
        }

        .our-brand-logo .brand-logo a:hover img {
            opacity: 1;
        }

        .our-brand-logo .brand-logo a img,
        .our-brand-logo .brand-logo a:hover img {
            -webkit-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }
    </style>
</div>
<div id="shopify-section-newsletter" class="shopify-section">
    <section class="news-letter">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="newsletter-main">
                        <div class="newsletter">
                            <div class="news-con">

                                <div class="news-maintext">

                                    <h2 class="newstitle">Subscribe our newsletter</h2>


                                    <p class="newstext">Get 25% Off First Purchase!</p>

                                </div>
                            </div>
                            <div class="subscribe-content">
                                <div class="news-content">
                                    <form method="post" action="/contact#contact_form" id="contact_form"
                                          accept-charset="UTF-8" class="contact-form"><input type="hidden"
                                                                                             name="form_type"
                                                                                             value="customer"/><input
                                            type="hidden" name="utf8" value="✓"/>


                                        <input type="hidden" name="contact[tags]" value="newsletter">
                                        <div class="subscribe-block">
                                            <input type="email" name="contact[email]" class="email mail" id="E-mail"
                                                   value="" placeholder="Enter your mail.." autocapitalize="off">
                                            <div class="email-submit">
                                                <button type="submit" class="btn btn-style newsletter-btn" name="commit"
                                                        id="Subscribe">Subscribe
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-side-img"
                             style="background-image: url('//cdn.shopify.com/s/files/1/0509/6331/6893/files/newsletter.jpg?v=1605091385');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .news-letter {
            padding-top: 0px;
            padding-bottom: 0px;


            background-color: #f8f8f8;


            background-repeat: no-repeat;
            background-size: cover;

        }

        @media (max-width: 991px) {
            .news-letter {
                padding-top: 0px;
                padding-bottom: 40px;
            }
        }

        .news-letter .col {
            padding: 0;
        }

        .news-letter .newsletter-main {
            display: flex;
            align-items: center;
        }

        .newsletter {
            width: 50%;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 0 30px;
        }

        .newsletter .news-con {
            text-align: center;
        }

        .newsletter .news-con .news-maintext {
            margin-top: 12px;
        }

        .newsletter .news-con .news-maintext h2 {
            font-size: 24px;
            text-transform: capitalize;
            line-height: 1;
        }

        .newsletter .news-con .news-maintext p {
            max-width: 70%;
            margin: 4px auto 0;
        }

        .newsletter .subscribe-content {
            width: 70%;
            margin-top: 22px;
        }

        .newsletter .subscribe-content .news-content p.text-success {
            margin: -7px 0 7px;
            text-align: center;
        }

        .newsletter .subscribe-content .news-content .subscribe-block {
            display: flex;
        }

        .newsletter .subscribe-content .news-content .subscribe-block input {
            width: 100%;
            height: 45px;
            background-color: #fff;
            border: 1px solid #105caa;
        }

        .newsletter .subscribe-content .news-content .subscribe-block .email-submit button {
            height: 100%;
        }

        .newsletter-side-img {
            width: 50%;
            min-height: 430px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (max-width: 1199px) {
            .newsletter .news-con .news-maintext p {
                max-width: 100%;
            }

            .newsletter .subscribe-content {
                width: 100%;
            }
        }

        @media (max-width: 991px) {
            .newsletter .subscribe-content .news-content .subscribe-block {
                flex-direction: column;
                align-items: center;
            }

            .newsletter .subscribe-content .news-content .subscribe-block .email-submit {
                margin-top: 15px;
            }
        }

        @media (max-width: 767px) {
            .news-letter .newsletter-main {
                flex-direction: column-reverse;
            }

            .newsletter-side-img {
                width: 100%;
            }

            .newsletter {
                width: 100%;
                padding: 40px 15px 0;
            }

            .newsletter .news-con .news-maintext h2 {
                font-size: 18px;
            }

            .newsletter .news-con .news-maintext p {
                margin: 5px auto 0;
            }

            .newsletter .subscribe-content {
                margin-top: 12px;
            }

        }
    </style>
</div>
<div id="shopify-section-footer" class="shopify-section">
    <section class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-list-wrap">
                        <ul class="footer-list">
                            <li class="ftlink-li">
                                <div class="footer-info">
                                    <div class="logo"><a href="/" class="theme-logo">
                                            <img
                                                src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/logo-footer.png?v=1605095319"
                                                alt="electon-store">
                                        </a>
                                        <style>
                                            .logo a.shop-name span {
                                                color: #000;
                                                font-size: 24px;
                                                font-weight: 600;
                                            }
                                        </style>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majorited have suffered alteration.</p>
                                    </div>
                                </div>
                                <div class="footer-social">
                                    <ul class="social-icon">

                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                                <span></span>
                                            </a>
                                        </li>


                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                                <span></span>
                                            </a>
                                        </li>


                                        <li class="gplus">
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                                <span></span>
                                            </a>
                                        </li>


                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p"></i>
                                                <span></span>
                                            </a>
                                        </li>


                                        <li class="insta">
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                                <span></span>
                                            </a>
                                        </li>

                                    </ul>
                                    <style>
                                        /* social icon css */
                                        ul.social-icon {
                                            display: flex;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap;
                                        }

                                        ul.social-icon li {

                                            margin-right: 10px;

                                        }

                                        ul.social-icon li:last-child {

                                            margin-right: 0px;

                                        }

                                        ul.social-icon li a {
                                            font-size: 16px;
                                            width: 30px;
                                            height: 30px;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            background-color: #fff;
                                            border: 1px solid #fff;
                                        }

                                        ul.social-icon li a:hover {
                                            color: #fff;
                                        }

                                        ul.social-icon li.facebook a:hover {
                                            background-color: #3b5998;
                                            border: 1px solid #3b5998;
                                        }

                                        ul.social-icon li.twitter a:hover {
                                            background-color: #1da1f2;
                                            border: 1px solid #1da1f2;
                                        }

                                        ul.social-icon li.gplus a:hover {
                                            background-color: #DD4B39;
                                            border: 1px solid #DD4B39;
                                        }

                                        ul.social-icon li.pinterest a:hover {
                                            background-color: #c8232c;
                                            border: 1px solid #c8232c;
                                        }

                                        ul.social-icon li.insta a:hover {
                                            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                                            border: 1px solid #285AEB;
                                        }
                                    </style>
                                </div>
                            </li>

                            <li class="ftlink-li">
                                <h2 class="ft-title">Information</h2>
                                <a data-toggle="collapse" href="#collapse-Information" class="ft-title">
                                    <span>Information</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="footer-sublist collapse" id="collapse-Information">


                                    <li class="ftsublink-li">
                                        <a href="/pages/about-us" class="ft-sublink">About us</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/contact-us" class="ft-sublink">Contact us</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/faqs" class="ft-sublink">Faq's</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="https://electon-store.myshopify.com/cart" class="ft-sublink">My
                                            cart</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/wishlist" class="ft-sublink">Wishlist</a>
                                    </li>


                                </ul>
                            </li>

                            <li class="ftlink-li">
                                <h2 class="ft-title">Company</h2>
                                <a data-toggle="collapse" href="#collapse-Company" class="ft-title">
                                    <span>Company</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="footer-sublist collapse" id="collapse-Company">


                                    <li class="ftsublink-li">
                                        <a href="/pages/payment-policy" class="ft-sublink">Payment policy</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/privacy-policy" class="ft-sublink">Privacy policy</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/return-policy" class="ft-sublink">Return policy</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/shipping-policy" class="ft-sublink">Shipping policy</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/terms-condition" class="ft-sublink">Terms & condition</a>
                                    </li>


                                </ul>
                            </li>

                            <li class="ftlink-li">
                                <h2 class="ft-title">Products</h2>
                                <a data-toggle="collapse" href="#collapse-Products" class="ft-title">
                                    <span>Products</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="footer-sublist collapse" id="collapse-Products">


                                    <li class="ftsublink-li">
                                        <a href="/collections/new-products" class="ft-sublink">New products</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/collections/featured-products" class="ft-sublink">Featured
                                            products</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/collections/best-seller" class="ft-sublink">Best sales</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/collections/computer" class="ft-sublink">Computer</a>
                                    </li>


                                    <li class="ftsublink-li">
                                        <a href="/pages/sitemap" class="ft-sublink">Sitemap</a>
                                    </li>


                                </ul>
                            </li>

                            <li class="ftlink-li">
                                <h2 class="ft-title">Contact us</h2>
                                <a data-toggle="collapse" href="#collapse-Contact-us" class="ft-title">
                                    <span>Contact us</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="footer-sublist collapse" id="collapse-Contact-us">
                                    <li class="ftcon-li">

                                        <span class="con-icon"><i class="ti-location-pin"></i></span>

                                        <span class="con-add">

		<span>7882 Rd Reliance GIDC</span>


		<span>Parck Chowk Bazzar , New York</span>

	</span>
                                    </li class="ftcon-li">


                                    <li class="ftcon-li">

                                        <span class="con-icon"><i class="ti-mobile"></i></span>

                                        <a href="tel:(+33) 1 23 45 67 89" class="con-add">(+33) 1 23 45 67 89</a>
                                    </li class="ftcon-li">


                                    <li class="ftcon-li">

                                        <span class="con-icon"><i class="ti-email"></i></span>

                                        <a href="mailto:demo@demo.com" class="con-add">demo@demo.com</a>
                                    </li class="ftcon-li">

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .footer-top-area {
            padding-top: 60px;
            padding-bottom: 60px;


            background-color: #222222;

        }

        @media (max-width: 767px) {
            .footer-top-area {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        .footer-list-wrap ul.footer-list {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;

            margin-left: -30px;

        }

        .footer-list-wrap ul.footer-list li.ftlink-li {
            width: calc(16.66% - 30px);

            margin-left: 30px;

        }

        .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(1),
        .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(5) {
            width: calc(25% - 30px);
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .footer-info p {
            color: #666;
            margin-top: 23px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .footer-social {
            margin-top: 24px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .ft-title {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title {
            display: none;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li .footer-sublist.collapse:not(.show) {
            display: block;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li,
        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li {
            margin-top: 15px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child,
        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li:first-child {
            margin-top: 19px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a {
            color: #666;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a:hover {
            color: #fff;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a::before {
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a:hover::before {
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li a::before {
            -webkit-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li {
            display: flex;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li span.con-icon {
            color: #666;
            font-size: 20px;
            width: 30px;
            line-height: 21px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li span.con-add,
        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li a {
            color: #666;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li span.con-add span {
            display: block;
            margin-top: 5px;
        }

        .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li span.con-add span:first-child {
            margin-top: 0;
        }

        @media (max-width: 991px) {
            .footer-list-wrap ul.footer-list li.ftlink-li {
                margin-top: 15px;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li,
            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(1),
            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(5) {
                width: calc(100% - 30px);
            }

            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(1),
            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(2) {
                margin-top: 0;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-info {
                text-align: center;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-info p {
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-social {
                margin: 15px 0;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-social ul.social-icon {
                justify-content: center;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li h2.ft-title {
                display: none;
                text-transform: uppercase;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-bottom: 15px;
                border-bottom: 1px solid #444;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li a.ft-title[aria-expanded="true"] i {
                transform: rotate(-180deg);
            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-sublist.collapse:not(.show) {
                display: none;
            }

            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftsublink-li:first-child,
            .footer-list-wrap ul.footer-list li.ftlink-li ul.footer-sublist li.ftcon-li:first-child {
                margin-top: 15px;
            }
        }

        @media (max-width: 767px) {
            .footer-list-wrap ul.footer-list {

                margin-left: -15px;

            }

            .footer-list-wrap ul.footer-list li.ftlink-li,
            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(1),
            .footer-list-wrap ul.footer-list li.ftlink-li:nth-child(5) {
                width: calc(100% - 15px);

                margin-left: 15px;

            }

            .footer-list-wrap ul.footer-list li.ftlink-li .footer-info p {
                max-width: 100%;
            }
        }
    </style>
</div>
<div id="shopify-section-copy-right" class="shopify-section">
    <footer class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="ft-bottom">
                        <li class="copy-right">
                            <p>
                                <span>Copyright</span>
                                <i class="fa fa-copyright"></i>
                                <span>2020 Ecommerce by Spacingtech<sup>TM</sup></span>
                            </p>
                        </li>
                        <li class="payment-img">
                            <a href="javascript:void(0)" class="payment-icon">
                                <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p3.png?v=1605093090"
                                     class="img-fluid" alt="electon-store">
                                <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p1.png?v=1605093104"
                                     class="img-fluid" alt="electon-store">
                                <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p2.png?v=1605093119"
                                     class="img-fluid" alt="electon-store">
                                <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p4.png?v=1605093133"
                                     class="img-fluid" alt="electon-store">
                                <img src="//cdn.shopify.com/s/files/1/0509/6331/6893/files/p5.png?v=1605093145"
                                     class="img-fluid" alt="electon-store">
                            </a>
                            <style>
                                .payment-icon {
                                    display: flex;
                                }

                                .payment-icon img {

                                    margin-right: 5px;

                                }

                                }
                                .payment-icon img:last-child {

                                    margin-right: 0px;

                                }

                                }
                            </style>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <style>
        .footer-bottom-area {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #222222;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom-area .copy-right p {
            color: #666;
            font-weight: 300;
            text-transform: capitalize;
        }

        .footer-bottom-area ul.ft-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        @media (max-width: 991px) {
            .footer-bottom-area ul.ft-bottom {
                flex-direction: column;
                justify-content: center;
                padding-top: 0;
            }

            .footer-bottom-area ul.ft-bottom li {
                margin-top: 10px;
            }

            .footer-bottom-area ul.ft-bottom li:first-child {
                margin-top: 0;
            }
        }
    </style>
</div>
<a href="javascript:void(0)" id="top" class="scroll">
    <i class="ti-arrow-up"></i>
</a>
<style>
    a.scroll {
        color: #fff;
        position: fixed;
        bottom: 30px;

        right: 30px;

        height: 35px;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #105caa;
        border: 2px solid #fff;
        z-index: 2;
    }

    a.scroll:hover {
        color: #105caa;
        background-color: #fff;
        border: 2px solid #105caa;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 767px) {
        a.scroll {

            right: 15px;

        }
    }
</style>
<!-- Necessary JS -->
<script src="//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/fastclick.min.js?v=2972345853941092237"
        type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/timber.js?v=16600160701408434345"
        type="text/javascript"></script>

<script>

</script>
<div class="productmodal">
    <div class="modal fade" id="quickViewModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-quickview">Quickview</h6>
                    <button type="button" class="close" data-dismiss="modal"><i class="ti-close"></i></button>
                </div>
                <div class="modal-body">
                    <div class="quick-view-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="product-main-image__item">
                                <div class="img_box_1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-content">
                        <div class="product-title">
                            <h6 class="product_title">FROM_JS</h6>
                        </div>

                        <div class="price-box price-part">
                            <span class="new-price">jsprice</span>
                            <span class="old-price">jsprice</span>
                        </div>

                        <div class="product-ratting">
                            <div class="rating">FROM_JS</div>
                        </div>

                        <div class="product-desc">
                            <p class="product-short-desc"></p>
                        </div>

                        <form id="add-item-qv" action="/cart/add" method="post">
                            <div class="quick-view-select variants select-option-part"></div>
                            <div class="product-quantity-action">
                                <h6>Quntity:</h6>
                                <div class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input value="1" type="text" name="quantity" min="1" pattern="[0-9]*">
                                    </div>
                                </div>
                            </div>
                            <div class="quickview-buttons">
                                <button type="submit" class="addtocartqv" data-toggle="tooltip" data-placement="top"
                                        title="Add to cart">
                                    <span class="cart-title" id="AddToCartText">Add to cart</span>
                                </button>

                                <a class="btn wishlist" href="/account/login" data-toggle="tooltip" data-placement="top"
                                   title="Wishlist">Add to wishlist</a>

                                <style>
                                    .pro-detail-button a.wishlist {
                                        color: #fff;
                                        font-size: 14px;
                                        padding: 10px 15px;
                                        background-color: #222;
                                        text-align: center;
                                        text-transform: uppercase;
                                        font-weight: 400;
                                        border-radius: 0px;
                                        line-height: normal;
                                    }

                                    .pro-detail-button a.wishlist:hover {
                                        background-color: #105caa;
                                    }
                                </style>
                            </div>
                            <script>
                                jQuery('.addtocartqv').click(function (e) {
                                    e.preventDefault();
                                    Shopify.addItemFromForm('add-item-qv');
                                    jQuery('#quickViewModal').modal('hide');
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="quickViewModal_info" style="display: none;">
    <div class="button"></div>
    <div class="button_added"></div>
    <div class="button_error"></div>
    <div class="button_wait"></div>
</div>

<script>
    var mainImage = '';
    jQuery(function ($) {
        quiqview = function (product_handle) {
            Shopify.getProduct(product_handle);
        }
        Shopify.onProduct = function (product) {
            $('.viewfullinfo').attr('href', product.url);

            // product description without shortcode
            text_truncate = function (str, length, ending) {
                if (length == null) {
                    length = 500;
                }
                if (ending == null) {
                    ending = '...';
                }
                if (str.length > length) {
                    return str.substring(0, length - ending.length) + ending;
                } else {
                    return str;
                }
            };
            var _parent = '#quickViewModal';
            $(_parent + ' .product_title').text(product.title);

            // product rating
            $(_parent + ' .rating').empty();
            $(_parent + ' .rating').append("<span class=\"shopify-product-reviews-badge\" data-id=\"" + product.id + "\"></span>");

            //check variants
            var variant = '';
            for (i = 0; i < product.variants.length; i++) {
                if (product.variants[i].inventory_quantity > 0) {
                    variant = product.variants[i];
                    break;
                }
            }
            if (variant == '') {
                for (i = 0; i < product.variants.length; i++) {
                    if (product.variants[i].inventory_policy == "continue") {
                        variant = product.variants[i];
                        break;
                    }
                }
                if (variant == '') {
                    variant = product.variants[0];
                }
            }

            mainImage = product.featured_image;
            var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
            var imgurl = "<img class=\"full-width img-fluid\" alt=\"\" src = \"" + shopifyimgurl + "\" >";
            jQuery(_parent + ' .product-main-image__item .img_box_1').empty();
            jQuery(_parent + ' .product-main-image__item .img_box_1').append(imgurl);
            jQuery(_parent + ' .product-main-image__item .img_box_2').empty();
            jQuery(_parent + ' .product-main-image__item .img_box_2').append(imgurl);

            // product description with shortcode
            var desc = product.description;

            if (desc.indexOf("[short_description]") >= 0) {
                desc = desc.split("[short_description]");
                desc = desc[1].split("[/short_description]");
                $(_parent + ' .product-short-desc').show();
                $(_parent + ' .product-short-desc').html(desc[0]);
            } else {
                $(_parent + ' .product-short-desc').html(text_truncate(product.description, 120));
            }

            //set variants property
            var inv_qua = variant.inventory_quantity;

            //price
            if (variant.price < variant.compare_at_price) {
                $('.price-part .new-price').addClass('amount');
                $('.price-part .old-price').show();
                changePriceValue('.price-part .new-price', variant.compare_at_price);
                changePriceValue('.price-part .old-price', variant.price);
            } else {
                $('.price-part .old-price').hide();
                $('.price-part .new-price').removeClass('amount');
                changePriceValue('.price-part .new-price', variant.price);
            }

            // Variants select
            if (product.variants.length > 1) {
                var variants_margin = product.options.length == 2 ? 'variants_margin' : '';
                var select = '<select id="product-select-qv" name="id">';
                var selected = 'selected';
                for (i = 0; i < product.variants.length; i++) {
                    var _var = product.variants[i];
                    if (_var.available) {
                        select += '<option value="' + _var.id + '"' + selected + '>' + _var.title + ' - ' + Shopify.formatMoney(_var.price, "<span class=money>Rs. 700 </span>") + '</option>'
                        selected = '';
                    }
                }
                select += '</select>';
                var variant_select = '<div class="variants_selects ' + variants_margin + '">';
                variant_select += select;
                variant_select += '</div><div class="divider divider--sm"></div>';
                select = variant_select;
            } else {
                var select = '<input type="hidden" name="id" value="' + product.variants[0].id + '" />';
            }

            $('.variants').empty();
            $('.variants').html(select);

            //parametres
            setParametresText(_parent + ' .product-sku', variant.sku);
            if (jQuery(_parent + ' .product-sku').length) {
                var $ava = jQuery(_parent + " .product-info__availabilitu");
                if (variant.sku != "") {
                    if ($ava.hasClass('pull-left')) {
                        $ava.removeClass('pull-left')
                    }
                } else {
                    if (!$ava.hasClass('pull-left')) {
                        $ava.addClass('pull-left')
                    }
                }
            }

            //quantity
            var out_of_stock = false;
            if (variant.inventory_management) {
                if (inv_qua > 0) {
                    $(_parent + ' .product-availability').text(inv_qua + " In Stock");
                } else {
                    out_of_stock = true;
                    $(_parent + ' .product-availability').text("In Stock");
                }
            } else {
                $(_parent + ' .product-availability').text("Many in stock");
            }

            // button
            if (!out_of_stock || variant.inventory_policy == "continue") {
                $('.product-available').show();
                $('.product-disable').hide();
                $('.addtocartqv').attr('id', product.id);
            } else {
                $('.product-available').hide();
                $('.product-disable').show();
            }

            if (product.available && product.variants.length > 1) {
                new Shopify.OptionSelectors("product-select-qv", {
                    product: product,
                    onVariantSelected: selectCallbackQv,
                    enableHistoryState: true
                });
                if ($('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                    $.each(jQuery('#quickViewModal .variants_selects .selector-wrapper'), function (index) {
                        //alert('fdf43');
                        //console.log($(this).find('label'));
                        $(this).find('label').text(product.options[index].name);
                    });
                }
            } else {
                jQuery('.currency .active').trigger('click');
            }

            selectGrid(_parent, product);
            if ($(".spr-badge").length > 0) {
                $.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");
            }
            if ($(".selector-wrapper label").length) {
                $(".selector-wrapper label").each(function (index) {

                    $(this).text(jQuery(this).text() + ":");
                });
            }

            $(_parent).modal('show');

            if (!('ontouchstart' in window) &&
                !navigator.msMaxTouchPoints &&
                !navigator.userAgent.toLowerCase().match(/windows phone os 7/i))
                return false;
            $j('body').css("top", -$j('body').scrollTop());
            $j('body').addClass("no-scroll");
            $j('.close').click(function () {
                var top = parseInt($j('body').css("top").replace("px", "")) * -1;
                $j('body').removeAttr("style");
                $j('body').removeClass("no-scroll");
                $j('body').scrollTop(top);
            });
        }

        function setParametresText(obj, value) {
            if (value != '') {
                $(obj).parent().show();
                $(obj).text(value);
            } else {
                $(obj).parent().hide();
            }
        }

        function changePriceValue(cell, value) {
            $(cell).html(Shopify.formatMoney(value, "<span class=money>Rs. 700</span>"));
        };
    });

    var selectCallbackQv = function (variant, selector) {
        var _parent = '#quickViewModal';
        var _parentprice = _parent + ' .price-part';
        if (!variant) {
            jQuery(_parent + " .price-box").hide();
            jQuery(_parent + " .qwt").hide();
            jQuery(_parent + " .control-console").hide();
            jQuery(_parent + ' .addtocartqv').attr('disabled', 'disabled');
            jQuery(_parent + ' .addtocartqv').text('Unavailable');
            return false;
        }
        jQuery(_parent + " .price-box").show();
        jQuery(_parent + " .qwt").show();
        jQuery(_parent + " .control-console").show();
        if (variant.price < variant.compare_at_price) {
            jQuery(_parentprice + ' .new-price').addClass('price-box__old');
            jQuery(_parentprice + ' .old-price').show();
            changePriceValue(_parentprice + ' .new-price', variant.price);
            changePriceValue(_parentprice + ' .old-price', variant.compare_at_price);
        } else {
            jQuery(_parentprice + ' .old-price').hide();
            jQuery(_parentprice + ' .new-price').removeClass('price-box__old');
            changePriceValue(_parentprice + ' .new-price', variant.price);
        }
        newVariantTextDataQv(_parent + ' .product-sku', variant.sku);
        if (jQuery(_parent + ' .product-sku').length) {
            var $ava = jQuery(_parent + " .product-info__availabilitu");
            if (variant.sku != "") {
                if ($ava.hasClass('pull-left')) {
                    $ava.removeClass('pull-left')
                }
            } else {
                if (!$ava.hasClass('pull-left')) {
                    $ava.addClass('pull-left')
                }
            }
        }
        if (variant.available) {
            if (variant.inventory_management == null) {
                jQuery(_parent + " .product-availability").text("Many in stock");
            } else {
                jQuery(_parent + " .product-availability").text(" Many in stock");
            }
        } else {
            jQuery(_parent + " .product-availability").text("Sold Out");
        }

        var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
        var imgurl = "<img class=\"full-width img-fluid lazyload\" alt=\"\" src = \"" + "data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20360%20459%22%3E%3C/svg%3E" + "\" data-src = \"" + shopifyimgurl + "\" >";
        if (jQuery(_parent + ' .product-main-image__item .img_box_1').children().length > 0) {
            var detach = jQuery(_parent + ' .product-main-image__item .img_box_1 img').detach();
            jQuery(_parent + ' .product-main-image__item .img_box_2').empty();
            jQuery(_parent + ' .product-main-image__item .img_box_2').append(detach);
        }
        jQuery(_parent + ' .product-main-image__item .img_box_1').empty();
        jQuery(_parent + ' .product-main-image__item .img_box_1').append(imgurl);
        if (variant && variant.available) {
            jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
            jQuery(_parent + " .control-console").show();
        } else {
            jQuery(_parent + ' .addtocartqv').attr('disabled', 'disabled');
            jQuery(_parent + ' .addtocartqv').text('Unavailable');
            jQuery(_parent + " .control-console").hide();
        }
        jQuery('.currency .active').trigger('click');
    };

    function changePriceValue(cell, value) {
        jQuery(cell).html(Shopify.formatMoney(value, "<span class=money>Rs. 700</span>"));
    };

    function newVariantTextDataQv(obj, value) {
        if (value != '') {
            jQuery(obj).parent().show();
            jQuery(obj).text(value);
        } else {
            jQuery(obj).parent().hide();
        }
    };

    function selectGrid(_parent, product) {
        setTimeout(timeout, 5);

        function timeout() {
            if (jQuery(_parent + " .selector-wrapper").length > 2) {

                jQuery(_parent + " .single-option-selector").addClass("select--wd");
            } else if (jQuery(_parent + " .selector-wrapper").length == 1) {

                $.each(jQuery('#quickViewModal .variants_selects .selector-wrapper'), function (index) {
                    //alert('fdf43');
                    //console.log($(this).find('label'));
                    jQuery(_parent + " .single-option-selector").before("<label>" + product.options[index].name + "</label>");
                    //$(this).find('label').text(product.options[index].name);
                });

                //
                jQuery(_parent + " .single-option-selector").addClass("select--wd");
            }
        }
    };
</script>
<style>
    /* modal css */
    .productmodal .modal {
        display: none !important;
    }

    .productmodal .modal.show {
        display: flex !important;
        align-items: center;
        justify-content: center;
    }

    .productmodal .modal-dialog {
        max-width: 650px;
    }

    .productmodal .modal-dialog .modal-content {
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
        border: none;
        border-radius: 0;
    }

    @media (max-width: 767px) {
        .productmodal .modal-dialog {
            display: flex;
            max-width: 100%;
            height: 100%;
            margin: 0 0;
            padding: 15px;
        }
    }

    /* modal-header css */
    .productmodal .modal-dialog .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e2e2e2;
    }

    .productmodal .modal-dialog .modal-header h6 {
        font-size: 16px;
        text-transform: capitalize;
        line-height: 1;
    }

    .productmodal .modal-dialog .modal-header .close {
        font-size: 14px;
        color: #000;
        position: relative;
        top: 0;

        right: 0;

        float: none;
        padding: 0;
        margin: 0;
        opacity: 1;
        line-height: 0;
    }

    .productmodal .modal-dialog .modal-header .close:hover {
        color: #105caa;
    }

    /* modal-body css */
    .productmodal .modal-dialog .modal-body {
        padding: 15px 0px;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .productmodal .modal-dialog .modal-body .quick-view-img {
        width: 270px;

        padding-left: 15px;

    }

    .productmodal .modal-dialog .modal-body .quick-view-content {
        padding: 0 15px;
        width: calc(100% - 270px);
        max-height: 331px;
        overflow-y: auto;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-title h6 {
        font-size: 16px;
        text-transform: capitalize;
        line-height: 1;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .price-box {
        margin-top: 16px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .price-box span.new-price {
        font-size: 16px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting {
        margin-top: 17px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge {
        display: flex;
        align-items: center;
        line-height: 1;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge .spr-starrating i.spr-icon {
        font-size: 14px !important;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-ratting .rating .spr-badge .spr-badge-caption {
        display: block;

        margin-left: 15px;

    }

    .productmodal .modal-dialog .modal-body .quick-view-content .product-desc {
        margin-top: 29px;
        padding-top: 23px;
        border-top: 1px solid #e2e2e2;
    }

    @media (max-width: 767px) {
        .productmodal .modal-dialog .modal-body .quick-view-content .product-desc {
            margin-top: 19px;
            padding-top: 13px;
        }
    }

    /* modal variant css */
    .productmodal .modal-dialog .modal-body .quick-view-content form {
        margin-top: 22px;
        border-top: 1px solid #e2e2e2;
        padding-top: 30px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper {
        margin-top: 15px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper:first-of-type {
        margin-top: 0px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper label {
        color: #222;
        font-size: 16px;
        margin-bottom: 0;
        font-weight: 600;
        line-height: 1;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quick-view-select .variants_selects .selector-wrapper select {

        margin-left: 15px;
        padding: 10px 30px 10px 15px;

        text-transform: capitalize;
    }

    @media (max-width: 767px) {
        .productmodal .modal-dialog .modal-body .quick-view-content form {
            margin-top: 12px;
            padding-top: 20px;
        }
    }


    /* modal quantity css */
    .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action h6 {
        font-size: 16px;
        text-transform: capitalize;
        line-height: 1;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .product-quantity-action .product-quantity {

        margin-left: 15px;

    }

    /* modal button css */
    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons {
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-top: 15px;

        margin-left: -15px;

    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons button,
    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a {
        color: #fff;
        font-size: 14px;
        width: calc(100% - 15px);

        margin-left: 15px;

        padding: 10px 15px;
        background-color: #222;
        text-align: center;
        text-transform: uppercase;
        font-weight: 400;
        border-radius: 0;
        line-height: normal;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a {
        margin-top: 15px;
    }

    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons button:hover,
    .productmodal .modal-dialog .modal-body .quick-view-content form .quickview-buttons a:hover {
        background-color: #105caa;
    }

    @media (max-width: 767px) {
        .productmodal .modal-dialog .modal-body {
            padding: 15px;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            flex-direction: column;
            overflow: auto;
        }

        .productmodal .modal-dialog .modal-body .quick-view-img {
            width: 100%;

            padding-left: 0px;

        }

        .productmodal .modal-dialog .modal-body .quick-view-content {
            width: 100%;
            padding: 0 0;
            margin-top: 15px;
            max-height: 100%;
            overflow-y: unset;
        }
    }
</style>

<script>
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
</script>
<script>
    $('.ajax-spin-cart').on('click', function () {
        $(this).addClass('loading add-item');
        setTimeout(function () {
            $('.ajax-spin-cart').removeClass('loading');
        }, 1000);
        setTimeout(function () {
            $('.ajax-spin-cart').removeClass("add-item");
        }, 2000);

    });
</script>
<script src="//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/wishlist.js?v=15023615124688743957"
        type="text/javascript"></script>
<script>
    /* Ajax Wishlist */
    $(".action-wishlist").on('click', function () {
        $(this).addClass("loading-wishlist adding-wishlist");
        setTimeout(function () {
            $(".action-wishlist").removeClass("loading-wishlist");
        }, 1000);
        setTimeout(function () {
            $(".adding-wishlist").removeClass("adding-wishlist");
        }, 2000);

    });

    (function () {
        Wishlist.init();
    }());
</script><!-- Recently Viewed Products -->
<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/jquery.currencies.min.js?v=3545291232168825427"
        type="text/javascript"></script>

<script>

    // Pick your format here:
    // money_format or money_with_currency_format
    Currency.format = 'money_format';

    var shopCurrency = 'INR';

    /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
    Currency.moneyFormats[shopCurrency].money_with_currency_format = "Rs. 700";
    Currency.moneyFormats[shopCurrency].money_format = "Rs. 700";

    var cookieCurrency;
    try {
        cookieCurrency = Currency.cookie.read();
    } catch (err) {
    } // ignore errors reading cookies

    // Fix for customer account pages.
    jQuery('span.money span.money').each(function () {
        jQuery(this).parents('span.money').removeClass('money');
    });

    // Saving the current price.
    jQuery('span.money').each(function () {
        jQuery(this).attr('data-currency-INR', jQuery(this).html());
    });

    // Select all your currencies buttons.
    var buttons = jQuery('.currency li');

    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
        buttons.removeClass('active');
        jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
        Currency.currentCurrency = shopCurrency;
        jQuery(".current-currency").text(shopCurrency);
    } else {
        Currency.convertAll(shopCurrency, cookieCurrency);
        buttons.removeClass('active');
        jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
        jQuery(".current-currency").text(cookieCurrency);
    }

    // When customer clicks on a currency button.
    buttons.click(function () {
        buttons.removeClass('active');
        var cur = jQuery(this).attr('data-currency');
        jQuery(".currency li[data-currency='" + cur + "']").addClass('active');

        var newCurrency = jQuery(this).attr('data-currency');
        if (newCurrency == Currency.currentCurrency) {
            Currency.convertAll(shopCurrency, newCurrency);
        } else {
            Currency.convertAll(Currency.currentCurrency, newCurrency);
        }

        jQuery(".current-currency").text(cur);
    });

    // For product options.
    var main_selectCallback = window.selectCallback;
    var selectCallback = function (variant, selector) {
        main_selectCallback(variant, selector);
        Currency.convertAll(shopCurrency, jQuery(".currency .active").attr('data-currency'));
    };
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-110326897-1', 'auto');
    ga('send', 'pageview');

</script>
<div id="shopify-section-promo-fixed" class="shopify-section">
    <div class="st-promo-fixed st-mobile-hidden"
         data-start="0"
         data-min="10000"
         data-max="40000">
        <div class="st-promo">
            <button class="st-btn-close" data-c="#105caa" data-hovercolors><i class="fa fa-times"></i></button>
            <div class="st-img promofixeddata">
                <a href="javascript:void(0)"><img class="img-fluid"
                                                  src="//cdn.shopify.com/shopifycloud/shopify/assets/no-image-100-c91dd4bdb56513f2cbf4fc15436ca35e9d4ecd014546c8d421b1aece861dfecf_90X100_crop_center.gif"
                                                  alt=""></a>
            </div>
            <div class="st-description">
                <div class="st-box-top">
                    <p class="st-some-one">Someone purchsed a</p>
                    <a href="javascript:void(0)" class="pr_name" data-c="#105caa" data-hovercolors></a>
                    <p class="st-text">
          <span class="st-info">
            <span class="st-info-value"></span>
            <span class="st-min-ago">minutes ago</span>
          </span>
                        <span class="st-info">
            <span class="st-info-text"></span>
          </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hide promofixeddata">
        <div data-url="/products/boat"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro3_66116319-ea9e-48c4-aee5-c0de6bf84624_150x.jpg?v=1606986643"
             data-alt="Boat"
             data-name="Boat"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/camera"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro39_150x.jpg?v=1606986847"
             data-alt="Camera"
             data-name="Camera"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/earbuds"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro8_150x.jpg?v=1606987015"
             data-alt="Earbuds"
             data-name="Earbuds"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/headphone"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro6_9e76ac99-ba1d-43fe-a895-2fa8d1a90b81_150x.jpg?v=1606987093"
             data-alt="Headphone"
             data-name="Headphone"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/i-phone"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro15_150x.jpg?v=1606987157"
             data-alt="I Phone"
             data-name="I Phone"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/jbl-speaker"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro37_9c497408-cd03-4ba8-b516-981c770bbaae_150x.jpg?v=1606987296"
             data-alt="JBL Speaker"
             data-name="JBL Speaker"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
        <div data-url="/products/juice-machine"
             data-image="//cdn.shopify.com/s/files/1/0509/6331/6893/products/pro64_150x.jpg?v=1606987366"
             data-alt="Juice machine"
             data-name="Juice machine"
             data-text="from New York, USA||from Berlin, Germany||from Tokyo, Japan||from Moscow, Russia||from London, England"
             data-min="1"
             data-max="16"
        ></div>
    </div>
    <script>
        function initPromoFixed() {
            var $ttpromofixed = $(".st-promo-fixed"),
                $promofixeddata = $(".promofixeddata"),
                $promofixedclose = $ttpromofixed.find(".st-btn-close");

            if ($('html').hasClass('touch-device') && $ttpromofixed.hasClass('hidden-mobile')) return false;
            if ($ttpromofixed.hasClass('hidden-mobile') && $(window).width < 1025) return false;
            if ($promofixeddata.length == 0) return false;

            setPromoFixedItem($ttpromofixed, $promofixeddata);
            showPromoFixed($ttpromofixed, $ttpromofixed.data('start'));

            showPromoFixedNextMessage($ttpromofixed, $promofixeddata, $promofixedclose)
            $promofixedclose.click(function () {
                $ttpromofixed.addClass('nonevent').fadeTo(100, 0);
            });
        }

        function showPromoFixedNextMessage($modal, $data, $close) {
            var nextmin = $modal.data('min'),
                nextmax = $modal.data('max');
            var i = getRndInteger(nextmin, nextmax);
            setTimeout(function () {
                $close.trigger('click');
                setTimeout(function () {
                    setPromoFixedItem($modal, $data);
                    showPromoFixed($modal, 0);
                    showPromoFixedNextMessage($modal, $data, $close);
                }, 100);
            }, i);
        }

        function getPromoFixedCustomProductIndex($promofixeddata) {
            var min = 0,
                max = $promofixeddata.children().length;
            return getRndInteger(min, max);
        }

        function setPromoFixedItem($modal, $data) {
            var i = getPromoFixedCustomProductIndex($data)
            var data = $data.children().eq(i);
            $modal.find('.st-img').find('a').attr('href', data.data('url')).find('img').attr('src', data.data('image')).attr('alt', data.data('alt'));
            $modal.find('.pr_name').attr('href', data.data('url')).text(data.data('name'));

            var nummin = parseInt(data.data('min')),
                nummax = parseInt(data.data('max')),
                num = getRndInteger(nummin, nummax);
            $modal.find('.st-info-value').text(num);
            if (typeof data.data('text') === typeof undefined) return false;
            var str = data.data('text').split('||'),
                i = getRndInteger(0, str.length - 1);
            $modal.find('.st-info-text').text(str[i]);
        }

        function showPromoFixed($parent, delay) {
            setTimeout(function () {
                $parent.removeClass('nonevent').fadeTo(300, 1);
            }, delay);
        }

        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        setTimeout(initPromoFixed, 300);
    </script>
    <style>
        .st-promo-fixed {
            width: 300px;
            position: fixed;
            bottom: 15px;

            left: 15px;

            z-index: 5;
        }

        .st-promo-fixed .st-promo {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 15px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        }

        .st-promo-fixed .st-promo button.st-btn-close {
            color: #105caa;
            font-size: 16px;
            display: block;
            position: absolute;
            top: 10px;

            right: 10px;

            line-height: 0;
        }

        .st-promo-fixed .st-promo .st-img {
            width: 30%;
        }

        .st-promo-fixed .st-promo .st-description {
            width: calc(70% - 15px);

            margin-left: 15px;

        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-some-one {
            line-height: 1;
        }

        .st-promo-fixed .st-promo .st-description .st-box-top a.pr_name {
            color: #105caa;
            margin-top: 8px;
            width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-weight: 600;
        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-text {
            margin-top: 5px;
        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-text span.st-info {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: 11px;
            line-height: 1;
        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-text span.st-info:first-child {
            margin-top: 0;
        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-text span.st-info span.st-min-ago {

            margin-left: 5px;

        }

        .st-promo-fixed .st-promo .st-description .st-box-top p.st-text span.st-info span.st-info-text {
            text-transform: capitalize;
        }

        @media (max-width: 767px) {
            .st-promo-fixed.st-mobile-hidden {
                display: none !important;
            }
        }
    </style>
</div>


<script>
    // ensure these are available to the global window, for use in the bootstrap js asset
    window.BOLD_mc_bootstrapSettings = {
        shopDomainUrl: 'https://mc.boldapps.net/electon-store.myshopify.com',
        flagsAssetUrl: '//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/flags.min.css?v=11423435072373700026',
        pickerCssAssetUrl: '//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/bold-currency-picker.css?v=13391284501349475482',
        productOriginalPrice: ""
    };
</script>
<script src="https://mc.boldapps.net/install_assets/bold.multicurrency.js" defer></script>
<script src="//cdn.shopify.com/s/files/1/0509/6331/6893/t/2/assets/bold-currency-bootstrap.js?v=2180478239217173281"
        defer></script>
<script type="text/template" id="bold-currency-picker-template">
    <div class="BOLD-mc-picker multi">
        <div class="currentCurrency loading" data-current-currency>
            <span class="flag flag-loading" data-flag></span>
            <span class="name" data-name>&bull;&bull;&bull;</span>
            <span class="chevron">
                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path
                        d="M13.148 10.398l-1.297 1.289q-0.148 0.148-0.352 0.148t-0.352-0.148l-4.148-4.148-4.148 4.148q-0.148 0.148-0.352 0.148t-0.352-0.148l-1.297-1.289q-0.148-0.148-0.148-0.355t0.148-0.355l5.797-5.789q0.148-0.148 0.352-0.148t0.352 0.148l5.797 5.789q0.148 0.148 0.148 0.355t-0.148 0.355z"/></svg>
            </span>
        </div>
        <ul class="currencyList" data-currency-list></ul>
    </div>
</script>

<script type="text/template" id="bold-currency-picker-mount-template">
    <span style="display:none;" class="BOLD-mc-picker-mnt " data-open="up" data-bold-mc-picker-mnt></span>
</script>
</body>
</html>

<script>
$(function(){
    $(".sign_in").on('click',function(){       
        window.location.href = "http://localhost:8000/login";
    })
})
</script>