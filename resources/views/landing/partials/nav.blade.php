<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-landing">
    <div class="container">
        <a class="navbar-brand fw-semibold font-display fs-3 text-dark" href="{{ url('/') }}">
            <i class="bi bi-stars text-gold me-1"></i>{{ config('app.name', 'Watch Galaxy') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#wgNav" aria-controls="wgNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="wgNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="#collections">Collections</a></li>
                <li class="nav-item"><a class="nav-link" href="#featured">New arrivals</a></li>
                <li class="nav-item"><a class="nav-link" href="#story">Our story</a></li>
                <li class="nav-item"><a class="nav-link" href="#newsletter">Newsletter</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-outline-dark btn-sm rounded-pill px-3" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-outline-dark btn-sm rounded-pill px-3" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn btn-gold btn-sm rounded-pill px-3" href="{{ route('register') }}">Join</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
