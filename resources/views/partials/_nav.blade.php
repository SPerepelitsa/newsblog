<!-- Start Header -->
<div class="container zerogrid">
    <div class="col-full">
        <div class="wrap-col">
            <div id="header-nav-container">

                <a href="#">
                    <img src="/images/logo1.png" id="logo"/>
                </a>

                <!-- Navigation Menu -->

                <ul class="sf-menu">
                    <li class="menu-item current-menu-item"><a href="{{route('main')}}">Home</a></li>
                    <li class="menu-item"><a href="blog.html">Blog</a></li>
                    <li class="menu-item"><a href="#">Features</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Menu 01</a></li>
                            <li class="menu-item"><a href="#">Menu 02</a></li>
                            <li class="menu-item"><a href="#">Menu 03</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="about.html">About us</a></li>

                    @if(Auth::check())

                        <li class="menu-item"><a href="#">{{Auth::user()->name}}</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#">Profile</a></li>
                                @if(Auth::user()->role->name == 'admin')
                                    <li class="menu-item"><a href="{{ route('posts.index') }}">Admin Panel</a></li>
                                @endif
                                <li class="menu-item"><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>

                    @else

                        <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>
                        <li class="menu-item"><a href="{{ route('register') }}">Register</a></li>

                    @endif

                </ul>
                <!-- End Navigation Menu -->

                <div class="clear"></div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="spacing-30"></div>
<!-- End Header -->