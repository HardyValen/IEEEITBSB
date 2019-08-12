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
    <div class="sidebar-heading">Blog Settings</div>

    <li class="nav-item" id="post">
    <a class="nav-link" href="/dashboard/admin/blog-create">
        <i class="fas fa-pen-square"></i>
        <span>Create Article</span></a>
    </li>

    <li class="nav-item" id="post">
    <a class="nav-link" href="/blog">
        <i class="fas fa-file"></i>
        <span>Show Articles</span></a>
    </li>

    <li class="nav-item" id="post">
    <a class="nav-link" href="/dashboard/admin/blog-update">
        <i class="fas fa-sync-alt"></i>
        <span>Newsboard Editor</span></a>
    </li>
</ul>