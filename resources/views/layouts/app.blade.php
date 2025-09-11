<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Demo')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://db.onlinewebfonts.com/c/14e523770c5978f99d37e398db437d47?family=Palo+Wide" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    {{-- Navbar --}}
    @include('partials.header')

    <main role="main">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
