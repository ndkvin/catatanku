<nav class="navbar navbar-dashboard navbar-expand-lg border-bottom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="row icon">
                <div class="col">
                    <img src="/images/logo.png" class="logo me-2" alt="logo" />
                </div>
                <div class="col mt-1 d-none d-md-block">
                    <div class="title">Catatanku</div>
                </div>
                <div class="col">
                    <i class="fa-thin fa-pipe"></i>
                </div>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid hamburger-menu fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
                </li>
            </ul>
            <div class="dropdown d-lg-none">
              <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="/images/profile.png" alt="">
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Add Categories</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Notifications</a></li>
              </ul>
            </div>
            <ul class="navbar-nav right mb-2 mb-lg-0 d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <i class="fa-solid fa-puzzle-piece"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item mx-2 mt-2 d-none d-md-flex">
                    <div class="d-flex h-75">
                        <div class="vr"></div>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <img class="rounded-circle" src="/images/profile.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
