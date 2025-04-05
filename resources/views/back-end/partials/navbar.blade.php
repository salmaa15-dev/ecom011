<nav class="navbar-custom">

    <!-- LOGO -->

    <div class="topbar-left">

        <a href="#" class="logo">

            <span>

                <img src="{{ $logo }}" width="50px" alt="argan-cosmetic" class="logo-lg"/>

            </span>

        </a>

    </div>



    <ul class="list-unstyled topbar-nav float-right mb-0">

        

        <li class="dropdown">

            <x-notification-component></x-notification-component>

        </li>

        <li class="dropdown">

            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"

                aria-haspopup="false" aria-expanded="false">

                {{ auth()->user()->name }}

                <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>

            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a class="dropdown-item" href="{{ route('admin.change.informations') }}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>

                <a class="dropdown-item" href="{{ route('home') }}"><i class="dripicons-wallet text-muted mr-2"></i>Shop</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('logout') }}"

                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <i class="dripicons-exit text-muted mr-2"></i> Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>

        </li>

    </ul>

    <ul class="list-unstyled topbar-nav mb-0">            
        <li>
            <button class="button-menu-mobile nav-link waves-effect waves-light">
                <i class="mdi mdi-menu nav-icon"></i>
            </button>
        </li>
    </ul>
</nav>