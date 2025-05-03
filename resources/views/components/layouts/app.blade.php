<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Create A new Event">
        <meta name="auther" content="Eventify">
        {{-- <title>Eventify</title> --}}

        <meta property="og:title" content="Eventify">
        <meta property="og:description" content="Create Event">
        <meta property="og:image" content="{{ asset('storage/images/logo.png') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        
        <link rel="icon" type="image/png" size="180×48" href="{{ asset('storage/images/tab_logo.png') }}">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">


        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="contener">
                <picture id="header_logo" class="in w15"> 
                    <img src="{{ asset('storage/images/logo.png') }}" alt="logo"/>
                </picture><!--
                --><div id="menu" class="in w85">
                    <div class="icon_menu_list"><span class="material-icons" id="toggleButton">menu</span></div>
                    <div id="menu_list" class="menu_list">
                        <ul>
                            <li class="menu_list_li"><a wire:navigate href="{{ route('home')}}" title="Home"  @class(['current'=>request()->is('/')])>Home</a></li>
                            <li class="menu_list_li"><a wire:navigate href="{{ route('events')}}" title="Events" @class(['current'=>request()->is('events')]) >Events</a></li>
                            <li class="menu_list_li"><a wire:navigate href="{{ route('about') }}" title="About" @class(['current'=>request()->is('about')]) >About</a></li>
                            <li class="menu_list_li"><a wire:navigate href="{{ route('contact') }}" title="Contact" @class(['current'=>request()->is('contact')]) >Contact</a></li>
                            <li class="menu_list_li double"><a wire:navigate href="{{ route('create_event') }}" title="Create Event" @class(['current'=>request()->is('create_event')]) >Create Event</a></li>
     -
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </body>
    <footer id="footer"></footer>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
    $('#toggleButton').click(function() {
        $('#menu_list').toggle();
    });
});
</script>