<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="50" class="d-inline-block align-text-top">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-lg-flex d-none" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">Jadwal Lelang</a>
                </li>
                <li class="nav-item me-4 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Syarat & Ketentuan</a></li>
                        <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="#">Customer Service</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary d-none d-lg-block" href="/login">Login</a>
                    <a class="btn btn-primary w-100 d-lg-none" href="/login">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
