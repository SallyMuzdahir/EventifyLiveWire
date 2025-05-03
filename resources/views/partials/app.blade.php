<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Create A new Event">
        <meta name="auther" content="Eventify">
        <title>Eventify</title>

        <meta property="og:title" content="Eventify">
        <meta property="og:description" content="Create Event">
        <meta property="og:image" content="{{ asset('image/logo.png') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        
        <link rel="icon" type="image/png" size="180×48" href="{{ asset('image/tab_logo.png') }}">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    </head>
    <body>
        @include('partials.header')
  
        @yield('content')

        @include('partials.footer')

     
    </body>

</html>