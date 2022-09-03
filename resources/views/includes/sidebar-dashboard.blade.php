<div class="p-3 left bg-light rounded-4 shadow" id="left">
    <a href="{{ route('dashboard') }}" class="d-block {{ request()->is('dashboard') ? 'active shadow' : '' }}">
        <i class="fa-solid fa-house-chimney"></i>
    </a>
    <a href="{{ route('dashboard.article.index') }}"
        class="d-block {{ request()->is('dashboard/article*') ? 'active shadow' : '' }}">
        <i class="fa-solid fa-newspaper"></i>
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
