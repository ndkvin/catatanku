<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/65e0748f1c.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/style/main.css" />
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <title>@stack('title')</title>
</head>

<body>
    <!-- Navbar -->
    @include('includes.navbar-dashboard')

    <!-- Content -->
    <div class="container-fluid dashboard py-5 mt-5">
        <button class="btn btn-outline-dark d-md-none my-3" onclick=clicking()><i
                class="fa-solid fa-chevron-right"></i></button>
        <div class="d-flex flex-row mb-3 content">
            <div class="p-3 left bg-light rounded-4 shadow" id="left">
                <a href="" class="d-block">
                    <i class="fa-solid fa-house-chimney"></i>
                </a>
                <a href="{{ route('article.index') }}" class="d-block {{ request()->is('admin/article*') ? 'active shadow' : '' }}">
                    <i class="fa-solid fa-newspaper"></i>
                </a>
                <a href="{{ route('user.index') }}" class="d-block {{ request()->is('admin/user*') ? 'active shadow' : '' }}">
                    <i class="fa-solid fa-user"></i>
                </a>
                <a href="{{ route('category.index') }}" class="d-block {{ request()->is('admin/category*') ? 'active shadow' : '' }}">
                    <i class="fa-solid fa-layer-group"></i>
                </a>
                <a href="" class="mt-5 pt-5  d-block border-top">
                    <i class="fa-solid fa-file-circle-question"></i>
                </a>
                <p class="d-block mt-2">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </p>
            </div>
            <div class="p-2 right">
                @if (session('status'))
                    <div class="w-50 alert alert-success">
                        <strong>Success!</strong> {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-anger text-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        const clicking = () => {
            const el = document.getElementById("left");
            el.classList.toggle("active");
        }
    </script>
    @stack('script')
</body>

</html>
