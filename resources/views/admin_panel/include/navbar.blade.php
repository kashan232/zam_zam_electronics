<div class="header">
    <div class="header-left active">
        <a href="index.html" class="logo">
            <img src="assets/img/logo.png" alt="">
        </a>
        <a href="index.html" class="logo-small">
            <img src="assets/img/logo-small.png" alt="">
        </a>
        {{-- <a id="toggle_btn" href="javascript:void(0);"></a> --}}
    </div>
    
    <ul class="nav user-menu">
        {{-- <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search Here ...">
                        <div class="search-addon">
                            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                        </div>
                    </div>
                    <a class="btn" id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
                </form>
            </div>
        </li> --}}
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                    <span class="status online"></span></span>
            </a>
            {{-- <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <hr class="m-0">
                    <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i>
                        My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                            data-feather="settings"></i>Settings</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="#"><img src="assets/img/icons/log-out.svg"
                            class="me-2" alt="img">Logout</a>
                </div>
            </div> --}}
            <ul>
                <li>
                    <a href="{{ route('login') }}">
                        <span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </span>
                        
                    </a>
                    
                </li>
            </ul>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
        </div>
    </div>
</div>
