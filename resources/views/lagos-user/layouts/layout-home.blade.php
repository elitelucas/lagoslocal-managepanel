@include('lagos-user.layouts.head')

@include('lagos-user.layouts.header-home')

<main>
    @yield('content')  
</main>

@include('lagos-user.layouts.footer')

@include('lagos-user.layouts.footer-script')

@yield('script')
