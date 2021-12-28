<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lagoslocal - Local Business Nearby">
    <meta name="author" content="Ansonika">
    <title>Lagoslocal - Local Business Nearby</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('user_assets/css/bootstrap_customized.min.css') }}?v=1" rel="stylesheet">
    <link href="{{ asset('user_assets/css/bootstrap.min.css') }}?v=1" rel="stylesheet">
    <link href="{{ asset('user_assets/css/style.css') }}" rel="stylesheet">

    {{-- Toastr --}}
    <link href="{{ URL::asset('user_assets/css/toastr.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    
    @yield('head')

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('user_assets/css/custom.css') }}" rel="stylesheet">

</head>