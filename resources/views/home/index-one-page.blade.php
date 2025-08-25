@extends('layouts.layout1onepage')
@section('title', 'Home One || techguru || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <!-- /.stricky-header -->



    <!--Main Slider Two Start-->
    <section class="main-slider-two" id="home">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 8000
        } 
    }'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="main-slider-two__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/pexels-luis-gomes-166706-546819.jpg') }});">
                    </div>
                    <ul class="list-unstyled main-slider-two__menu">
                        <li><a href="{{ route('about') }}">{{ __('messages.slider_menu_help') }}</a></li>
                        <li><a href="#contact">{{ __('messages.slider_menu_support') }}</a></li>

                    </ul>
                    <div class="main-slider-two__social-box">
                        <h4 class="main-slider-two__social-title">{{ __('messages.slider_follow_us') }}</h4>
                        <div class="main-slider-two__social-box-inner">
                            <a href="https://www.facebook.com/share/1CfGQTKSZ2/?mibextid=wwXIfr"><span
                                    class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/_red.i.s_?igsh=ZWRlamg4MXhsN2F2&utm_source=qr"><i
                                    class="fa-instagram fab"></i></a>
                            <a href="https://www.linkedin.com/company/red-intelligent-solutions/about/?viewAsMember=true"><span
                                    class="icon-linkedin"></span></a>
                        </div>
                    </div>
                    <!--Brand Two Start -->
                    <div class="brand-two">
                        <div class="brand-two__wrapper">
                            <div class="brand-two__inner">
                                <div class="brand-two__left">
                                    <div class="main-slider__trustpilot-box d-none">
                                        <ul class="list-unstyled main-slider__trustpilot-img-list">
                                            <li>
                                                <div class="main-slider__trustpilot-img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-slider__trustpilot-img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-img-2.jpg') }}"
                                                        alt="">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="main-slider__trustpilot-content-box">
                                            <a href="#testimonial">
                                                <div class="main-slider__trustpilot-logo">
                                                    <img src="{{ asset('assets/images/resources/main-slider-trustpilot-logo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="main-slider__trustpilot-rating-review">
                                                    <p class="main-slider__trustpilot-rating">
                                                        {{ __('messages.slider_trustpilot_rating') }}</p>
                                                    <p class="main-slider__trustpilot-review">
                                                        {{ __('messages.slider_trustpilot_reviews') }} <span
                                                            class="odometer" data-count="4170"></span> </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-two__right">
                                    <div class="brand-two__carousel owl-theme owl-carousel">
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/log3o.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/logo-com-C1ZmNZzB.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/logo_ar.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/LOGO2-PNG.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/logo.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/Logo3.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="brand-two__single">
                                                <div class="brand-two__img">
                                                    <img style="height: 40px"
                                                        src="{{ asset('assets/images/brand/03.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Brand Two End -->
                    <div class="main-slider-two__shape-1"></div>
                    <div class="main-slider-two__shape-2 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-two__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-3.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <div class="main-slider-two__sub-title-box">
                                        <div class="main-slider-two__sub-title-icon">
                                            <img src="{{ asset('assets/images/icon/main-slider-sub-title-icon.png') }}"
                                                alt="">
                                        </div>
                                        <p class="main-slider-two__sub-title">{{ __('messages.slider_sub_title') }}</p>
                                    </div>
                                    <h2 class="main-slider-two__title">{!! __('messages.slider_title_part1') !!}
                                        {!! __('messages.slider_title_part2') !!}
                                    </h2>
                                    <p class="main-slider-two__text">{!! __('messages.slider_text') !!}</p>
                                    <div class="main-slider-two__btns-box">
                                        <div class="main-slider-two__btn-box-1">
                                            <a href="{{ route('contact') }}"
                                                class="thm-btn">{{ __('messages.slider_get_started') }}<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                        <div class="main-slider-two__btn-box-2">
                                            <a href="{{ route('about') }}"
                                                class="thm-btn">{{ __('messages.slider_read_more') }}<span
                                                    class="icon-right-arrow"></span></a>
                                        </div>
                                    </div>
                                    <div class="main-slider-two__shield-check-icon">
                                        <img src="{{ asset('assets/images/icon/main-slider-shield-check-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other slides (swiper-slide) with same content -->

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-two__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-up"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-up"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider Two End-->

    <!--About Two Start -->
    <section class="about-two" id="about">
        <div class="about-two__shape-2"></div>
        <div class="about-two__shape-3">
            <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            {{-- about us section - slide --}}
            <div class="owl-theme owl-carousel aboutUsSlider">
                <div class="item">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-two__left">
                                <div class="about-two__img-box">
                                    <div class="about-two__img">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-kevin-ku-92347-577585.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__img-2">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-lalorosas-907487.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__shape-1"></div>
                                </div>
                                {{-- <div class="about-two__client-box">
                                    <ul class="about-two__client-img-list list-unstyled">
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-plus"></span></a>
                                        </li>
                                    </ul>
                                    <p class="about-two__client-text">
                                        <span class="odometer" data-count="120">00</span>
                                        <span>K</span> {{ __('messages.about_satisfied_clients') }}
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-two__right">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <div class="section-title__tagline-shape-1"></div>
                                        <span class="section-title__tagline">{{ __('messages.about_tagline_v') }}</span>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                        class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                        {!! __('messages.about_title_part1') !!}
                                        {!! __('messages.about_title_part2') !!}
                                    </h2>
                                </div>
                                <p class="about-two__text">{{ __('messages.about_text_v') }}</p>
                                <div class="about-two__points-box">
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point1_v') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point2_v') !!}</p>
                                        </li>
                                    </ul>
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point3_v') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point4_v') !!}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-two__experience-contact-and-btn">
                                    <div class="about-two__experience-box">
                                        <div class="about-two__experience-count-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span> </span>
                                        </div>
                                        <p class="about-two__experience-text">{!! __('messages.about_experience') !!}</p>
                                    </div>
                                    <div class="about-two__call-box">
                                        <div class="about-two__call-icon">
                                            <span class="icon-customer-service-headset"></span>
                                        </div>
                                        <div class="about-two__call-content">
                                            <span>{{ __('messages.about_call_us') }}</span>
                                            <p><a href="https://wa.me/971586677283"
                                                    class="site-footer-two__contact-phone">+971
                                                    586 67 7283</a></p>
                                            <p><a href="https://wa.me/201006789994"
                                                    class="site-footer-two__contact-phone">+20
                                                    1006 78 9994</a></p>
                                        </div>
                                    </div>
                                    {{-- <div class="about-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn">
                                            {{ __('messages.about_learn_more') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="item">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-two__left">
                                <div class="about-two__img-box">
                                    <div class="about-two__img">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-divinetechygirl-1181534.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__img-2">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-jakubzerdzicki-33433704.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__shape-1"></div>
                                </div>
                                {{-- <div class="about-two__client-box">
                                    <ul class="about-two__client-img-list list-unstyled">
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-plus"></span></a>
                                        </li>
                                    </ul>
                                    <p class="about-two__client-text">
                                        <span class="odometer" data-count="120">00</span>
                                        <span>K</span> {{ __('messages.about_satisfied_clients') }}
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-two__right">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <div class="section-title__tagline-shape-1"></div>
                                        <span class="section-title__tagline">{{ __('messages.about_tagline_m') }}</span>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                        class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                        {!! __('messages.about_title_part1') !!}
                                        {!! __('messages.about_title_part2') !!}
                                    </h2>
                                </div>
                                <p class="about-two__text">{{ __('messages.about_text_m') }}</p>
                                <div class="about-two__points-box">
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point1_m') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point2_m') !!}</p>
                                        </li>
                                    </ul>
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point3_m') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point4_m') !!}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-two__experience-contact-and-btn">
                                    <div class="about-two__experience-box">
                                        <div class="about-two__experience-count-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span> </span>
                                        </div>
                                        <p class="about-two__experience-text">{!! __('messages.about_experience') !!}</p>
                                    </div>
                                    <div class="about-two__call-box">
                                        <div class="about-two__call-icon">
                                            <span class="icon-customer-service-headset"></span>
                                        </div>
                                        <div class="about-two__call-content">
                                            <span>{{ __('messages.about_call_us') }}</span>
                                            <p><a href="https://wa.me/971586677283"
                                                    class="site-footer-two__contact-phone">+971
                                                    586 67 7283</a></p>
                                            <p><a href="https://wa.me/201006789994"
                                                    class="site-footer-two__contact-phone">+20
                                                    1006 78 9994</a></p>
                                        </div>
                                    </div>
                                    {{-- <div class="about-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn">
                                            {{ __('messages.about_learn_more') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="item">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-two__left">
                                <div class="about-two__img-box">
                                    <div class="about-two__img">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-divinetechygirl-1181675.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__img-2">
                                        <img src="{{ asset('assets/images/backgrounds/pexels-tima-miroshnichenko-5380664.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="about-two__shape-1"></div>
                                </div>
                                {{-- <div class="about-two__client-box">
                                    <ul class="about-two__client-img-list list-unstyled">
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="about-two__client-img">
                                                <img src="{{ asset('assets/images/resources/about-two-client-img-1-3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-plus"></span></a>
                                        </li>
                                    </ul>
                                    <p class="about-two__client-text">
                                        <span class="odometer" data-count="120">00</span>
                                        <span>K</span> {{ __('messages.about_satisfied_clients') }}
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-two__right">
                                <div class="section-title text-left sec-title-animation animation-style2">
                                    <div class="section-title__tagline-box">
                                        <div class="section-title__tagline-shape-1"></div>
                                        <span class="section-title__tagline">{{ __('messages.about_tagline_c') }}</span>
                                        <div class="section-title__tagline-shape-2"></div>
                                    </div>
                                    <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                        class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                        {!! __('messages.about_title_part1') !!}
                                        {!! __('messages.about_title_part2') !!}
                                    </h2>
                                </div>
                                <p class="about-two__text">{{ __('messages.about_text_c') }}</p>
                                <div class="about-two__points-box">
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point1_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point2_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point7_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point8_c') !!}</p>
                                        </li>
                                    </ul>
                                    <ul class="about-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point3_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point4_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point5_c') !!}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{!! __('messages.about_point6_c') !!}</p>
                                        </li>

                                    </ul>
                                </div>
                                <div class="about-two__experience-contact-and-btn">
                                    <div class="about-two__experience-box">
                                        <div class="about-two__experience-count-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span> </span>
                                        </div>
                                        <p class="about-two__experience-text">{!! __('messages.about_experience') !!}</p>
                                    </div>
                                    <div class="about-two__call-box">
                                        <div class="about-two__call-icon">
                                            <span class="icon-customer-service-headset"></span>
                                        </div>
                                        <div class="about-two__call-content">
                                            <span>{{ __('messages.about_call_us') }}</span>

                                            <p><a href="https://wa.me/971586677283"
                                                    class="site-footer-two__contact-phone">+971
                                                    586 67 7283</a></p>
                                            <p><a href="https://wa.me/201006789994"
                                                    class="site-footer-two__contact-phone">+20
                                                    1006 78 9994</a></p>
                                        </div>
                                    </div>
                                    {{-- <div class="about-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn">
                                            {{ __('messages.about_learn_more') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </section>
    <!--About Two End -->

    <!-- Counter Two Start -->
    {{-- <section class="counter-two">
        <div class="counter-two__bg-shape"
            style="background-image: url({{ asset('assets/images/shapes/counter-two-bg-shape.png') }});"></div>
        <div class="container">
            <div class="row">
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-trophy"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="120">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">{{ __('messages.counter_award') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-user"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="300">00</h3>
                                <span> </span>
                            </div>
                            <p class="counter-two__text">{{ __('messages.counter_team_members') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-chat"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="20">00</h3>
                                <span>M</span>
                            </div>
                            <p class="counter-two__text">{{ __('messages.counter_client_reviews') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
                <!--Counter Two Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-two__single">
                        <div class="counter-two__icon-inner">
                            <div class="counter-two__icon">
                                <span class="icon-folder"></span>
                            </div>
                        </div>
                        <div class="counter-two__content">
                            <div class="counter-two__count-box">
                                <h3 class="odometer" data-count="1.5">00</h3>
                                <span>K</span>
                            </div>
                            <p class="counter-two__text">{{ __('messages.counter_projects_completed') }}</p>
                        </div>
                    </div>
                </div>
                <!--Counter Two Single End-->
            </div>
        </div>
    </section> --}}
    <!-- Counter Two End -->

    <!-- Services Two Start -->
    <section class="services-two" id="services">
        <div class="services-two__shape-1"></div>
        <div class="container">
            <div class="services-two__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">{{ __('messages.services_tagline') }}</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                        class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                        {!! __('messages.services_title_part1') !!}
                        {!! __('messages.services_title_part2') !!}
                        <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="">
                        {!! __('messages.services_title_part3') !!}
                    </h2>
                </div>
                <a href="#services" class="services-two__round-text-box">
                    <div class="services-two__round-text-box-outer">
                        <div class="services-two__round-text-box-inner">
                            <div class="services-two__curved-circle">
                                {{ __('messages.services_view_all') }}
                            </div>
                            <div class="services-two__round-icon">
                                <img src="{{ asset('assets/images/icon/services-two-round-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="services-two__bottom">
                <div class="services-two__services-list">
                    <!-- Service 1 -->
                    <div class="services-two__services-list-single services-two__services-list-single-1">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title">
                                <a href="{{ route('advanced-technology') }}">
                                    {!! __('messages.service1_title') !!}
                                </a>
                            </h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item1') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item2') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item2') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item3') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item3') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service1_item1') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/backgrounds/pexels-rpnickson-3082341.jpg') }}"
                                alt="Image">
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title">
                                <a href="{{ route('data-protection-privacy') }}">
                                    {!! __('messages.service2_title') !!}
                                </a>
                            </h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item1') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item2') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item3') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item4') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item5') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service2_item6') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/backgrounds/pexels-tara-winstead-8386440.jpg') }}"
                                alt="Image">
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title">
                                <a href="{{ route('cloud-managed-services') }}">
                                    {!! __('messages.service3_title') !!}
                                </a>
                            </h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item1') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item2') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item3') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item4') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item5') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service3_item6') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/backgrounds/pexels-pixabay-39284.jpg') }}" alt="Image">
                        </div>
                    </div>

                    <!-- Service 4 -->
                    {{-- <div class="services-two__services-list-single">
                        <div class="services-two__count-and-title">
                            <div class="services-two__count"></div>
                            <h3 class="services-two__title">
                                <a href="{{ route('backup-recovery') }}">
                                    {!! __('messages.service4_title') !!}
                                </a>
                            </h3>
                        </div>
                        <div class="services-two__service-list-box">
                            <ul class="services-two__services-list-inner list-unstyled">
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item1') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item2') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item3') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item4') }}</p>
                                </li>
                                <li>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item5') }}</p>
                                    <p><span class="icon-plus"></span>{{ __('messages.service4_item6') }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="services-two__hover-img">
                            <img src="{{ asset('assets/images/services/services-2-1.jpg') }}" alt="Image">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Services Two End -->

    <!-- Why Choose One Start -->
    <section class="why-choose-one">
        <div class="why-choose-one__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-3.png') }}" alt="">
        </div>
        <div class="why-choose-one__shape-4"></div>
        <div class="why-choose-one__shape-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">{{ __('messages.why_choose_tagline') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                {!! __('messages.why_choose_title_part1') !!}
                                {!! __('messages.why_choose_title_part2') !!}
                            </h2>
                        </div>
                        <p class="why-choose-one__text">{{ __('messages.why_choose_text') }}</p>
                        <ul class="why-choose-one__progress-list list-unstyled">
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">
                                        {{ __('messages.why_choose_progress1_title') }}</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar"
                                            data-percent="{{ __('messages.why_choose_progress1_value') }}">
                                            <div class="count-text">{{ __('messages.why_choose_progress1_value') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="why-choose-one__progress">
                                    <h4 class="why-choose-one__progress-title">
                                        {{ __('messages.why_choose_progress2_title') }}</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar"
                                            data-percent="{{ __('messages.why_choose_progress2_value') }}">
                                            <div class="count-text">{{ __('messages.why_choose_progress2_value') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="why-choose-one__btn-and-client-info">
                            <div class="why-choose-one__btn-box">
                                <a href="#about" class="thm-btn">
                                    {{ __('messages.why_choose_about_btn') }}<span class="icon-right-arrow"></span>
                                </a>
                            </div>
                            <div class="why-choose-one__client-box">
                                <div class="why-choose-one__client-img">
                                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                                        alt="" style="height: 46px; object-fit: contain;">
                                </div>
                                <div class="why-choose-one__client-content">
                                    <h3>{{ __('messages.why_choose_founder_name') }}</h3>
                                    <span>{{ __('messages.why_choose_founder_position') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="why-choose-one__right wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <div class="why-choose-one__img">
                            <img src="{{ asset('assets/images/backgrounds/pexels-fauxels-3182773.jpg') }}"
                                alt="">
                        </div>
                        <div class="why-choose-one__shape-1 img-bounce">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-1.png') }}" alt="">
                        </div>
                        <div class="why-choose-one__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/why-choose-one-shape-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose One End -->

    <!-- Sliding Text Three Start -->
    <section class="sliding-text-three">
        <div class="sliding-text-three__wrap">
            <ul class="sliding-text-three__list list-unstyled marquee_mode">
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
                <li>
                    <img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                        style="height: 40px ; width: 150px; object-fit: contain;" alt="" srcset="">
                    <span class="icon-star"></span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

    <!-- Process Two Start -->
    <section class="process-two">
        <div class="process-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/pexels-anshul-kumar-495857555-16023919.jpg') }});">
        </div>
        <div class="process-two__bg-shape float-bob-y"
            style="background-image: url({{ asset('assets/images/shapes/process-two-bg-shape.png') }});">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('messages.process_tagline') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                    class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                    {!! __('messages.process_title_part1') !!}
                </h2>
            </div>
            <ul class="row list-unstyled">
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">{{ __('messages.process_step1_title') }}</h3>
                        <p class="process-two__text">{!! __('messages.process_step1_text') !!}</p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__shape-1 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="process-two__shape-2 float-bob-x">
                            <img src="{{ asset('assets/images/shapes/process-two-shape-2.png') }}" alt="">
                        </div>
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">{{ __('messages.process_step2_title') }}</h3>
                        <p class="process-two__text">{!! __('messages.process_step2_text') !!}</p>
                    </div>
                </li>
                <!--Process Two Single End-->
                <!--Process Two Single Start-->
                <li class="col-xl-4 col-lg-4">
                    <div class="process-two__single">
                        <div class="process-two__count"></div>
                        <h3 class="process-two__title">{{ __('messages.process_step3_title') }}</h3>
                        <p class="process-two__text">{!! __('messages.process_step3_text') !!}</p>
                    </div>
                </li>
                <li>
                    <!--Process Two Single End-->
                </li>
            </ul>
        </div>
    </section>
    <!-- Process Two End -->

    <!-- Portfolio Two Start -->
    {{-- <section class="portfolio-two" id="portfolio">
        <div class="portfolio-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/portfolio-two-shape-1.png') }}" alt="">
        </div>
        <div class="portfolio-two__shape-2"></div>
        <div class="portfolio-two__shape-3"></div>
        <div class="portfolio-two__shape-4"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('messages.portfolio_tagline') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                    class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                    {!! __('messages.portfolio_title_part1') !!}
                    {!! __('messages.portfolio_title_part2') !!}
                </h2>
            </div>
            <div class="portfolio-two__carousel-container">
                <div class="portfolio-two__carousel owl-carousel owl-theme"
                    style="{{ app()->getLocale() == 'ar' ? 'direction: ltr;' : '' }}">
                  
                    <div class="item">
                        <div class="portfolio-two__single-box">
                            <ul class="portfolio-two__box list-unstyled">
                                @foreach ($projects as $project)
                                    <li>
                                        <div class="portfolio-two__box-content">
                                            <div class="single-portfolio-two__bg"
                                                style="background-image: url({{ asset('storage/' . $project->image) }});">
                                            </div>
                                            <div class="portfolio-two__title">
                                                <h3><a href="{{ route('portfolio-details', ['id' => $project->id]) }}">
                                                        @if (App::getLocale() == 'en')
                                                            {{ $project->name }}
                                                        @elseif (App::getLocale() == 'ar')
                                                            {{ $project->name_ar }}
                                                        @elseif (App::getLocale() == 'fr')
                                                            {{ $project->name_f }}
                                                        @endif
                                                    </a></h3>
                                            </div>
                                            <div class="portfolio-two__content-box">
                                                <div class="portfolio-two__icon">
                                                    <a href="{{ asset('assets/images/project/portfolio-2-1.jpg') }}"
                                                        class="img-popup"><span class="icon-right-arrow-1"></span></a>
                                                </div>
                                                <div class="portfolio-two__title-box">
                                                    <h3 class="portfolio-two__title-2"><a
                                                            href="{{ route('portfolio-details', ['id' => $project->id]) }}">
                                                            @if (App::getLocale() == 'en')
                                                                {{ $project->name }}
                                                            @elseif (App::getLocale() == 'ar')
                                                                {{ $project->name_ar }}
                                                            @elseif (App::getLocale() == 'fr')
                                                                {{ $project->name_fr }}
                                                            @endif
                                                        </a></h3>
                                                    <p class="portfolio-two__text">
                                                        @if (App::getLocale() == 'en')
                                                            {{ $project->dis1 }}
                                                        @elseif (App::getLocale() == 'ar')
                                                            {{ $project->dis1_ar }}
                                                        @elseif (App::getLocale() == 'fr')
                                                            {{ $project->dis1_fr }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                    <!--Portfolio Two Single End-->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Portfolio Two End -->

    <!-- Pricing Two Start -->
    {{-- <section class="pricing-two">
        <div class="pricing-two__sec-shape-1"></div>
        <div class="pricing-two__sec-shape-2"></div>
        <div class="pricing-two__sec-shape-3"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('messages.pricing_tagline') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                    class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                    {!! __('messages.pricing_title_part1') !!}
                </h2>
            </div>
            <div class="pricing-two__main-tab-box tabs-box">
                <ul class="tab-buttons list-unstyled">
                    <li data-tab="#monthly" class="tab-btn">
                        <span>{{ __('messages.pricing_tab_monthly') }}</span>
                    </li>
                    <li data-tab="#yearly" class="tab-btn active-btn">
                        <span>{{ __('messages.pricing_tab_yearly') }}</span>
                    </li>
                    <li data-tab="#packges" class="tab-btn">
                        <span>{{ __('messages.pricing_tab_packages') }}</span>
                    </li>
                </ul>
                <div class="tabs-content">
                    <!-- Monthly Tab -->
                    <div class="tab" id="monthly">
                        <div class="pricing-two__inner">
                            <div class="row">
                                <!-- Personal Plan -->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-1">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span
                                            class="pricing-two__sub-title">{{ __('messages.pricing_plan_personal') }}</span>
                                        <h2 class="pricing-two__price">$5.60</h2>
                                        <p class="pricing-two__text">{!! __('messages.pricing_personal_text') !!}</p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">
                                                {{ __('messages.pricing_choose_plan') }}<span
                                                    class="far fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <h5 class="pricing-two__points-title">{{ __('messages.pricing_features_title') }}
                                        </h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature1') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature2') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature3') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature4') }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Premium Plan -->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-2">
                                        <div class="pricing-two__single-shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span
                                            class="pricing-two__sub-title">{{ __('messages.pricing_plan_premium') }}</span>
                                        <h2 class="pricing-two__price">$25.60</h2>
                                        <p class="pricing-two__text">{{ __('messages.pricing_premium_text') }}</p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">
                                                {{ __('messages.pricing_choose_plan') }}<span
                                                    class="far fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <h5 class="pricing-two__points-title">{{ __('messages.pricing_features_title') }}
                                        </h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature1') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature2') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature5') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature3') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature4') }}</p>
                                            </li>
                                        </ul>
                                        <p class="pricing-two__unlimited-offer">
                                            {{ __('messages.pricing_unlimited_offer') }}</p>
                                    </div>
                                </div>
                                <!-- Business Plan -->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-two__single pricing-two__single-3">
                                        <div class="pricing-two__single-shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-single-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-1">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-1.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-2">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-2.png') }}"
                                                alt="">
                                        </div>
                                        <div class="pricing-two__shape-3">
                                            <img src="{{ asset('assets/images/shapes/pricing-two-shape-3.png') }}"
                                                alt="">
                                        </div>
                                        <span
                                            class="pricing-two__sub-title">{{ __('messages.pricing_plan_business') }}</span>
                                        <h2 class="pricing-two__price">$120.60</h2>
                                        <p class="pricing-two__text">{{ __('messages.pricing_business_text') }}</p>
                                        <div class="pricing-two__btn-box">
                                            <a href="{{ route('pricing') }}" class="pricing-two__btn">
                                                {{ __('messages.pricing_choose_plan') }}<span
                                                    class="far fa-plus-circle"></span>
                                            </a>
                                        </div>
                                        <h5 class="pricing-two__points-title">{{ __('messages.pricing_features_title') }}
                                        </h5>
                                        <ul class="pricing-two__points list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature1') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-tick-inside-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature2') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature3') }}</p>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="far fa-plus-circle"></span>
                                                </div>
                                                <p>{{ __('messages.pricing_feature4') }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yearly and Packages tabs use same content structure -->
                    <!-- Yearly Tab -->
                    <div class="tab active-tab" id="yearly">
                        <!-- Same content as monthly tab, just change the ID -->
                        <!-- ... -->
                    </div>

                    <!-- Packages Tab -->
                    <div class="tab" id="packges">
                        <!-- Same content as monthly tab, just change the ID -->
                        <!-- ... -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Pricing Two End -->

    <!-- Contact Two Start -->
    <section class="contact-two" id="contact">
        <ul class="contact-two__sliding-text-list list-unstyled marquee_mode-2">
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">
                    {{ __('messages.contact_sliding_text') }}
                </h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">
                    {{ __('messages.contact_sliding_text') }}
                </h2>
            </li>
            <li>
                <h2 data-hover="Branding" class="contact-two__sliding-text-title">
                    {{ __('messages.contact_sliding_text') }}
                </h2>
            </li>
        </ul>
        <div class="contact-two__bg"
            style="background-image: url({{ asset('assets/images/backgrounds/pexels-zeleboba-32854186.jpg') }});">
        </div>
        <div class="contact-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/contact-two-shape-1.png') }}" alt="">
        </div>
        <div class="contact-two__shape-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">{{ __('messages.contact_tagline') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                {!! __('messages.contact_title_part1') !!}
                            </h2>
                        </div>
                        <p class="contact-two__text">{!! __('messages.contact_text') !!}</p>
                        <ul class="contact-two__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <span>{{ __('messages.contact_email_label') }}</span>
                                    <p><a
                                            href="mailto:Info@redintelligentsolutions.com">Info@redintelligentsolutions.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <span>{{ __('messages.contact_phone_label') }}</span>
                                    <p><a href="https://wa.me/971586677283">+971 586 67 7283</a></p>
                                    <p><a href="https://wa.me/201006789994">+20 1006 78 9994</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <span>{{ __('messages.contact_address_label') }}</span>
                                    <p>Alexandria, Egypt
                                        <br> Dubai, UAE</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-two__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <form class="" action="{{ route('contact.send') }}"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">{{ __('messages.contact_form_name_label') }}
                                    </h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-user-1"></span>
                                        </div>
                                        <input type="text" name="name"
                                            placeholder="{{ __('messages.contact_form_name_placeholder') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">{{ __('messages.contact_form_email_label') }}
                                    </h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <input type="email" name="email"
                                            placeholder="{{ __('messages.contact_form_email_placeholder') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-one__input-title">{{ __('messages.contact_form_phone_label') }}
                                    </h4>
                                    <div class="contact-one__input-box">
                                        <div class="contact-one__input-icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <input type="text" name="phone"
                                            placeholder="{{ __('messages.contact_form_phone_placeholder') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 d-none">
                                    <h4 class="contact-one__input-title">{{ __('messages.contact_form_subject_label') }}
                                    </h4>
                                    <div class="contact-one__input-box ">
                                        <div class="select-box">
                                            <select class="selectmenu wide" name="subject">
                                                <option selected>{{ __('messages.contact_form_name_placeholder') }}
                                                </option>
                                                <option>{{ __('messages.contact_form_option1') }}</option>
                                                <option>{{ __('messages.contact_form_option2') }}</option>
                                                <option>{{ __('messages.contact_form_option3') }}</option>
                                                <option>{{ __('messages.contact_form_option4') }}</option>
                                                <option>{{ __('messages.contact_form_option5') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <h4 class="contact-one__input-title">{{ __('messages.contact_form_message_label') }}</h4>
                                <div class="contact-one__input-box text-message-box">
                                    <div class="contact-one__input-icon">
                                        <span class="icon-edit"></span>
                                    </div>
                                    <textarea name="message" placeholder="{{ __('messages.contact_form_message_placeholder') }}"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="thm-btn">
                                        <span>{{ __('messages.contact_form_submit_btn') }}</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="result mt-2"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Two End -->

    <!-- Event One Start -->
    {{-- <section class="event-one">
        <div class="event-one__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/event-one-shape-1.png') }}" alt="">
        </div>
        <div class="event-one__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/event-one-shape-2.png') }}" alt="">
        </div>
        <div class="event-one__shape-3"></div>
        <div class="event-one__shape-4"></div>
        <div class="event-one__shape-2"></div>
        <div class="container">
            <div class="event-one__top">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">{{ __('messages.events_tagline') }}</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                        class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                        {!! __('messages.events_title') !!}
                    </h2>
                </div>
                <div class="event-one__top-btn-box">
                    <a href="{{ route('contact') }}" class="thm-btn">
                        {{ __('messages.events_contact_btn') }}<span class="icon-right-arrow"></span>
                    </a>
                </div>
            </div>
            <div class="event-one__bottom">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="event-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/resources/event-one-img-1.jpg') }}" alt="">
                                <div class="event-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="event-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="event-one__right">
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="100ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">{{ __('messages.event1_title') }}</a></h5>
                                        <p>{{ __('messages.event1_desc') }}</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/05/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span
                                                    class="icon-pin"></span>{{ __('messages.event1_address') }}</a>
                                        </li>
                                        <li>
                                            <a href="#"><span
                                                    class="icon-calendar"></span>{{ __('messages.event1_date') }}</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">
                                            {{ __('messages.events_book_seat') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInRight" data-wow-delay="200ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">{{ __('messages.event2_title') }}</a></h5>
                                        <p>{{ __('messages.event2_desc') }}</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/07/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span
                                                    class="icon-pin"></span>{{ __('messages.event1_address') }}</a>
                                        </li>
                                        <li>
                                            <a href="#"><span
                                                    class="icon-calendar"></span>{{ __('messages.event2_date') }}</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">
                                            {{ __('messages.events_book_seat') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                            <!-- Event One Single Start -->
                            <div class="event-one__single wow fadeInLeft" data-wow-delay="300ms">
                                <div class="event-one__title-and-countdown-box">
                                    <div class="event-one__title">
                                        <h5><a href="{{ route('contact') }}">{{ __('messages.event3_title') }}</a></h5>
                                        <p>{{ __('messages.event3_desc') }}</p>
                                    </div>
                                    <div class="event-one__countdown-box">
                                        <div class="timer-box clearfix">
                                            <div class="countdown-timer">
                                                <div class="default-coundown">
                                                    <div class="default-coundown-box">
                                                        <div class="countdown event-one-countdown"
                                                            data-countdown-time="2025/09/28">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-one__meta-and-btn-box">
                                    <ul class="event-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span
                                                    class="icon-pin"></span>{{ __('messages.event1_address') }}</a>
                                        </li>
                                        <li>
                                            <a href="#"><span
                                                    class="icon-calendar"></span>{{ __('messages.event3_date') }}</a>
                                        </li>
                                    </ul>
                                    <div class="event-one__btn-box">
                                        <a href="{{ route('contact') }}" class="event-one__btn">
                                            {{ __('messages.events_book_seat') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Event One Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Event One End -->

    <!-- Testimonial Two Start -->
    <section class="testimonial-two" id="testimonial">
        <div class="testimonial-two__shape-1"></div>
        <div class="testimonial-two__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">{{ __('messages.testimonials_tagline') }}</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                    class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                    {!! __('messages.testimonials_title') !!}
                </h2>
            </div>
            <div class="testimonial-two__carousel owl-theme owl-carousel">
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-1') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client1_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client1_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-2') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client2_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client2_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->

                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-3') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client3_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client3_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->

                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-star" style="color: #ffd25d"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-4') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client4_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client4_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->

                <!-- Repeated testimonials use same translation keys -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-5') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client5_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client5_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->
                <!-- Testimonial Two Single Start -->
                <div class="item">
                    <div class="testimonial-two__single" style="min-height: 350px">
                        <div class="testimonial-two__single-inner">
                            <div class="testimonial-two__star">
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star"></span>
                                <span class="icon-pointed-star" style="color: #ffd25d"></span>
                                <span class="icon-pointed-star"></span>
                            </div>
                            <p class="testimonial-two__text">{{ __('messages.testimonial_text-6') }}</p>
                        </div>
                        <div class="testimonial-two__client-info">
                            <div class="testimonial-two__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__client-content">
                                <h4 class="testimonial-two__client-name">
                                    <a
                                        href="{{ route('testimonials') }}">{{ __('messages.testimonial_client6_name') }}</a>
                                </h4>
                                <p class="testimonial-two__sub-title">{{ __('messages.testimonial_client6_position') }}
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-two__quote">
                            <span class="icon-right-quote"></span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Two Single End -->

                <!-- Additional testimonials follow same pattern -->
                <!-- ... -->
            </div>
        </div>
    </section>
    <!-- Testimonial Two End -->

    <!-- Blog Two Start -->
    <section class="blog-two" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="blog-two__left wow fadeInLeft" data-wow-delay="100ms">
                        <div class="section-title text-left sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">{{ __('messages.blog_tagline') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 @if (app()->getLocale() == 'ar') data-aos="fade-right" @endif
                                class="@if (app()->getLocale() == 'ar') section-title__titlee @else section-title__title title-animation @endif">
                                {!! __('messages.blog_title') !!}
                            </h2>
                        </div>
                        <p class="blog-two-text">{{ __('messages.blog_description') }}</p>
                        <div class="blog-two__top-btn-box">
                            <a href="#" class="thm-btn">
                                {{ __('messages.blog_view_all') }}<span class="icon-right-arrow"></span>
                            </a>
                        </div>
                        <div class="blog-two__left-content-box">
                            <div class="blog-two__single">
                                <div class="blog-two__img">
                                    <img src="{{ asset('assets/images/blog/pexels-ron-lach-9783812.jpg') }}"
                                        alt="">
                                    <div class="blog-two__tags">
                                        <span>{{ __('messages.blog_tag_digital') }}</span>
                                        <span>{{ __('messages.blog_tag_technology') }}</span>
                                    </div>
                                </div>
                                <div class="blog-two__content">
                                    <div class="blog-two__user">
                                        <div class="blog-two__user-img">
                                            <img src="{{ asset('assets/images/blog/blog-two-user-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="blog-two__user-title">{{ __('messages.blog_author1') }}</p>
                                    </div>
                                    <ul class="blog-two__meta list-unstyled">
                                        <li>
                                            <a href="#"><span
                                                    class="far fa-calendar-alt"></span>April 5, 2025</a>
                                        </li>
                                        <li>
                                            <a href="#"><span
                                                    class="fal fa-comments"></span>80
                                                {{ __('messages.blog_comments') }}</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-two__title">
                                        <a href="#">{{ __('messages.blog_post1_title') }}</a>
                                    </h3>
                                    <p class="blog-two__text">{{ __('messages.blog_post1_excerpt') }}</p>
                                    <div class="blog-two__btn-box">
                                        <a href="#" class="thm-btn">
                                            {{ __('messages.blog_read_more') }}<span class="icon-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-two__right">
                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="100ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/backgrounds/pexels-rpnickson-3082341.jpg') }}"
                                    alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-2.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">{{ __('messages.blog_author2') }}</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>{{ __('messages.blog_tag_digital') }}</span>
                                    <span>{{ __('messages.blog_tag_technology') }}</span>
                                </div>
                                <h3 class="blog-two__title-two">
                                    <a href="#">{{ __('messages.blog_post2_title') }}</a>
                                </h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="#"><span
                                                class="far fa-calendar-alt"></span>Jun, 2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fal fa-comments"></span>12
                                            {{ __('messages.blog_comments') }}</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="#" class="thm-btn">
                                        {{ __('messages.blog_read_more') }}<span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->

                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInRight" data-wow-delay="200ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/backgrounds/pexels-divinetechygirl-1181467.jpg') }}"
                                    alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-3.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">{{ __('messages.blog_author3') }}</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>{{ __('messages.blog_tag_digital') }}</span>
                                    <span>{{ __('messages.blog_tag_technology') }}</span>
                                </div>
                                <h3 class="blog-two__title-two">
                                    <a href="#">{{ __('messages.blog_post3_title') }}</a>
                                </h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="#"><span
                                                class="far fa-calendar-alt"></span>Jul, 2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fal fa-comments"></span>12
                                            {{ __('messages.blog_comments') }}</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="#" class="thm-btn">
                                        {{ __('messages.blog_read_more') }}<span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->

                        <!-- Blog Two Single Two Start -->
                        <div class="blog-two__single-two wow fadeInLeft" data-wow-delay="300ms">
                            <div class="blog-two__img-two">
                                <img src="{{ asset('assets/images/blog/pexels-ngeshlew-289927.jpg') }}" alt="">
                            </div>
                            <div class="blog-two__content-two">
                                <div class="blog-two__user-two">
                                    <div class="blog-two__user-two-img">
                                        <img src="{{ asset('assets/images/blog/blog-two-user-4.jpg') }}" alt="">
                                    </div>
                                    <p class="blog-two__user-two-title">{{ __('messages.blog_author1') }}</p>
                                </div>
                                <div class="blog-two__tags-two">
                                    <span>{{ __('messages.blog_tag_digital') }}</span>
                                    <span>{{ __('messages.blog_tag_technology') }}</span>
                                </div>
                                <h3 class="blog-two__title-two">
                                    <a href="#">{{ __('messages.blog_post4_title') }}</a>
                                </h3>
                                <ul class="blog-two__meta-two list-unstyled">
                                    <li>
                                        <a href="#"><span
                                                class="far fa-calendar-alt"></span>Aug, 2025</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fal fa-comments"></span>12
                                            {{ __('messages.blog_comments') }}</a>
                                    </li>
                                </ul>
                                <div class="blog-two__btn-box-two">
                                    <a href="#" class="thm-btn">
                                        {{ __('messages.blog_read_more') }}<span class="icon-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Two Single Two End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Two End -->

    <!-- Newsletter Two Start -->


    <x-footer />
@endsection
