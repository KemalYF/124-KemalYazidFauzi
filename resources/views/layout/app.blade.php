<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hotel')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header class="navbar-container">
        @include('layout.components.header')
    </header>
    <main>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        @include('layout.components.footer')
    </footer>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>