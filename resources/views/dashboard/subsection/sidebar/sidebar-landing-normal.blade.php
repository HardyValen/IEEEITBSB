<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <div class="sidebar-logo">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <img class='sidebar-logo__image' src="{{URL::asset('assets/images/Logo IEEE-05.png')}}">
        </a>
    </div>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-home"></i>
        <span>Dashboard Index</span></a>
    </li>
    
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
    Navigation
    </div>

    <!-- Nav Item - Navigations -->
    <li class="nav-item">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-square"></i>
        <span>Landing Page</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/dashboard/guidebook">
        <i class="fas fa-book"></i>
        <span>Guidebook</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/dashboard/external-files">
        <i class="far fa-file"></i>
        <span>External Files</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
    Competitions
    </div>

    <!-- Nav Item - Competitions -->
    <li class="nav-item">
    <a class="nav-link" href="/dashboard/case-study">
        <i class="fas fa-link"></i>
        <span>Case Study</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/dashboard/invest">
        <i class="fas fa-link"></i>
        <span>Innovation Contest</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="/dashboard/short-movie">
        <i class="fas fa-link"></i>
        <span>Short Movie</span></a>
    </li>

    <!-- IEEE FUSION 2019 COMPETITIONS -->

        <!-- Case Study 2019 -->
        @if(Auth::user()->isCaseStudy==1)
        <!-- Divider-->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Case Study
        </div>

        <!-- 1st Level Navigation -->
        
            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/case-study/guidebook">
                <i class="fas fa-link"></i>
                <span>Case Study Guidebook</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/case-study/manage-team">
                <i class="fas fa-link"></i>
                <span>Manage Team</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/case-study/upload-files">
                <i class="fas fa-link"></i>
                <span>Upload Files</span></a>
            </li>
        @endif

        <!-- Innovation Contest 2019 -->
        @if(Auth::user()->isInvest==1)
        <!-- Divider-->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Innovation Contest
        </div>

        <!-- 1st Level Navigation -->
        
            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/invest/guidebook">
                <i class="fas fa-link"></i>
                <span>Invest Guidebook</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/invest/manage-team">
                <i class="fas fa-link"></i>
                <span>Manage Team</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/invest/upload-files">
                <i class="fas fa-link"></i>
                <span>Upload Files</span></a>
            </li>
        @endif

        <!-- Short Movie 2019 -->
        @if(Auth::user()->isShortMovie==1)
        <!-- Divider-->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Short Movie
        </div>

        <!-- 1st Level Navigation -->
        
            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/short-movie/guidebook">
                <i class="fas fa-link"></i>
                <span>Short Movie Guidebook</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/short-movie/manage-team">
                <i class="fas fa-link"></i>
                <span>Manage Team</span></a>
            </li>

            <li class="nav-item" id="post">
            <a class="nav-link" href="/dashboard/short-movie/submit-url">
                <i class="fas fa-link"></i>
                <span>Submit URL</span></a>
            </li>
        @endif
</ul>