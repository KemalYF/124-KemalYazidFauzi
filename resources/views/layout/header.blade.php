<body>
    <header class="navbar-container">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/groove.png') }}" alt="Hotel Logo"></a>
        </div>
        <nav class="nav-list" aria-label="navbar">
            <ul>
                <li class="nav__item"><a href="{{ url('/') }}">Home</a></li>
                <li class="nav__item"><a href="{{ url('/room') }}">Room</a></li>
                <li class="nav__item"><a href="{{ url('/favorite') }}">Favorite</a></li>
                <li class="nav__item"><a href="{{ url('/about') }}">Contact</a></li>
                
                {{-- niatnya notif sama login menggunakan logo, tapi belum terealisasikan jadi seadanya dulu
                <li class="nav__item"><a href="{{ url('/') }}">Notifikasi</a></li>
                <li class="nav__item"><a href="{{ url('/') }}">Login</a></li> --}}
            </ul>
        </nav>
    </header>
</body>