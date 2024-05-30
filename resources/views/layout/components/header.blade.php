<div class="logo">
    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/groove.png') }}" alt="Hotel Logo"></a>
</div>
<nav class="nav-list" aria-label="navbar">
    <ul>
        <li class="nav__item"><a href="{{ url('/') }}">Home</a></li>
        <li class="nav__item"><a href="{{ url('/rooms') }}">Room</a></li>
        <li class="nav__item"><a href="{{ url('/facilities') }}">Facilities</a></li>
        <li class="nav__item"><a href="{{ url('/booking') }}">Booking</a></li>
        <li class="nav__item"><a href="{{ url('/about') }}">Contact</a></li>
        {{-- <li class="nav__item"><a href="{{ url('/about') }}">Id Name</a></li>
        <li class="nav__item"><a href="{{ url('/') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li> --}}
    </ul>
</nav>
<nav class="nav-list" aria-label="navbar">
    <ul class="nav__item">
        {{-- <div class="auth">
            @if(Auth::check())
                <li><a href="{{ url('/profile') }}">{{ Auth::user()->name }}</a></li>
            @else
                <li><a href="{{ url('/login') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            @endif
        </div> --}}
        <div class="auth">
            @if(Auth::check())
                <div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <a href="{{ url('/profile') }}">Profile</a>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <li><a href="{{ url('/login') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            @endif
        </div>
    </ul>
</nav>