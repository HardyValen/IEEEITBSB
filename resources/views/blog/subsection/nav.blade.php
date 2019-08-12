<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/blog">Articles</a>
    </li>
    @if (Auth::Check())
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
    @endif
</ul>