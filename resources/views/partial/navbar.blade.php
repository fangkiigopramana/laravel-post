<nav class="navbar navbar-expand-lg navbar-dark bg-danger mt-auto">
    <div class="container">
        <a class="navbar-brand" href="#">WPU BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? "active" : "") }} " href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "About" ? "active" : "") }}" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ ($title === "All Post" ? "active" : "") }} {{ ($title === "Categories" ? "active" : "") }}" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/post">All Post</a></li>
                  <li><a class="dropdown-item" href="/categories">Categories</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>