<header class="header clearfix element_to_stick">
    <div class="container">
        <div id="logo">
            <a href="{{url('/home')}}">
                <img src="{{ asset('assets/img/logo-ct_nobg.png') }}" height="35" alt="" class="logo_normal">
                <img src="{{ asset('assets/img/logo-ct.png') }}" height="35" alt="" class="logo_sticky">
            </a>
        </div>
        @include('lagos-user.layouts.menu')
    </div>
</header>