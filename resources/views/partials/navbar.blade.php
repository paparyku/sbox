<nav class="navbar is-light">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <h1 class="title">SBOX</h1>
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            @if(auth()->guest())
                            <a class="button is-dark" href="{{ route('login') }}">
                                <span class="icon">
                                    <i class="fab fa-discord"></i>
                                </span>
                                <span>Sign in with Discord</span>
                            </a>
                            @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link" href="">
                                    {{ auth()->user()->name }}
                                </a>
                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="#">
                                        <span class="icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <span>Profile</span>
                                    </a>
                                    <a class="navbar-item" href="#">
                                        <span class="icon">
                                            <i class="fas fa-archive"></i>
                                        </span>
                                        <span>Addons</span>
                                    </a>
                                    <a class="navbar-item" href="#">
                                        <span class="icon">
                                            <i class="fas fa-cogs"></i>
                                        </span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="navbar-item" href="{{ route('logout') }}">
                                        <span class="icon">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </span>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
