<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.subsection.head')
</head>
<body style="overflow-x: hidden;">
    <header>
        @include('layouts.subsection.navbar-hero')
    </header>

    <main>
        @yield('content')
        @include('layouts.subsection.footer-generic')
    </main>


</body>
<script src='{{URL::asset('assets/js/smooth-scroll.js')}}'></script>
<script src='{{URL::asset('assets/js/main.js')}}'></script>
</html>