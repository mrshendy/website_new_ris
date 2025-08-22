@extends('layouts.layout4')
@section('title', 'Portfolios Details || techguru || IT Solutions & Technology Laravel Template')


@section('content')
    <x-strickyHeader />
    <x-page-header :title="App::getLocale() == 'en'
        ? $project->name
        : (App::getLocale() == 'ar'
            ? $project->name_ar
            : $project->name_f)" subtitle="Portfolios Details" />


    <!--Page Header End-->

    <!--Portfolios Details Start-->
    <section class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="portfolio-details__top">
                        <div class="portfolio-details__title-and-social">
                            <h3 class="portfolio-details__top-title">
                                @if (App::getLocale() == 'en')
                                    {{ $project->p_title }}
                                @elseif (App::getLocale() == 'ar')
                                    {{ $project->p_title_ar }}
                                @elseif (App::getLocale() == 'fr')
                                    {{ $project->p_title_f }}
                                @endif
                            </h3>
                            {{-- <div class="portfolio-details__social-box">
                                <p>Share now</p>
                                <div class="portfolio-details__social">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-dribble"></span></a>

                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="portfolio-details__get-touch">
                            <a href="{{ $project->p_link_of_project }}">Get in touch<span class="icon-right-up"></span></a>
                            <div class="portfolio-details__get-touch-shape"></div>
                        </div>
                    </div>
                    <div class="portfolio-details__portfolio-list-inner">
                        <ul class="portfolio-details__portfolio-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-add-friend"></span>
                                </div>
                                <div class="content">
                                    <span>Clients</span>
                                    <p>{{ $project->p_client_name }}<br> group</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-earning"></span>
                                </div>
                                <div class="content">
                                    <span>Budget</span>
                                    <p>{{ $project->p_budget }} </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="content">
                                    <span>Locations</span>
                                    <p>{{ $project->p_location }}</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="portfolio-details__portfolio-list portfolio-details__portfolio-list-2 list-unstyled">
                            {{-- <li>
                                <div class="icon">
                                    <span class="icon-real-estate-agency"></span>
                                </div>
                                <div class="content">
                                    <span>Industries</span>
                                    <p>real Estate Agency</p>
                                </div>
                            </li> --}}
                            <li>
                                <div class="icon">
                                    <span class="icon-calendar"></span>
                                </div>
                                <div class="content">
                                    <span>Projects End</span>
                                    <p>{{ \Carbon\Carbon::parse($project->p_end_date)->format('F d, Y') }} </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="portfolio-details__portfolio-page list-unstyled">
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <h4 class="portfolio-details__title-1">Project Overviews</h4>
                                <p class="portfolio-details__text-1">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_dis_overview }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_dis_overview_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_dis_overview_f }}
                                    @endif
                                </p>
                                <div class="portfolio-details__img-1">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="" style="max-height: 500px;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <h4 class="portfolio-details__title-2">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_title2 }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_title2_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_title2_f }}
                                    @endif
                                </h4>
                                <p class="portfolio-details__text-2">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_dis2 }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_dis2_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_dis2_f }}
                                    @endif
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <div class="portfolio-details__points-box-two row">
                                    @foreach ($project->p_points as $item)
                                        <div class="portfolio-details__points-two-single col-md-6 align-items-center">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <p>
                                                @if (App::getLocale() == 'en')
                                                    {{ $item['p_points_en'] }}
                                                @elseif (App::getLocale() == 'ar')
                                                    {{ $item['p_points_ar'] }}
                                                @elseif (App::getLocale() == 'fr')
                                                    {{ $item['p_points_f'] }}
                                                @endif
                                            </p>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <div class="portfolio-details__img-box">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="portfolio-details__img-box-img">
                                                <img src="{{ asset('storage/' . $project->p_imags_g_1) }}" alt=""
                                                    style="max-height: 300px;">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="portfolio-details__img-box-img">
                                                <img src="{{ asset('storage/' . $project->p_imags_g_2) }}" alt=""
                                                    style="max-height: 300px;">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="portfolio-details__img-box-img">
                                                <img src="{{ asset('storage/' . $project->p_imags_g_3) }}" alt=""
                                                    style="    height: 360px; object-fit: cover;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <h4 class="portfolio-details__title-3">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_title3 }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_title3_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_title3_f }}
                                    @endif
                                </h4>
                                <p class="portfolio-details__text-3">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_dis3 }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_dis3_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_dis3_f }}
                                    @endif
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <div class="portfolio-details__portfolio-list-three">
                                    @foreach ($project->p_points2 as $item)
                                        <div class="portfolio-details__portfolio-list-three-single">
                                            <div class="icon">
                                                <span class="icon-tick-inside-circle"></span>
                                            </div>
                                            <div class="content">
                                                <h5>
                                                    @if (App::getLocale() == 'en')
                                                        {{ $item['p_points2_en'] }}
                                                    @elseif (App::getLocale() == 'ar')
                                                        {{ $item['p_points2_ar'] }}
                                                    @elseif (App::getLocale() == 'fr')
                                                        {{ $item['p_points2_f'] }}
                                                    @endif ()
                                                </h5>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content w-100">
                                <div class="portfolio-details__img-box-2">
                                    <img src="{{ asset('storage/' . $project->image2) }}" alt="" style="max-height: 300px;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="portfolio-details__count"></div>
                            <div class="portfolio-details__portfolio-content">
                                <p class="portfolio-details__text-4">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_dis4 }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_dis4_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_dis4_f }}
                                    @endif
                                </p>

                                <p class="portfolio-details__text-6">
                                    @if (App::getLocale() == 'en')
                                        {{ $project->p_last_title }}
                                    @elseif (App::getLocale() == 'ar')
                                        {{ $project->p_last_title_ar }}
                                    @elseif (App::getLocale() == 'fr')
                                        {{ $project->p_last_title_f }}
                                    @endif
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolios Details End-->



    <!-- Newsletter Two Start -->


    <x-footer />
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />
@endsection
@push('scripts')
    <script>
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(e) {

            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                if (target.length) {
                    e.preventDefault();

                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);

                    return false;
                }
            }
        });
    </script>
@endpush
