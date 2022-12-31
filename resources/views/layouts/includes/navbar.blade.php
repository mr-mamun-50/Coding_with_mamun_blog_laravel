<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="order-1 navbar-brand" href="index.html">
                <img class="img-fluid" width="100px" src="{{ asset('usr_assets/images/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="order-3 text-center collapse navbar-collapse order-lg-2" id="navigation">
                <ul class="mx-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Question & Answer</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <ul class="mx-auto navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Account <i class="ml-1 ti-angle-down"></i>
                        </a>
                        <div class="dropdown-menu">

                            @auth
                                <a class="dropdown-item" href="author.html">Profile</a>

                                <a class="dropdown-item" href="author-single.html">Logout</a>
                            @else
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            @endauth

                        </div>
                    </li>
                </ul>

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>

                <button class="order-1 border-0 navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>
