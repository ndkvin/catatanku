<nav class="navbar navbar-expand-lg nav-unlogin">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div class="row">
                <div class="col">
                    <img src="/images/logo.png" class="logo me-2" alt="logo" />
                </div>
                <div class="col d-none d-md-block">
                    <div class="">Catatanku</div>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Coding</a></li>
                        <li><a class="dropdown-item" href="#">Technology</a></li>
                        <li><a class="dropdown-item" href="#">Sport</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
                </li>
            </ul>
            @guest
                <ul class="authentications navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-light me-md-2"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-dark"> Login </a>
                    </li>
                </ul>
            @endguest

            @auth
                <ul class="authentications navbar-nav">
                    <li class="mt-2 nav-item">
                        Hi, {{ Auth::user()->name }}
                    </li>
                    <li class="nav-item">
                        <a class="ms-2 btn btn-dark" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
