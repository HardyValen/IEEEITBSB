
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
        <img class='nav-logo' src="/assets/images/Digital Logo IEEE ITB.svg">
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
                <a class="nav-link" href="/blog">NEWSBOARD</a>
            </li>
            <li class="nav-item nav-item-style dropdown">
                <a class="nav-link dropdown-toggle " href="competitions" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ABOUT
                </a>
                <div class="dropdown-menu scrollable-menu" aria-labelledby="navbarDropdown">
                    
                    <a class='dropdown-item' href="/about-itbsb" >
                        IEEE SB ITB
                    </a>
                    
                    <a class='dropdown-item' href="/credits">
                        Credits
                    </a>
                </div>
            </li>
            <li class="nav-item nav-item-style">
                <a class="nav-link" href="/fusion2019">FUSION 2019</a>
            </li>
            @if(Auth::user())
            <li class="nav-item nav-item-style nav-loggedin">
                <a href="/dashboard" class="nav-link">DASHBOARD</a>
            </li>
            <li class="nav-item nav-item-style-bottom nav-loggedin">
                <a href="/logout" class="nav-link">LOGOUT</a>
            </li>
            @else
            <li class="nav-item nav-item-style">
                <a href="/register" class="nav-link">REGISTER</a>
            </li>
            <li class="nav-item nav-item-style-bottom">
                <a href="/login" class="nav-link">LOGIN</a>
            </li>

            @endif
        </ul>
    </div>
</nav>