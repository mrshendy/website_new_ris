@extends('layouts.layout4')
@section('title', 'Advanced Technology || Red Intelligent Solutions || IT Solutions ')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="{{ __('messages.advanced_tech') }}" subtitle="{{ __('messages.advanced_tech') }}" />


    <!--Page Header End-->

    <!--Service Details Start-->
    <section class="services-details">
        <div class="services-details__shape-1"></div>
        <div class="services-details__shape-2">
            <img src="{{ asset('assets/images/shapes/services-details-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__left">
                        <div class="services-details__services-list-box">
                            <h3 class="services-details__services-list-title">{{ __('messages.more_services') }}</h3>
                            <ul class="services-details__services-list list-unstyled">
                                {{-- <li>
                                    <a href="{{ route('threat-detection-prevention') }}">
                                        {{ __('messages.threat_detection') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('endpoint-device-security') }}">
                                        {{ __('messages.endpoint_security') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('data-protection-privacy') }}">
                                        {{ __('messages.data_protection') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('data-protection-privacy') }}">
                                        {{ __('messages.backup_recovery') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('advanced-technology') }}">
                                        {{ __('messages.advanced_tech') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cloud-managed-services') }}">
                                        {{ __('messages.cloud_services') }}<span class="icon-right-arrow-2"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="services-details__need-help">
                            <div class="services-details__need-help-img">
                                <img src="{{ asset('assets/images/img/pexels-luis-gomes-166706-5468199.jpg') }}"
                                    alt="">
                                <div class="services-details__need-help-content">
                                    <div class="services-details__need-help-bdr"></div>
                                    <h3 class="services-details__need-help-title">{{ __('messages.need_help') }}</h3>
                                    <p class="services-details__need-help-number">
                                        <a href="https://wa.me/971586677283" class="site-footer-two__contact-phone">+971
                                            586 67 7283</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <h3 class="services-details__title-1">{{ __('messages.innovative_strategies') }}</h3>
                        <div class="services-details__bdr"></div>
                        <p class="services-details__text-1">{{ __('messages.approach_description') }}</p>
                        <p class="services-details__text-2">{{ __('messages.full_suite') }}</p>

                        <div class="services-details__img-1">
                            <img src="{{ asset('assets/images/img/pexels-divinetechygirl-1181244.jpg') }}" alt="">
                        </div>

                        <h4 class="services-details__title-2">{{ __('messages.core_features') }}</h4>
                        <p class="services-details__text-3">{{ __('messages.marketing_strategies') }}</p>

                        <div class="services-details__points-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="services-details__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{{ __('messages.seo_optimization') }}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{{ __('messages.targeted_ads') }}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{{ __('messages.brand_voice') }}</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul
                                        class="services-details__points-list services-details__points-list--two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{{ __('messages.performance_audits') }}</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>{{ __('messages.performance_reports') }}</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="services-details__img-box">
                            <!-- Images remain the same as they don't contain text -->
                        </div>

                        <h4 class="services-details__title-3">{{ __('messages.digital_partner') }}</h4>
                        <p class="services-details__text-4">{{ __('messages.partner_description') }}</p>

                        <div class="services-details__points-box-2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="services-details__points-two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-idea"></span>
                                            </div>
                                            <div class="content">
                                                <h5>{{ __('messages.tailored_strategies') }}</h5>
                                                <p>{{ __('messages.tailored_strategies_desc') }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-strategy"></span>
                                            </div>
                                            <div class="content">
                                                <h5>{{ __('messages.end_to_end') }}</h5>
                                                <p>{{ __('messages.end_to_end_desc') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <ul
                                        class="services-details__points-two services-details__points-two--two list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-target"></span>
                                            </div>
                                            <div class="content">
                                                <h5>{{ __('messages.data_driven') }}</h5>
                                                <p>{{ __('messages.data_driven_desc') }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-transparency"></span>
                                            </div>
                                            <div class="content">
                                                <h5>{{ __('messages.transparent') }}</h5>
                                                <p>{{ __('messages.transparent_desc') }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="services-details__bottom-img">
                            <!-- Image remains the same -->
                        </div>

                        <h4 class="services-details__title-4">{{ __('messages.get_started') }}</h4>
                        <p class="services-details__text-5">{{ __('messages.get_started_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

    <!--FAQ Two Start-->
    <section class="faq-two">
        <div class="faq-two__shape-1">
            <img src="{{ asset('assets/images/shapes/faq-two-shape-1.png') }}" alt="">
        </div>
        <div class="faq-two__shape-2">
            <img src="{{ asset('assets/images/shapes/faq-two-shape-2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-two__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-1"></div>
                                <span class="section-title__tagline">{{ __('messages.faq_section_title') }}</span>
                                <div class="section-title__tagline-shape-2"></div>
                            </div>
                            <h2 class="section-title__title title-animation">{!! __('messages.faq_main_title') !!}</h2>
                        </div>
                        <p class="faq-two__text">{{ __('messages.faq_description') }}</p>
                        <div class="faq-two__bdr"></div>
                        <div class="faq-two__contact">
                            <div class="icon">
                                <span class="icon-customer-service-headset"></span>
                            </div>
                            <div class="content">
                                <span>{{ __('messages.get_support') }}</span>
                                <p><a href="https://wa.me/971586677283">{{ __('messages.support_phone') }}</a></p>
                            </div>
                        </div>
                        <div class="faq-two__btn-box">
                            <a href="#" class="thm-btn">{{ __('messages.get_in_touch') }}<span
                                    class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-two__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            @foreach (__('messages.faq_questions') as $faq)
                                <div class="accrodion {{ $loop->index == 1 ? 'active' : '' }}">
                                    <div class="accrodion-title">
                                        <h4>{{ $faq['question'] }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p class="accrodion-content__text-1">{{ $faq['answer_part1'] }}</p>
                                            <p class="accrodion-content__text-2">{{ $faq['answer_part2'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ Two End-->

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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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
                    <div class="testimonial-two__single">
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
                                <img src="{{ asset('assets/images/resources/LogoRedO.png') }}" alt="" style="height: 64px">
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

    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
