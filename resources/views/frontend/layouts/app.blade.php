<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ilmu Komunikasi - Universitas Andalas</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('dist_frontend/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('dist_frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet" />

    <x-embed-styles />
    @include('frontend.layouts.css')
</head>

<body class="index-page">
    @include('frontend.layouts.header')

    <main class="main">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    @include('frontend.layouts.jsfooter')
</body>

</html>
