{{-- nav bar --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/navBar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/aboutUs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/contactUs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/package.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/profile.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/admin-package.css') }}">
    <title>{{ config('app.name')}}</title>
</head>
<body>

    {{-- navigation bar --}}
    @include('layouts.navigation')

    {{-- page contain hear --}}
    @yield('content')


    {{-- footer --}}
    @include('layouts.footer')


    

    <script src="{{ asset('js/webShare.js') }}" defer></script>
    <script src="{{ asset('js/profile.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>