<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/dashboard.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/aboutUs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/contactUs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/package.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/profile.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/admin-blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/admin-package.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/admin-ckeditor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/booking.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/manageUser.css') }}">

    <title>Admin Dashboard</title>
</head>
<body style="background-color: #f0f0f0;">

    @include('layouts.admin-layouts.navigationbar')

    @yield('admincontent')
    

    {{-- for bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    {{-- this script forCKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#tourPlaneDescription' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#includeThings' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#Excludes_things' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
    <script>
        ClassicEditor
            .create( document.querySelector( '#blogDescription' ),
            {
                ckfinder:
                {
                    uploadUrl:"{{route('admin.add.blog',['_token'=>csrf_token()])}}",
                }
             } )

            .catch( error => {
                console.error( error );
            } );
    </script>


</body>
</html>

