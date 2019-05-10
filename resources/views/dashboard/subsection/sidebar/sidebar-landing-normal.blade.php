<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <div class="sidebar-logo">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <img class='sidebar-logo__image' src="{{URL::asset('assets/images/Logo IEEE-05.png')}}">
        </a>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item" id="dashboard">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-home"></i>
        <span>Dashboard Index</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="dashboard/guidebook-disasterhack">
        <i class="fas fa-book"></i>
        <span>Guidebook</span></a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="dashboard/team-info">
        <i class="fas fa-users"></i>
        <span>Manage Team</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/essay">
        <i class="fas fa-file-upload"></i>
        <span>Submit Essay</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Welcome
    </div>
    
    <!-- Nav Item - Charts -->
    @if(Auth::user()->is_admin==1)
        <li class="nav-item" id="post">
        <a class="nav-link" href="/form">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Write a Post</span></a>
        </li>
    @else 
        <li class='nav-item'>
            <p class='nav-link nav-description'>
                This is the dashboard page for Health Disaster Hack Competition by IEEE Sight and IEEE Student Branch ITB. We suggest you to read the guidebook first.
            </p>
        </li>
    @endif
</ul>