<!-- Navbar -->
<nav
    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute mt-3 my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid pe-0">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3" href="{{ url('/') }}">
            HERVA.ID
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center me-2" aria-current="page" href="{{ url('/') }}">
                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                        Home
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link me-2 active" href="{{ route('login') }}">
                            <i class="fas fa-key opacity-6 text-dark me-1"></i>{{ __('Login') }}
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{ route('register') }}">
                                <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ">
                        <a class="nav-link me-2" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off" opacity-6 text-dark me-1></i>
                            {{ __('Logout') }} {{ Auth::user()->name }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
