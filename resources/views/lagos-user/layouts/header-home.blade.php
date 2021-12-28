<header class="header clearfix element_to_stick">
    <div class="container">
        <div id="logo">
            <a href="{{url('/home')}}">
                <img src="{{ asset('assets/img/logo-long_nobg.png') }}" height="35" alt="" class="logo_normal">
                <img src="{{ asset('assets/img/logo-long.png') }}" height="35" alt="" class="logo_sticky">
            </a>
        </div>
        @include('lagos-user.layouts.menu')
    </div>
</header>