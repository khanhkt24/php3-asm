<nav class="navbar navbar-expand-lg navbar-white">
    <a class="navbar-brand order-1" href="{{route('home')}}">
        <img class="img-fluid" width="100px" src="{{asset('client/images/logo.png')}}" alt="Reader | Hugo Personal Blog Template">
    </a>
    <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{route('home')}}" role="button"  aria-haspopup="true"
                    aria-expanded="false">
                    Trang chủ
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    About Me <i class="ti-angle-down ml-1"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Thể loại <i class="ti-angle-down ml-1"></i>
                </a>
                <div class="dropdown-menu">

                    @foreach ($tag as $item => $value)
                        <a class="dropdown-item" href="{{route('tags.posts',$value->id)}}">
                            {{ $value->name }}
                        </a>
                    @endforeach

                </div>
            </li>
        </ul>
    </div>

    <div class="order-2 order-lg-3 d-flex align-items-center">
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->type==='admin')
                            <a class="dropdown-item" href="{{ route('posts.index') }}">Admin
                            </a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

        <!-- search -->


        <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
        </button>
    </div>

</nav>
