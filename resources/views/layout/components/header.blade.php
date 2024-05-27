<div class="logo">
    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/groove.png') }}" alt="Hotel Logo"></a>
</div>
<nav class="nav-list" aria-label="navbar">
    <ul>
        <li class="nav__item"><a href="{{ url('/') }}">Home</a></li>
        <li class="nav__item"><a href="{{ url('/rooms') }}">Room</a></li>
        <li class="nav__item"><a href="{{ url('/facilities') }}">Facilities</a></li>
        <li class="nav__item"><a href="{{ url('/about') }}">Contact</a></li>
        <li class="nav__item"><a href="{{ url('/') }}"><i class="fa-solid fa-right-to-bracket"></i></a></li>
    </ul>
</nav>