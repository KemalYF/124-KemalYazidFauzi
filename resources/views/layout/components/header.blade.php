<div class="logo">
    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/groove.png') }}" alt="Hotel Logo"></a>
</div>
<nav class="nav-list" aria-label="navbar">
    <ul>
        <li class="nav__item"><a href="{{ url('/home') }}">Home</a></li>
        <li class="nav__item"><a href="{{ url('/rooms') }}">Room</a></li>
        <li class="nav__item"><a href="{{ url('/facilities') }}">Facilities</a></li>
        <li class="nav__item"><a href="{{ url('/booking') }}">Booking</a></li>
        <li class="nav__item"><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
</nav>
<nav class="nav-list" aria-label="navbar">
    <ul class="nav__item">
        <div class="auth">
            @if(Auth::check())
              <div class="dropdown">
                <button class="dropbtn">
                  <i class="fa fa-user"></i> {{ Auth::user()->email }} <span class="caret"></span>
                </button>
                <ul class="dropdown-content logged-in">  <li><a>Level: {{ Auth::user()->role }}</a></li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="{{ route('actionlogout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fa fa-power-off"></i> Log Out
                    </a>
                    <form id="logout-form" action="{{ route('actionlogout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>
              </div>
            @else
              <li><a href="{{ url('/login') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
            @endif
          </div>
        </div>
    </ul>
</nav>
