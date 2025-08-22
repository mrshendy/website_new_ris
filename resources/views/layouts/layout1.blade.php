<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<x-head />

<body class="custom-cursor">
    {{-- <h1>{{ app()->getLocale() }}
        {{ __('messages.welcome') }}
    </h1>
    <div class="test123">
        <a href="{{ route('change.language', 'ar') }}">العربية</a>
        <a href="{{ route('change.language', 'en') }}">English</a>
        <a href="{{ route('change.language', 'fr') }}">Français</a>
    </div> --}}
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <x-loader />
    <x-sidebar-widget />

    <div class="page-wrapper">

        <x-headerStyleOne />
        @yield('content')
        <x-mobileMenu />
        <x-searchPopup />
        <x-scroll-to-top />
        <x-loader />
        <x-scripts />
</body>

</html>
