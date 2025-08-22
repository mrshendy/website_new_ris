<header class="main-header-two">
    <div class="main-menu-two__top">
        <div class="main-menu-two__top-inner">
            <p class="main-menu-two__top-text">{{ __('messages.header.tagline') }}</p>
            <ul class="list-unstyled main-menu-two__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                        <p>{{ __('messages.header.address') }}</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-search-mail"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-menu-two__left">
                    <div class="main-menu-two__logo">
                        <a href="{{ route('index-one-page') }} "><img src="{{ asset('assets/images/resources/LogoRedO.png') }}"
                                alt="{{ __('messages.header.logo_alt') }}" style="height: 80px"></a>
                    </div>
                </div>
                <div class="align-items-center d-flex gap-2 main-menu-two__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list one-page-scroll-menu">
                        <li class="dropdown megamenu scrollToLink">
                            <a href="{{ route('index-one-page') }}">{{ __('messages.menu.home') }}</a>
                            <ul>
                                <li>
                                    <section class="home-showcase">
                                        <div class="container">
                                            {{-- <div class="home-showcase__inner">
                                                <div class="row">
                                                    @foreach (__('messages.menu.home_pages') as $page)
                                                        <div class="col-lg-4">
                                                            <div class="home-showcase__item">
                                                                <div class="home-showcase__image">
                                                                    <img src="{{ asset($page['image']) }}"
                                                                        alt="{{ $page['title'] }}">
                                                                    <div class="home-showcase__buttons">
                                                                        <a href="{{ route($page['multi_page_route']) }}"
                                                                            class="thm-btn home-showcase__buttons__item">
                                                                            {{ __('messages.menu.multi_page') }}
                                                                            <span class="icon-right-arrow"></span>
                                                                        </a>
                                                                        <a href="{{ route($page['one_page_route']) }}"
                                                                            class="thm-btn home-showcase__buttons__item">
                                                                            {{ __('messages.menu.one_page') }}
                                                                            <span class="icon-right-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h3 class="home-showcase__title">{{ $page['title'] }}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div> --}}
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </li>
                        @foreach (__('messages.menu.items') as $item)
                            <li class="scrollToLink">
                                <a href="#{{ $item['link'] }}">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="background: no-repeat;border: none;">
                            <img src="{{ asset('assets/images/translate.png') }}" alt="" style="width: 17px;">
                        </button>
                        <ul class="dropdown-menu p-2">
                            <li><a style="color: black" href="{{ route('change.language', 'ar') }}">العربية</a></li>
                            <li><a style="color: black" href="{{ route('change.language', 'en') }}">English</a></li>
                            <li><a style="color: black" href="{{ route('change.language', 'fr') }}">Français</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu-two__right">
                    <div class="main-menu-two__search-box">
                        <a href="#"
                            class="main-menu-two__search searcher-toggler-box icon-search-interface-symbol"></a>
                    </div>
                    <div class="main-menu-two__btn-box">
                        <a href="{{ route('index') }}#contact" class="thm-btn">{{ __('messages.menu.get_in_touch') }}<span
                                class="icon-right-arrow"></span></a>
                    </div>
                    <div class="main-menu-two__nav-sidebar-icon">
                        <a class="navSidebar-button" href="#">
                            <span class="icon-dots-menu-one"></span>
                            <span class="icon-dots-menu-two"></span>
                            <span class="icon-dots-menu-three"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
