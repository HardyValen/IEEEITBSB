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
<li class="nav-item">
<a class="nav-link" href="/dashboard">
    <i class="fas fa-home"></i>
    <span>Dashboard Index</span></a>
</li>

<li class="nav-item" >
<a class="nav-link" href="/dashboard/guidebook-disasterhack">
    <i class="fas fa-book"></i>
    <span>Guidebook</span></a>
</li>

<li class="nav-item" id="dashboard">
<a class="nav-link" href="/dashboard/team-info">
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
TEAM OPTIONS
</div>

<!-- Nav Item - Charts -->

<li class="nav-item" id="addteam">
    <a class="nav-link" href="/addteam">
    <i class="fas fa-user-plus"></i>
    <span>Add a Team Member</span></a>
</li>
<li class="nav-item"id="team0">
    <a class="nav-link" href="/confirm/0">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Upload Photo for Team Leader</span></a>
</li>
@if(Auth::user()->nama_anggota1!=NULL)
    <li class="nav-item" id="team1">
        <a class="nav-link" href="/confirm/1">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Upload Photo for Team Member 1</span></a>
    </li>
@endif
@if(Auth::user()->nama_anggota2!=NULL)
<li class="nav-item" id="team2">
    <a class="nav-link" href="/confirm/2">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Upload Photo for Team Member 2</span></a>
</li>
@endif
</ul>

<!--<li class="nav-item" id="essay">
    <a class="nav-link" href="/essay">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Submit Essay</span></a>
</li>-->