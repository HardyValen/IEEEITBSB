<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.subsection.head')
</head>
<body style="overflow-x: hidden;">

    <main>
        <section class="newsboard-container-header">
            <a href="/blog">
                <div class="row">
                    <div class="col-12 newsboard-header">
                        <img src="{{URL::asset('assets/images/logoIEEE-square-blue.svg')}}">
                        <h1>The Newsboard</h1>
                    </div>
                </div>
            </a>
        </section>
        @yield('content')
        @include('layouts.subsection.footer-generic')
    </main>


</body>
<script src='{{URL::asset('assets/js/smooth-scroll.js')}}'></script>
<script src='{{URL::asset('assets/js/main.js')}}'></script>
</html>