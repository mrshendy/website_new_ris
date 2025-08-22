@extends('layouts.layout4')
@section('title', 'Contact Us || techguru || IT Solutions & Technology Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/skill.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
@endpush

@section('content')
    <x-strickyHeader />
    <x-page-header title="Contact Us" subtitle="Contact Us" />


    <!--Page Header End-->

    <!-- Contact One Start -->
    <section class="contact-one">
        <!-- ... الأكواد الأخرى تبقى كما هي حتى الجزء النصي ... -->
        <h3 class="contact-one__from-title">{{ __('messages.contact.how_can_we_help') }}</h3>

        <!-- حقول النموذج -->
        <h4 class="contact-one__input-title">{{ __('messages.contact.full_name') }}</h4>
        <input type="text" name="name" placeholder="{{ __('messages.contact.name_placeholder') }}" required>

        <!-- ... باقي النموذج بنفس الطريقة ... -->

        <h2 class="section-title__title title-animation">
            {{ __('messages.contact.start_conversation') }}
            <span>–</span><br><span>{{ __('messages.contact.reach_out_anytime') }}</span>
        </h2>

        <!-- ... باقي القسم ... -->
    </section>

    <!--FAQ Two Start-->
    <section class="faq-two">
        <!-- ... الأكواد الأخرى تبقى كما هي حتى الجزء النصي ... -->
        <span class="section-title__tagline">{{ __('messages.faq.title') }}</span>

        <h2 class="section-title__title title-animation">
            {{ __('messages.faq.frequently_asked') }}
            <span>{{ __('messages.faq.questions') }}</span>
        </h2>

        <p class="faq-two__text">{{ __('messages.faq.description') }}</p>

        <!-- الأسئلة الشائعة -->
        @foreach (__('messages.faq.questions_list') as $index => $faq)
            <div class="accrodion {{ $index === 1 ? 'active' : '' }}">
                <div class="accrodion-title">
                    <h4>{{ $faq['question'] }}</h4>
                </div>
                <div class="accrodion-content">
                    <div class="inner">
                        @foreach ($faq['answers'] as $answer)
                            <p class="accrodion-content__text-{{ $loop->index + 1 }}">{{ $answer }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <!-- ... باقي القسم ... -->
    </section>

    <!--Google Map Start-->
    <section class="google-map-one">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619:0xba03efb7998eef6d!2sCostco Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>
        </div>
    </section>
    <!--Google Map End-->


    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
