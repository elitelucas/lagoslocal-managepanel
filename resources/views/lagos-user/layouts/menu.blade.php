{{-- User logged in --}}
<ul id="top_menu" class="drop_user">
    <li>
        <div class="dropdown user clearfix">
            <a href="#" data-toggle="dropdown">
                <figure><img src="user_assets/img/avatar1.jpg" alt=""></figure>Jhon Doe
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-menu-content">
                    <ul>
                        {{-- <li><a href="#0"><i class="icon_cog"></i>Dashboard</a></li>
                        <li><a href="#0"><i class="icon_document"></i>Bookings</a></li>
                        <li><a href="#0"><i class="icon_heart"></i>Wish List</a></li> --}}
                        <li><a href="#0"><i class="icon_key"></i>Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /dropdown -->
    </li>
</ul>
{{-- USER Not logged in--}}
{{-- <ul id="top_menu">
    <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
    <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
</ul> --}}

<!-- /top_menu -->
<a href="#0" class="open_close">
    <i class="icon_menu"></i><span>Menu</span>
</a>
<nav class="main-menu">
    <div id="header_menu">
        <a href="#0" class="open_close">
            <i class="icon_close"></i><span>Menu</span>
        </a>
        <a href="index.html"><img src="{{ asset('assets/img/logo-ct_nobg.png') }}" height="35" alt=""></a>
    </div>
    <ul>
        <li><a href="submit-restaurant.html">Write review</a></li>
        <li><a href="submit-restaurant.html">Favorites</a></li>
    </ul>
</nav>
