<header>
            
    <nav class="navbar">
        <div class="contener">
            <picture id="header_logo" class="in w15"> 
                <img src="{{ asset('image/logo.png') }}" alt="logo"/>
            </picture><!--
            --><div id="menu" class="in w85">
                <div class="icon_menu_list"><span class="material-icons" id="toggleButton">menu</span></div>
                <div id="menu_list" class="menu_list">
                    <ul>
                        <li class="menu_list_li"><a href="{{ route('index') }}" title="Home" >Home</a></li>
                        <li class="menu_list_li"><a href="{{ route('events') }}" title="Events" >Events</a></li>
                        <li class="menu_list_li"><a href="{{ route('about') }}" title="About" >About</a></li>
                        <li class="menu_list_li"><a href="{{ route('contact') }}" title="Contact" >Contact</a></li>
                        <li class="menu_list_li double"><a href="{{ route('create_product') }}" title="Create Event" >Create Event</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
    $('#toggleButton').click(function() {
        $('#menu_list').toggle();
    });
});
</script>