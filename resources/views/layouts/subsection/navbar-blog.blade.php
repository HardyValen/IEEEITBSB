
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <object class='nav-logo' data="{{URL::asset('assets/images/Digital Logo IEEE ITB.svg')}}" type="image/svg+xml"></object>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger hamburger--slider">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-item-style-top">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item nav-item-style">
                <a href="/blog" class="nav-link">BLOG</a>
            </li>
            <li class="nav-item nav-item-style">
                <a class="nav-link" href="disaster-hack">HACKATHON COMPETITON</a>
            </li>
            @if(Auth::user())
            <li class="nav-item nav-item-style nav-loggedin">
                <a href="/dashboard" class="nav-link">DASHBOARD</a>
            </li>
            <li class="nav-item nav-item-style-bottom nav-loggedin">
                <a href="/logout" class="nav-link">LOGOUT</a>
            </li>
            @endif
        </ul>
    </div>
</nav>