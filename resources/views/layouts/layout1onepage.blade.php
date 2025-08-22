<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<x-head />

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <x-loader />
    <x-sidebar-widget />

    <div class="page-wrapper">

        <x-headerStyleOnepage />
        @yield('content')
        <x-mobileMenu />
        <x-searchPopup />
        <x-scroll-to-top />
        <x-loader />
        <x-scripts />
</body>

</html>
