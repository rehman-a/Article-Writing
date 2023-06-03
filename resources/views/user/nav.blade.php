<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg">
                <a class="col-2 col-md-2 navbar-brand" style="text-align: inherit;">
                    <img src="/images/LOGO.png" width="auto" height="auto">
                </a>
                <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <img src="/images/menu.png" width="50" height="50">
                </button>
                <div class="col-md-10 collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="col-md-8 justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item active pl-4">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item pl-4">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item pl-4">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item pl-4">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 justify-content-center" style="text-align: center;">
                        @auth
                            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3">
                                <a href="{{ route('dashboard') }}">
                                    <span class="pr-1">{{ auth()->user()->name }}</span>
                                </a>
                            </button>
                        @else
                            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3">
                                <a href="{{ route('login') }}">
                                    <span class="pr-1">Log in</span>
                                </a>
                            </button>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
