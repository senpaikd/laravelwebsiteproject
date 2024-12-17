<header class="header_area">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn" style="display: none;"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light" style="align-items: center;">
            <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
                <a class="navbar-brand logo_h" href="{{ url('/') }}" style="display: flex; align-items: center; vertical-align: top;">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" style="max-width: 100%; max-height: 60px; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="display: flex; align-items: top;">
                    <ul class="nav navbar-nav menu_nav ml-auto" style="display: flex; align-items: center; margin: 0;">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}" style="display: flex; align-items: top;">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}" style="display: flex; align-items: top;">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}" style="display: flex; align-items: center;">Contact</a></li>
                        <li class="nav-item"><a href="#" class="nav-link search" id="search" style="display: flex; align-items: center;"><i class="ti-search"></i></a></li>
                        <li class="nav-item submenu dropdown" style="display: flex; align-items: center;">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                            <ul class="dropdown-menu" style="top: 100%;">
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
