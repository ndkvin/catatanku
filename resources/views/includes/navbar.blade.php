<nav class="navbar navbar-expand-lg fixed-top" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="row icon">
                <div class="col">
                    <img src="/images/logo.png" class="logo me-2" alt="logo" />
                </div>
                <div class="col d-none d-md-block">
                    <div class="title">Catatanku</div>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid hamburger-menu fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @forelse ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category', $category->slug) }}">{{ $category->name }}</a></li>
                        @empty
                        <li>Data Empty</li>
                        @endforelse
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
